<?php
namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\ManageServiceDB;

class ManageServiceController extends RedirectController
{
    public function index()
    {

        //used to fetch data on intial page load 
        $servicedb = new ManageServiceDB();
        //fetch default services
        $default_services = $servicedb->dbFetchDefaultServices();
        //fetch services for today
        $today = $servicedb->dbFetchTodayService();
        //fetch services for tomorrow
        $tomorrow = $servicedb->dbFetchTomorrowService();
        //fetch services for the day after tomorrow
        $day_after = $servicedb->dbFetchThirdService();
        //send data to view        
        $data = [
            'today' => $today,
            'tomorrow' => $tomorrow,
            'day_after_tomorrow' => $day_after,
            'servicelist' => $this->fetchServices(),
            'default_services' => $default_services,
            'pagetitle' => 'Lancaster - Service Management'
        ];
        //render the page with the $data dictionary
        $this->render('staffportal/ManageService', $data);
    }

    //add service to the database
    public function addService()
    {
        #check post request received print the post request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // retrieve form inputs
            $service_name = htmlspecialchars(trim($_POST['service']));
            $service_date = htmlspecialchars(trim($_POST['service-date']));
            $service_start = htmlspecialchars(trim($_POST['time-start']));
            $service_end = htmlspecialchars(trim($_POST['time-end']));
            $service_tables = htmlspecialchars(trim($_POST['tables-available']));
            $service_status = htmlspecialchars(trim($_POST['service-status']));
            //send data to model which will handle the database transcation
            $servicedb = new ManageServiceDB();

            //check if there is id in post request
            if (isset($_POST['id'])) {

                $id = htmlspecialchars(trim($_POST['id']));
                $checkDuplicate = $servicedb->dbFetchDuplicateService($service_date, $service_name, $id);
                if ($checkDuplicate) {
                    echo json_encode(['success' => "Service Exists Already"]);
                    exit();
                }

                $result = $servicedb->dbUpdateService($id, $service_name, $service_date, $service_start, $service_end, $service_tables, $service_status);
                //if not successful alert the staff by sending false bool to frontend
                if (!$result) {
                    echo json_encode(['success' => "Failed to update Service contact admin"]);
                    exit();
                }
                // Print the form inputs to the console
                echo json_encode(['success' => "Service Updated Successfully"]);
                //dont run the rest of the code no need
                exit();
            }

            $checkDuplicate = $servicedb->dbFetchDuplicateService($service_date, $service_name);
            if ($checkDuplicate) {
                echo json_encode(['success' => "Service Exists Already"]);
                exit();
            }

            $result = $servicedb->dbAddService($service_name, $service_date, $service_start, $service_end, $service_tables, $service_status);
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {
                echo json_encode(['success' => "Failed to add Service contact admin"]);
                exit();
            }
            // Print the form inputs to the console
            echo json_encode(['success' => "Service Added Successfully"]);


        }

    }


    //delete service from the database
    public function deleteService()
    {   //check if post request is received
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = htmlspecialchars(trim($_POST['id']));
            //send data to model which will handle the database transcation
            $servicedb = new ManageServiceDB();
            $result = $servicedb->dbDeleteService($id);
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {
                echo json_encode(['success' => "Failed to delete Service contact admin"]);
                exit();
            }

            echo json_encode(['success' => "Service Deleted Successfully",]);
        }
    }
    //fetch all services for current date with false flag
    public function fetchServices()
    {
        //send data to model which will handle the database transcation
        $servicedb = new ManageServiceDB();
        //flag used here so the function in model can be used globally for other queries
        $services = $servicedb->dbFetchServices(false);
        return $services;
        //
    }


    //fetch latest service from the database for get request from, today onwards
    public function fetchLatestService()
    {
        //send data to model which will handle the database transcation
        $servicedb = new ManageServiceDB();
        $services = $servicedb->dbFetchServices(true);
        echo json_encode($services);
    }


    //fetch services by date
    public function fetchServicesByDate()
    {
        //check if get request is received
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['date'])) {
            //get date from get request
            $date = $_GET['date'];
            $date = htmlspecialchars(trim($date));
            $servicedb = new ManageServiceDB();
            $services = $servicedb->dbFetchServicesByDate($date);
            echo json_encode($services);
        }
    }


    public function submitDefaultForm()
    {
        //check if post request is received
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //breakfast timees
            $breakfast_start_time = htmlspecialchars(trim($_POST['Breakfast-time-start']));
            $breakfast_end_time = htmlspecialchars(trim($_POST['Breakfast-time-end']));
            $breakfast_tables = htmlspecialchars(trim($_POST['Breakfast-tables-available']));
            //lunch times   
            $lunch_start_time = htmlspecialchars(trim($_POST['Lunch-time-start']));
            $lunch_end_time = htmlspecialchars(trim($_POST['Lunch-time-end']));
            $lunch_tables = htmlspecialchars(trim($_POST['Lunch-tables-available']));

            //dinner times
            $dinner_start_time = htmlspecialchars(trim($_POST['Dinner-time-start']));
            $dinner_end_time = htmlspecialchars(trim($_POST['Dinner-time-end']));
            $dinner_tables = htmlspecialchars(trim($_POST['Dinner-tables-available']));

            //send data to model which will handle the database transcation
            $servicedb = new ManageServiceDB();
            $result = $servicedb->dbSubmitDefaultForm($breakfast_start_time, $breakfast_end_time, $breakfast_tables, $lunch_start_time, $lunch_end_time, $lunch_tables, $dinner_start_time, $dinner_end_time, $dinner_tables);
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {
                echo json_encode(['success' => "Failed to update Default Service contact admin"]);
                exit();
            }
            echo json_encode(['success' => "Default Service Updated Successfully"]);
        }
    }

    public function addDefaultServices()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //get date from post 
            $date = htmlspecialchars(trim($_POST['date']));
            //print date to console


            $servicedb = new ManageServiceDB();
            $servicedb->dbInsertDefaultServices($date);
            $result = true;
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {
                echo json_encode(['success' => "Failed to add Default Service contact admin"]);
                exit();
            }
            echo json_encode(['success' => "Default Service Added Successfully"]);
        }

    }

}