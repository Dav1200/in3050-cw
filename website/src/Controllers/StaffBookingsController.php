<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\ManageReservation;


class StaffBookingsController extends RedirectController
{
    public function index()
    {   

        
        $reservationdb = new ManageReservation();
        $bookings = $reservationdb->dbGetBookingsToday();
        $nextServiceBookings = $reservationdb->dbGetNextBookingList();

        //get todays date to pass to front end
        $today = date("Y-m-d");
        $data["next_Service"] = $nextServiceBookings;
        $data["todays_Date"] = $today;
        $data["bookings"] = $bookings;
        $data["title"] = 'Lancaster - Staff Bookings';

        $this->render('staffportal/bookings', $data);
    }


}