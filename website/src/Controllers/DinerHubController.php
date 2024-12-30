<?php

namespace In3050Inm428WebDev\PhpMvc\Controllers;

use In3050Inm428WebDev\PhpMvc\Controller;
use In3050Inm428WebDev\PhpMvc\Models\ManageReservation;


class DinerHubController extends DinerRedirectController
{
    public function index()
    {
         session_start();
        $data["pagetitle"] = 'Lancaster - Diner Hub';
        $data["dinername"] = $_SESSION['diner_name'];
        $data["reservations"] = $this->listReservation();
        $this->render('diner/dinerhub', $data);
    }

    public function listReservation(){
        session_start();
        $email = $_SESSION['diner_email'];
        $manageReservation = new ManageReservation();
        $reservations = $manageReservation->dbGetReservation($email);
        return $reservations;
    }
}