<?php
include("./Modeles/SoireeDAO.php");

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
        
    case 'consultationClient':
        $sourceDeDonnees = new SoireeDAO();
        $listeSoirées = $sourceDeDonnees->getLesSoirees();

        include("./vues/soireeClient.php");
        break;

    case 'AjouterSoiree':
        $sourceDeDonnees = new SoireeDAO();
        include("./vues/formulaireAjoutSoiree.php");
        break;

    case 'enregSoireeAjoutee':
        $sourceDeDonnees = new SoireeDAO();
        $resultatRequete = $sourceDeDonnees->AjouterUneSoiree($_POST['nom'], $_POST['nbPlace'], $_POST['lieu'], $_POST['dateSoiree'],$_POST['heureSoiree'], $_POST['placeAssise'],$_POST['infoComp']);

        include("./vues/ConfirmationAjout.php");
        break;

    case 'modifierSoiree':
        $sourceDeDonnees = new SoireeDAO();
        include("./vues/formulaireModifSoiree.php");
        break;

    case 'enregSoireeModif':
        $sourceDeDonnees = new SoireeDAO();
        $resultatRequete = $sourceDeDonnees->ModifierUneSoiree($_GET['idSoiree'],$_POST['nom'], $_POST['nbPlace'], $_POST['lieu'], $_POST['dateSoiree'],$_POST['heureSoiree'], $_POST['placeAssise'],$_POST['infoComp']);
        include("./vues/ConfirmationModif.php");
        break;


    case 'supprimerSoiree':
        $sourceDeDonnees = new SoireeDAO();
        $resultatRequete = $sourceDeDonnees->SupprimerSoiree($_GET['idSoiree']);

        include("./vues/ConfirmationSuppression.php");
        break;

}