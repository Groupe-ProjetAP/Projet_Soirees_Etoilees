<?php
include ("C:\wamp64\www\bundledelamort\Projet_Soirees_Etoilees\modeles\SoireeDAO.php");
if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "consultation";
    

switch ($action){


    case 'consultation'  :  $sourceDeDonnees = new SoireeDAO();
                            $listeSoirées = $sourceDeDonnees->getLesSoirees();
                            echo('test');
                            include("./vues/soiree.php");
                            break;
                   
}