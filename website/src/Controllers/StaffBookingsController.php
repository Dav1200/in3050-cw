<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\DinerReservation;


class StaffBookingsController extends StaffRedirectController
{
    public function index()
    {   

        //get all bookings for today
        $reservationdb = new DinerReservation();
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