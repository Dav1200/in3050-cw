<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\StaffServices;


class StaffDashboardController extends StaffRedirectController
{
    public function index()
    {
       
            ##using this for demo only for now
        
        
        $servicedb = new StaffServices();
        //date does not matter here as the flag is set to true so its discarded
        $services = $servicedb->dbFetchBookingsByDate(true,"2021-10-01");

        
        $today = $servicedb->dbFetchTodayService();
        $tomorrow = $servicedb->dbFetchTomorrowService();
        $day_after = $servicedb->dbFetchThirdService();
        $data = [
            'today' => $today,
            'tomorrow' => $tomorrow,
            'day_after_tomorrow' => $day_after,
            'title' => 'Lancaster - Staff Portal',
            'services' => $services
    
        ];
        
        
        $data["services"] = $services;

        #$_SESSION['login_time'] = time(); // Update last activity time stamp
        // If logged in, render the staff portal
        $data["title"] = 'Lancaster - Staff Portal';
        $this->render('staffportal/staff-dashboard', $data);
    }

    //service page for staff
    public function servicePage(){
        $data["pagetitle"] = 'Lancaster - Service Management';  
        $this->render('staffportal/service', $data);
    }
}