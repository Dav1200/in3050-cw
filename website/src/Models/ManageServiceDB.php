<?php

namespace In3050Inm428WebDev\PhpMvc\Models;
require_once('./includes/dbconnect.php');
class ManageServiceDB
{
    //constructor
    public function __construct()
    {

    }

    //3 functins to fetch services for today, tomorrow and the day after tomorrow for their services available.
    public function dbFetchTodayService(): array
    {
        //fetch services for today and return the result
        $db = db_connect();
        $sql = "SELECT * FROM service_setup  WHERE service_date = CURDATE() ORDER BY FIELD(service, 'Breakfast', 'Lunch', 'Dinner');";
        $result = $db->query($sql);
        $services = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        $result->close();

        return $services;
    }

    //function to fetch services for tomorrow
    public function dbFetchTomorrowService(): array
    {
        //fetch services for tomorrow and return the result
        $db = db_connect();
        $sql = "SELECT * FROM service_setup WHERE service_date = DATE_ADD(CURDATE(), INTERVAL 1 DAY) ORDER BY FIELD(service, 'Breakfast', 'Lunch', 'Dinner');";
        $result = $db->query($sql);
        $services = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        $result->close();

        return $services;
    }






    //function to fetch services for the day after tomorrow 3rd day
    public function dbFetchThirdService(): array
    {
        //fetch services for the day after tomorrow and return the result
        $db = db_connect();
        $sql = "SELECT * FROM service_setup WHERE service_date = DATE_ADD(CURDATE(), INTERVAL 2 DAY) ORDER BY FIELD(service, 'Breakfast', 'Lunch', 'Dinner');";
        $result = $db->query($sql);
        $services = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        $result->close();

        return $services;
    }

    //function to fetch services for the day after tomorrow 4th day
    public function dbSubmitDefaultForm($breakfast_start_time, $breakfast_end_time, $breakfast_tables, $lunch_start_time, $lunch_end_time, $lunch_tables, $dinner_start_time, $dinner_end_time, $dinner_tables)
    {   //connect to the db
        $db = db_connect();
        //queries to update the defualt services
        $sql_breakfast = "update default_services set time_start =?,time_end = ?, tables_available = ?, service_status = 'available' where service = 'Breakfast'";
        $sql_lunch = "update default_services set time_start =?,time_end = ?, tables_available = ?, service_status = 'available' where service = 'Lunch'";
        $sql_dinner = "update default_services set time_start =?,time_end = ?, tables_available = ?, service_status = 'available' where service = 'Dinner'";

        //prepared statements for security
        $stmt_breakfast = $db->prepare($sql_breakfast);
        $stmt_lunch = $db->prepare($sql_lunch);
        $stmt_dinner = $db->prepare($sql_dinner);

        //binding the parameters to the prepared statements
        $stmt_breakfast->bind_param("sss", $breakfast_start_time, $breakfast_end_time, $breakfast_tables);
        $stmt_lunch->bind_param("sss", $lunch_start_time, $lunch_end_time, $lunch_tables);
        $stmt_dinner->bind_param("sss", $dinner_start_time, $dinner_end_time, $dinner_tables);

        //executing the prepared statements check if successful or not and return boolean to indicate that
        if ($stmt_breakfast->execute() && $stmt_lunch->execute() && $stmt_dinner->execute()) {
            $stmt_breakfast->close();
            $stmt_lunch->close();
            $stmt_dinner->close();
            return true;
        } else {
            $stmt_breakfast->close();
            $stmt_lunch->close();
            $stmt_dinner->close();
            return false;
        }
    }

    //function used intially to fetch the default services when the page loads
    public function dbFetchDefaultServices(): array
    {
        $db = db_connect();
        //query to fetch the default services
        $sql = "SELECT service, time_start, time_end, tables_available FROM default_services";
        //store the rsults in a variable
        $result = $db->query($sql);
        //use a list to store the results
        $services = [];
        //iterate and populate list
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        //return the list of the results. will be empty if nothing found (this will be used for error handling)
        $result->close();
        return $services;
    }

    //function to insert the default services into the service_setup table
    public function dbInsertDefaultServices($date)
    {
        $default_form = $this->dbFetchDefaultServices();
        //loop through 
        foreach ($default_form as $service) {
            $service_name = $service['service'];
            $service_start = $service['time_start'];
            $service_end = $service['time_end'];
            $service_tables = $service['tables_available'];
            $service_status = 'available';
            //check if the service already exists
            $duplicate = $this->dbFetchDuplicateService($date, $service_name);
            //if it does not exist then add it to the db
            if (!$duplicate) {
                $this->dbAddService($service_name, $date, $service_start, $service_end, $service_tables, $service_status);

            }

        }


    }



