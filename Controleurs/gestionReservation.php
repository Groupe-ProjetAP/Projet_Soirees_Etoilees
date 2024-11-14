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
    case 'AjouterReservation':
            $sourceDeDonnees = new reservationDAO();
            include("./vues/formulaireReservation.php");
            break;
    case 'EnregistrerReservation':
                $sourceDeDonnees = new reservationDAO();
                $resultatRequete = $sourceDeDonnees->AjoutLesReservation($_POST['participant'], $_POST['nbPlace'], $_POST['date']);
                include("./vues/formulaireReservation.php");
                break;

}