<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\DinerAuth;
use In3050Inm428WebDev\PhpMvc\Models\Email;
class DinerLoginController extends Controller
{
    public function index()
    {
       
        $data["pagetitle"] = 'Lancaster - Login';
        session_start(); 
        
        // Check if the user is logged in
        if (isset($_SESSION['diner_logged']) && $_SESSION['diner_logged'] == true) {
            $data["show"] = true; 
            // Redirect to the hub
            header('Location: /dinerhub');
        } else {
            $data["show"] = false; 
        }
        
        // Render the page with the data
        $this->render('/diner/dinerlogin', $data);
    }

    public function register()
    {

        $data["pagetitle"] = 'Lancaster - Register';

        $this->render('/diner/dinersignup', $data);
    }

    public function changePasswordPage(){

        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['diner_logged']) && $_SESSION['diner_logged'] == true) {
            $data["show"] = true;
            $data["email"] = $_SESSION['diner_email'];
        } else {
            $data["show"] = false;
        }
        $data["pagetitle"] = 'Lancaster - Change Password';

        $this->render('/diner/updatepassword', $data);

    }

    public function sendOtp(){
        //fetch the post data from the frontend
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars(trim($_POST['username']));
            $dinerAuth = new DinerAuth();
            $result = $dinerAuth->dbCheckUser($email);
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {

                echo json_encode(['success' => false, 'errormsg' => "Email does not exist."]);
                exit();
            }
            //generate a random number 6 digit
            $otp = rand(100000, 999999);
            //store the otp in session
            session_start();
            if (!empty($_SESSION['diner_logged']) && strtolower($_SESSION['diner_email']) !== strtolower($email)) {
                echo json_encode(['success' => false,'errormsg' => "Please enter the email you are logged in with."]); 
                exit();
            }

            $_SESSION['otp'] = $otp;
            $_SESSION['otp_time'] = time();
            $_SESSION['otp_expiry'] = time() + 300;
            //store otp email in session
            $_SESSION['otp_email'] = $email;
            
            // OTP expires in 5 minutes
            //send the otp to the user email
            $eml_object = new Email();
            $email = $eml_object->create_otp_email($otp,$email);
            //send the email to friedn end
            $htmlresult = "Your OTP Email. <a href='$email' download>Click here</a> to download your OTP email.";

            echo json_encode(['success' => true, 'htmlresult' => $htmlresult]);
        }
    }

    public function checkotp(){
        //fetch the post data from the frontend
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $otp = htmlspecialchars(trim($_POST['otp']));
            session_start();
            //check if the otp is correct
            if ($_SESSION['otp'] == $otp && $_SESSION['otp_expiry'] > time()) {
                //the expiry time is less than 5minutes from now then the otp is expired else proceed to change password
                echo json_encode(['success' => true,]);
            } else {
                echo json_encode(['success' => false,]);
            }
        }
    }

    public function updatePassword(){
        //fetch the post data from the frontend
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = htmlspecialchars(trim($_POST['password']));
            session_start();
            $email = $_SESSION['otp_email'];
            $dinerAuth = new DinerAuth();
            $result = $dinerAuth->dbChangePassword($email, $password);
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {
                
                echo json_encode(['success' => false,]);
                exit();
            }

            //remove all the sesion for otp and email
            unset($_SESSION['otp']);
            unset($_SESSION['otp_time']);
            unset($_SESSION['otp_expiry']);
            unset($_SESSION['otp_email']);
            echo json_encode(['success' => true,]);
        }
    }

    public function authDinerSignup()
    {
        //fetch the post data from the frontend
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));
            //send data to model which will handle the database transcation
            $dinerAuth = new DinerAuth();
            $result = $dinerAuth->dbRegisterDiner($email, $password, $name);
            //if not successful alert the staff by sending false bool to frontend
            if (!$result) {
                echo json_encode(['success' => false,]);
                exit();
            }
            //start session and store the user data
            session_start();
            $_SESSION['diner_email'] = $email;
            $_SESSION['diner_name'] = $name;
            $_SESSION['diner_logged'] = true;
            $_SESSION['diner_log_time'] = time();

            $eml_object = new Email();
            $email = $eml_object->create_registration_email($name, $email);
            $htmlresult = "Your registration confirmation Email. <a href='$email' download>Click here</a> to download your email.";

            echo json_encode(['success' => true,'confirmation_email' => $htmlresult]);
        }
    }



    public function authDinerLogin(){
        //fetch the post data from the frontend
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));#
            $dinerAuth = new DinerAuth();
            $result = $dinerAuth->dbCheckDiner($email, $password);
            //if not successful alert the staff by sending false bool to frontend
            if (empty($result)) {
                echo json_encode(['success' => false,]);
                exit();
            }


            //start session and store the user data
            session_start();
            $_SESSION['diner_email'] = $email;
            $_SESSION['diner_name'] = $result['name'];
            $_SESSION['diner_log_time'] = time();
            $_SESSION['diner_logged'] = true;
            echo json_encode(['success' => true,]);

        
        }
    
    }
    public function dinerLogout()
    {
        session_start();
        unset($_SESSION['diner_logged']);
        unset($_SESSION['diner_name']);
        unset($_SESSION['diner_log_time']);
        unset($_SESSION['diner_email']);
        // Redirect to the login page
        header('Location: /login');
        exit();
    }
}