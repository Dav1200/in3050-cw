<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;



class HomeController extends Controller
{
    public function index()
    {
       
        $data["pagetitle"] = 'Lancaster - Home';
        // Check if the user is logged in
        $loggedInData = $this->getLoggedIn();
        $data = array_merge($data, $loggedInData);
        $this->render('diner/index', $data);
    }
    //abouts page as this is same from last submission doesnt require any changes
    public function about()
    {


        $data["pagetitle"] = 'Lancaster - About';
        $loggedInData = $this->getLoggedIn();
        $data = array_merge($data, $loggedInData);
        $this->render('diner/about', $data);
    }
    //menu page as this is same from last submission doesnt require any changes
    public function menu()
    {
        $data["pagetitle"] = 'Lancaster - Menu';
        $loggedInData = $this->getLoggedIn();
        $data = array_merge($data, $loggedInData);
        $this->render('diner/menu', $data);
    }
    // decoupling the repeated code fore reuseability
    public function getLoggedIn()
    {
        session_start(); 
        if (isset($_SESSION['diner_logged']) && $_SESSION['diner_logged'] == true) {
            return [
                "show" => true,
                "email" => $_SESSION['diner_email']
            ];  
        } else {
            return [
                "show" => false
            ]; 
        }
    }
}