<?php
namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\StaffAuth;
require_once('./includes/dbconnect.php');

class StaffLoginController extends Controller
{
  
    #default behaviour of the staff controller
    public function index()
    {
        #hash the password and print it to the console same hash will be used for all staff
        #redirect to login page if no staff exists then redirect to signup page
        session_start();
        if($_SESSION['logged_in'] == true){
            header('Location: /staffportal');
        exit();
        }

        ##construct staffDB object
        $staffModel = new StaffAuth();
        $result = $staffModel->checkStaffAccountdb();
 
        if ($result) {
            // Fetch the first result
            $data["pagetitle"] = 'Lancaster - Staff Portal';
            $this->render('staffportal/staff-login', $data);
        } else {
            header('Location: /staffsignup');
            exit();
        }

    }
    
    #shows the registration form for staff
    public function showSignupForm()
    {
        ##redirect the user if staff already exists and someone is trying to access the staff signup page via url brute force

        $staffModel = new StaffAuth();
        $result = $staffModel->checkStaffAccountdb();
        if ($result) {
            header('Location: /stafflogin');
            exit();
        } else {
            $data["pagetitle"] = 'Lancaster - Staff Registration';
            $this->render('staffportal/staff-signup', $data);
        }
    }
    #shows the login form for staff
    public function checkLoginInput()
    {  session_start();
        // Check if the request is POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            // Sanitise and retrieve form inputs
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));

            $staffModel = new StaffAuth();
            $result = $staffModel->loginValidationdb($username, $password);
            // Send JSON response
            if ($result) {

                $_SESSION['logged_in'] = true;  
                $_SESSION['user'] = $username;  
                $_SESSION['login_time'] = time();
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
            exit(); // Prevent further output
        }

    }

    #gets data from frontend and sends it to db for staff registration
    public function createStaffAccount(): void
    {
        // Check if the request is POST
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            // Sanitise and retrieve form inputs
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            $secret = htmlspecialchars(trim($_POST['secret']));
            $role = 'staff';
         
            // Check if the secret key is correct (for real world applications, this will be more secure and not hardcoded)
            if ($secret !== 'secret') {
                echo json_encode(['success' => false]);
                exit();
            }

            $staffModel = new StaffAuth();
            $result = $staffModel->createStaffdb($name, $email, $password, $role);
            //error handling
            if ($result) {
                $_SESSION['logged_in'] = true;  
                $_SESSION['user'] = $name;  
                $_SESSION['login_time'] = time();
                // Print login time in console
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
                echo "<script>alert('Staff could not be created. Please contact the admin.');</script>";
            }
        }
        exit(); 
    }

    // Logout the staff
    public function staffLogout()
    {
        session_start();
        unset($_SESSION['logged_in']);
        unset($_SESSION['user']);
        unset($_SESSION['login_time']);
        // Redirect to the login page
        header('Location: /stafflogin');
        exit();
    }
}