<?php
namespace In3050Inm428WebDev\PhpMvc\Models;

require_once('./includes/dbconnect.php');

class ManageReservation
{

    public function __construct()
    {

    }

 
    

    public function dbCreateReservation($name, $email, $date, $service, $time, $guests, $phone, $extraRequests): bool{

        $db = db_connect();
        $tables = ceil($guests / 2);
        //insert into db dont have to worry about duplicates as we only show times which are not booked so hence no duplicates will be populated in the table
        $sql = "INSERT INTO reservation (name, email, reservation_date, service, time_booked, party_size,tables, phone_number, extra_requirements) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
        $stmt = $db->prepare($sql);
        //sql injection protection
        $stmt->bind_param("sssssssss", $name, $email, $date, $service, $time, $guests, $tables, $phone, $extraRequests);
        //return true if the query is successful
        $result = $stmt->execute();
        if ($result) {

            //update the tables bookes in services_setup to increment the tables booked. 
            $sql = "UPDATE service_setup SET tables_booked = tables_booked + ? WHERE service_date = ? and service = ?;";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("iss", $tables, $date, $service);
            $stmt->execute();
            $stmt->close();
            $db->close();
            return true;
        } else {
            $db->close();
            return false;
        }
    }

    public function dbGetServicesByDate($date): array{
        $db = db_connect();
        $sql = "SELECT * FROM service_setup WHERE service_date = '$date' and service_status = 'available' and tables_booked < tables_available;";
        $result = $db->query($sql);
        $services = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        //empty array will be returned if no services are found
        $db->close();
        return $services;
    }

    public function dbGetServiceTimes($Service, $date): array{
        $db = db_connect();
        //first get the times for available for the services and  for the date
        $sql = "SELECT time_start, time_end FROM service_setup WHERE service_date = '$date' and service = '$Service';";
        $result = $db->query($sql);
        $timeStart = null;
        $timeEnd = null;
        //as we always have one service at a given time this means we can just get the start and end time
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $timeStart = $row['time_start'];
            $timeEnd = $row['time_end'];
            }
        }
        
        //then get the times that are already booked for so we can remove them from the available times intervals
        $bookedtimessql = "SELECT time_booked FROM reservation WHERE service = '$Service' and reservation_date = '$date';";
        $bookedtimesresult = $db->query($bookedtimessql);
        $bookedtimes = [];
        //store in a list so we can compare and remove after. similar to stack data structure
        if ($bookedtimesresult->num_rows > 0) {
            while($row = $bookedtimesresult->fetch_assoc()) {
                $bookedtimes[] = $row['time_booked'];
            }
        }


        //create a start and end interval time
        $start_interval = new \DateTime($timeStart);
        $end_interval = new    \DateTime($timeEnd);
        $end_interval->modify('-15 minutes');

        //create an interval of 15 minutes
        $interval = new \DateInterval('PT15M');
        $timerange = new \DatePeriod($start_interval, $interval ,$end_interval);

        $result = [];

        //loop through the timerange and check if the time is in the booked times   

        foreach ($timerange as $time) {
            $formattedSlot = $time->format('H:i:s'); // Format as 'H:i:s' for comparison
            if (!in_array($formattedSlot, $bookedtimes)) {
                $result[] = $time->format('H:i:s'); // Add the slot if it's not excluded
            }
        }
        
        //empty array will be returned if no services are found
        $db->close();
       return $result;
    }

    //get the reservation by email
    public function dbGetReservation($email): array{
        $db = db_connect();
        $sql = "SELECT * FROM reservation WHERE email = ? order by reservation_date desc;";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $reservations = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $reservations[] = $row;
            }
        }
        //empty array will be returned if no services are found
        $stmt->close();
        $db->close();
        return $reservations;
    }

    public function dbGetBookingsToday(): array{
        $db = db_connect();
        //query to get all the reservations for today
        $sql = "SELECT * from reservation where reservation_date = CURDATE() order by time_booked asc;";
        $result = $db->query($sql);
        //store the results in an array
        $reservations = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $reservations[] = $row;
            }
        }
        //empty array will be returned if no services are found
      
        return $reservations;
    }

    public function dbGetNextBookingList(){

        $db = db_connect();
        //query to get all the reservations for today
        $sql = "SELECT time_start, time_end, service, service_date, tables_booked
FROM service_setup
    WHERE 
      (
        (service_date = CURDATE() AND time_start > CURTIME())
        OR (service_date > CURDATE())
      )
      AND tables_booked > 0 
    ORDER BY service_date, time_start
    LIMIT 1;";

    //get the time_end servicedate and service and make a query to get the reservations for that service where time is less than time_end
    $result = $db->query($sql);
    $nextBooking = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $nextBooking = $row;
        }

        
        $service = $nextBooking['service'];
        $service_date = $nextBooking['service_date'];
        $time_end = $nextBooking['time_end'];
        $sql = "SELECT * from reservation where service = '$service' and reservation_date = '$service_date' and time_booked < '$time_end' order by time_booked asc;";
        $result = $db->query($sql);
        //store the results in an array
        $reservations = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $reservations[] = $row;
            }
        }
        $db->close();
        return $reservations;
    }}
       
}