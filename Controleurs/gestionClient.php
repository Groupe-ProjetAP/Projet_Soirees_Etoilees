<?php
include("./Modeles/cartePassDAO.php");

if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "consultationClientPass";


switch ($action) {

    case 'consultationClientPass':
        $sourceDeDonnees = new cartePassDAO();
        $listeClientPass = $sourceDeDonnees->getLesClientPassValide2();

        // $sourceDeDonneesBis = new cartePassDAO();
        // $listeNomClientPass = $sourceDeDonneesBis->getLesNomClientPassValide();

        include("./vues/clientPassValide.php");
        break;

}