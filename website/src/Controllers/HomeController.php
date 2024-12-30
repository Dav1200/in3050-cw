<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
//testing for now


class HomeController extends Controller
{
    public function index()
    {
       
        $data["pagetitle"] = 'Lancaster - Home';
        session_start(); 
        
        // Check if the user is logged in
        if (isset($_SESSION['diner_logged']) && $_SESSION['diner_logged'] == true) {
            $data["show"] = true; 
            $data["email"] = $_SESSION['diner_email'];  
        } else {
            $data["show"] = false; 
        }
        $this->render('index', $data);
    }
}