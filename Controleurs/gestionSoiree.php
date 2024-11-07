<?php
include("C:\wamp64\www\Projet_Soirees_Etoilees\modeles\SoireeDAO.php");
if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "consultation";


switch ($action) {

    case 'consultation':
        $sourceDeDonnees = new SoireeDAO();
        $listeSoirées = $sourceDeDonnees->getLesSoirees();

        include("./vues/soiree.php");
        break;

    case 'AjouterSoiree':
        $sourceDeDonnees = new SoireeDAO();
        include("./vues/formulaireAjoutSoiree.php");
        break;

    case 'enregSoireeAjoutee':
        $sourceDeDonnees = new SoireeDAO();
        $resultatRequete = $sourceDeDonnees->AjouterUneSoiree($_POST['nom'], $_POST['nbPlace'], $_POST['date']);

        include("./vues/ConfirmationAjout.php");
        break;

    case 'modifierSoiree':
        $sourceDeDonnees = new SoireeDAO();
        include("./vues/formulaireModifSoiree.php");
        break;

    case 'enregSoireeModif':
        var_dump($_POST['idSoiree'],$_POST['nom'],$_POST['nbPlace'],$_POST['date']);
        $sourceDeDonnees = new SoireeDAO();
        $resultatRequete = $sourceDeDonnees->ModifierUneSoiree($_POST['idSoiree'], $_POST['nom'], $_POST['nbPlace'], $_POST['date']);
        
       include("./vues/ConfirmationModif.php");
       break;

    case 'supprimerSoiree':
        $sourceDeDonnees = new SoireeDAO();
        $resultatRequete = $sourceDeDonnees->SupprimerSoiree($_GET['idSoiree']);

        include("./vues/ConfirmationSupression.php");
        break;

}