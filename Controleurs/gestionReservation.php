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
                $idSoiree = $_GET['IdSoiree'];
                include("./vues/formulaireReservation.php");
                break;

    case 'reserverSoiree':

        $sourceDeDonnees = new reservationDAO();
    $resultatRequete = $sourceDeDonnees->reserverSoiree($_POST['nom'],$_POST['prenom'],$_POST['nbPlace'],$_POST['IdSoireer'],$_POST['nbPlace']);
        break;

}