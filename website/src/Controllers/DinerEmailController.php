<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
//testing for now


class DinerEmailController extends Controller
{
    public function index()
    {
    // to render the email page we use the data stored in session to populate the email template
        $data["pagetitle"] = 'Lancaster - Email Confirmation';
        //using this to generate emailtemplate
        session_start();
        $data['rname'] = $_SESSION['rname'];
        $data['rdate'] = $_SESSION['rdate'];
        $data['rservice'] = $_SESSION['rservice'];
        $data['rtime'] = $_SESSION['rtime'];
        $data['rguests'] = $_SESSION['rguests'];
        $data['reservation_result'] = $_SESSION['reservation_result'];

        //unset the session variables after use
        unset($_SESSION['rname']);
        unset($_SESSION['rdate']);
        unset($_SESSION['rservice']);
        unset($_SESSION['rtime']);
        unset($_SESSION['rguests']);
        unset($_SESSION['reservation_result']);
        //render the page
        $this->render('diner/reservation-email', $data);
    }

    
}