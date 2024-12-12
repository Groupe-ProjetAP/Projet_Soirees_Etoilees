<?php
include("./Modeles/SoireeDAO.php");
if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "accueil";


switch ($action) {
    case 'accueil':
        $sourceDeDonnees = new SoireeDAO();
        $listeSoirées = $sourceDeDonnees->getDixSoirees();

        include(".\Vues\accueil.php");
        break;
}
