<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;


//this is a base controller that will be used to validate if user ig logged in, used dry principle to avoid repeating code in all controllers
class DinerRedirectController extends Controller{
    public function __construct() {
        session_start();
        // Check if the user is logged in
        if (empty($_SESSION['diner_logged']) || $_SESSION['diner_logged'] !== true) {
            // Redirect to the login page if not logged in
            header('Location: /login');
            exit();
        }
        // the user automatically logs out after 4 hours, this is to prevent session hijacking and to ensure that the user is still active

        $timeElapsed = time() - $_SESSION['diner_log_time'];
        if ($timeElapsed > 12600 && $timeElapsed <= 14400) { // 3 hours 30 minutes to 4 hours
            echo "<script>
                if (confirm('Your session will expire in 30 minutes. Click continute to login again. Cancel to continue for remaining time.')) {
                    window.location.href = '/dinerlogout';
                } else {
                    
                }
                </script>";

        } elseif ($timeElapsed > 14400) { // 4 hours
            unset($_SESSION['diner_logged']);
            unset($_SESSION['diner_name']);
            unset($_SESSION['diner_log_time']);
            unset($_SESSION['diner_email']);
            echo "<script>
                alert('Your session has expired. You will be logged out.');
                window.location.href = '/dinerlogout';
                </script>";
           
            exit();
        }

    }


}
