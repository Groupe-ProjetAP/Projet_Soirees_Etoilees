<?php
include './Modeles/ChambreDAO.php';
if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "AjouterChambre";


switch ($action) {
    case 'AjouterChambre':
        $sourceDeDonnees = new ChambreDAO();
        include("./vues/formulaireAjoutChambre.php");
        break;

    case 'enregChambreAjoutee':
        $sourceDeDonnees = new ChambreDAO();
        $resultatRequete = $sourceDeDonnees->AjouterUneChambre($_POST['nom'], $_POST['adresse'], $_POST['mail'], $_POST['siteweb']);

        include("./vues/ConfirmationAjoutChambre.php");
        break;

}