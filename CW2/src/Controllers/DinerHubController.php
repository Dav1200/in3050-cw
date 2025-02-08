<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\DinerReservation;


class DinerHubController extends DinerRedirectController
{
    public function index()
    {
        //used for dinerhub, session is used to get the diner name (whoever is logged in)
        session_start();
        $data["pagetitle"] = 'Lancaster - Diner Hub';
        $data["dinername"] = $_SESSION['diner_name'];
        $data["reservations"] = $this->listReservation();
        $this->render('diner/diner-hub', $data);
    }


    //gets all the reservations for the diner who is logged in, so they can keep track of their reservation
    public function listReservation()
    {
        session_start();
        $email = $_SESSION['diner_email'];
        $manageReservation = new DinerReservation();
        $reservations = $manageReservation->dbGetReservation($email);
        return $reservations;
    }
}