    //function to add service to the db
    public function dbAddService($service_name, $service_date, $service_start, $service_end, $service_tables, $service_status): bool
    {
        //connect to db and add the service to the db
        $db = db_connect();
        $sql = "INSERT INTO service_setup (service_date, service, time_start,time_end,tables_available,service_status) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);

        //bind the parameters to the prepared statement
        $stmt->bind_param("ssssss", $service_date, $service_name, $service_start, $service_end, $service_tables, $service_status);
        //return true if successful and false if not
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }

    }
    //function to update the service in the db
    public function dbUpdateService($id, $service_name, $service_date, $service_start, $service_end, $service_tables, $service_status)
    {
        $db = db_connect();
        $sql = "UPDATE service_setup SET service_date = ?, service = ?, time_start = ?, time_end = ?, tables_available = ?, service_status = ? WHERE id = ?";
        //prepared statement for security
        $stmt = $db->prepare($sql);
        //binding the parameters to the prepared statement
        $stmt->bind_param("ssssssi", $service_date, $service_name, $service_start, $service_end, $service_tables, $service_status, $id);
        //return true if successful and false if not
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    //function to fetch all services from db to list on the frontend
    public function dbFetchServices($flag): array
    {
        $db = db_connect();
        //check flag to see if we need to fetch all services or just the services for today
        if ($flag) {
            $sql = "SELECT * FROM `service_setup` WHERE service_date >= CURDATE() ORDER BY service_date ASC, service ASC;";
        } else {
            $sql = "SELECT * FROM `service_setup` WHERE service_date = CURDATE() ORDER BY service_date ASC, service ASC;";
        }

        $result = $db->query($sql);
        //store in array to return for frontend
        $services = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }

        $result->close();

        return $services;


    }
    //function to check if service already exists for a particular date
    public function dbFetchDuplicateService($service_date, $service_name, $id = null): bool
    {
        $db = db_connect();
        //check if the service already exists
        if ($id) {
            // Exclude the current record during an update
            $sql_check = "SELECT COUNT(*) FROM `service_setup` WHERE `service_date` = ? AND `service` = ? AND `id` != ?";
            $stmt_check = $db->prepare($sql_check);
            $stmt_check->bind_param("ssi", $service_date, $service_name, $id);
        } else {
            // Regular duplicate check for new records
            $sql_check = "SELECT COUNT(*) FROM `service_setup` WHERE `service_date` = ? AND `service` = ?";
            $stmt_check = $db->prepare($sql_check);
            $stmt_check->bind_param("ss", $service_date, $service_name);
        }

        $stmt_check->execute();
        $stmt_check->bind_result($count);
        $stmt_check->fetch();
        $stmt_check->close();

        // If a record exists, return false and do not insert
        if ($count >= 1) {
            return true;
        }
        return false;

    }
    //function to delete a service from the db
    public function dbDeleteService($id)
    {

        $db = db_connect();
        //delete by id
        $sql = "DELETE FROM service_setup WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $id);
        //return true if successful and false if not
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    //function to fetch services by date to filter
    public function dbFetchServicesByDate($date): array
    {

        $db = db_connect();
        //check if the date is false to fetch all services
        if ($date == "false") {
            $sql = "SELECT * FROM `service_setup` ORDER BY service_date ASC, service ASC;";
            $result = $db->query($sql);
        } else {
            $sql = "SELECT * FROM `service_setup` WHERE service_date = ? ORDER BY service_date ASC, service ASC;";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("s", $date);
            $stmt->execute();
            $result = $stmt->get_result();
        }
        $services = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        //return services list empty means no services setup. 
        $result->close();
        $db->close();
        return $services;


    }

    public function dbFetchBookingsByDate($flag,$date): array
    {

        $db = db_connect();
        //flag will tell us if we need to fetch by date or just todays bookings we can run differnet sql queries 
        if($flag){
            $sql = "SELECT 
                r.service,
                COUNT(*) AS total_count,
                ss.time_start,
                ss.time_end,
                ss.service_date
            FROM 
                reservation r
            JOIN 
                service_setup ss
            ON 
                r.service = ss.service  
            WHERE 
                r.reservation_date = CURDATE() 
                AND ss.service_date = CURDATE()
            GROUP BY 
                r.service, 
                ss.time_start, 
                ss.time_end, 
                ss.service_date;";
            $result = $db->query($sql);
        } 
        else {
            $sql = "SELECT 
                r.service,
                COUNT(*) AS total_count,
                ss.time_start,
                ss.time_end,
                ss.service_date
            FROM 
                reservation r
            JOIN 
                service_setup ss
            ON 
                r.service = ss.service  
            WHERE 
                r.reservation_date = ? 
                AND ss.service_date = ?
            GROUP BY 
                r.service, 
                ss.time_start, 
                ss.time_end, 
                ss.service_date;";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("ss", $date, $date);
            $stmt->execute();
            $result = $stmt->get_result();
        }
        
        $result = $db->query($sql);
        $bookings = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = $row;
            }
        }
        $result->close();
        return $bookings;
    }




}