<?php
include(".\\Modeles\\reservationDAO.php");
if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "consultation";


switch ($action) {

    case 'consultation':
        $sourceDeDonnees = new reservationDAO();
        $listeReservation = $sourceDeDonnees->getLesReservation();

        include("./vues/reservation.php");
        break;


}