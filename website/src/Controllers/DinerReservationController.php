<?php
namespace In3050Inm428WebDev\PhpMvc\Controllers;
use In3050Inm428WebDev\PhpMvc\Models\DinerReservation;
use In3050Inm428WebDev\PhpMvc\Models\Email; 

use In3050Inm428WebDev\PhpMvc\Controller;

class DinerReservationController extends Controller
{
    public function index()
    {
    
        $data["pagetitle"] = 'Reservation';

        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['diner_logged']) && $_SESSION['diner_logged'] == true) {
            $data["show"] = true;
            $data["email"] = $_SESSION['diner_email'];
        } else {
            $data["show"] = false;
        }
        // Render the 'test' view with the data
        $this->render('diner/reservation', $data);
    }



    //creates a new reservation in the db from the form data passed from front end

    public function createReservation()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $date = htmlspecialchars(trim($_POST['date']));
            $service = htmlspecialchars(trim($_POST['serviceOnly']));
            $time = htmlspecialchars(trim($_POST['time']));
            $guests = htmlspecialchars(trim($_POST['guests']));
            $phone = htmlspecialchars(trim($_POST['phone']));
            $extraRequests = htmlspecialchars(trim($_POST['requests']));
            $db = new DinerReservation();
            $result = $db->dbCreateReservation($name, $email, $date, $service, $time, $guests, $phone, $extraRequests);
            if (!$result) {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to create reservation'));
            } else {

                // Create an instance of the Email class
                $eml_object = new Email();

                $file_name = $eml_object->create_reservation_email($name, $date, $service, $time, $guests, $email);

                // Provide a link to download the .eml file
                $htmlresult = "Your reservation has been confirmed. <a href='$file_name' download>Click here</a> to download your confirmation email.";
                session_start();


                $_SESSION['reservation_result'] = $htmlresult;
                $_SESSION['rname'] = $name;
                $_SESSION['rdate'] = $date;
                $_SESSION['rservice'] = $service;
                $_SESSION['rtime'] = $time;
                $_SESSION['rguests'] = $guests;
                echo json_encode(array('status' => 'success', 'message' => 'Reservation created successfully', 'htmlresult' => $htmlresult));
            }

        }

    }

    //get all services for reservation by date, format in 15inutes intervals and 30minutes before clopsing time. 
    public function getServicesByDate()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['date'])) {
            //get date from get request
            $date = $_GET['date'];
            $date = htmlspecialchars(string: trim($date));
            $db = new DinerReservation();
            $services = $db->dbGetServicesByDate($date);
            echo json_encode($services);
        }
    }

    //get all the services by time for the date
    public function getServiceTimes()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['date']) && isset($_GET['service'])) {
            //get date from get request
            $date = $_GET['date'];
            $date = htmlspecialchars(string: trim($date));
            $service = $_GET['service'];
            $service = htmlspecialchars(string: trim($service));
            $db = new DinerReservation();
            $times = $db->dbGetServiceTimes($service, $date);
            echo json_encode($times);

        }

    }
}