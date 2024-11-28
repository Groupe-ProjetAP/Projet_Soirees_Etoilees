<?php
include(".\\Modeles\\PlaceParkingDAO.php");
if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "consultation";


switch ($action) {

    case 'consultation':
        $sourceDeDonnees = new PlaceParkingDAO();
        $listePlaceParking = $sourceDeDonnees->getLesPlaces();

        include("./vues/placeParking.php");

        break;
    case 'AjouterPlace':
            $sourceDeDonnees = new PlaceParkingDAO();
            include("./vues/formulaireAjoutPlace.php");
            break;
    case 'enregPlaceAjoutee':
            $sourceDeDonnees = new PlaceParkingDAO();
            $resultatRequete = $sourceDeDonnees->AjouterUnePlace($_POST['nom'], $_POST['placeClassique'],$_POST['nbPlace']);
            include("./vues/ConfirmationAjout.php");
            break;
        

}