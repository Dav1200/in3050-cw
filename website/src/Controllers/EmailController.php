<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
//testing for now


class EmailController extends Controller
{
    public function index()
    {
       
        $data["pagetitle"] = 'Lancaster - Email Confirmation';
        //using this to generate emailtemplate
        session_start();
        $data['rname'] = $_SESSION['rname'];
        $data['rdate'] = $_SESSION['rdate'];
        $data['rservice'] = $_SESSION['rservice'];
        $data['rtime'] = $_SESSION['rtime'];
        $data['rguests'] = $_SESSION['rguests'];
        $data['reservation_result'] = $_SESSION['reservation_result'];
        $this->render('diner/reservation_email', $data);
    }

    
}