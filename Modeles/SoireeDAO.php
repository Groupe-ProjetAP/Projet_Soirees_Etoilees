<?php
include 'modeles/Base.php';
include 'C:\wamp64\www\bundledelamort\Projet_Soirees_Etoilees\modeles\Soiree.php';

class SoireeDAO extends Base{
    
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5'); // les mdp et user ne sont pas correct
    }
    
    public function getLesSoirees() {
        $resultatRequete= $this ->query("SELECT idSoiree, nom,nbPlaces,dateSoiree FROM soiree");
        $tableauSoirée=$resultatRequete->fetchAll();
        $listeSoirées=array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {
            $unObjetCompetence = new Soiree($uneLigneUneSoirée["idSoiree"], $uneLigneUneSoirée["nom"],$uneLigneUneSoirée['nbPlaces'],$uneLigneUneSoirée['dateSoiree']);
            $listeSoirées[]=$unObjetCompetence;
        }
        return $listeSoirées;
    }
    public function SupprimerSoiree($idSoiree) {
        $resultatRequete= $this ->exec("DELETE FROM `soiree` WHERE idSoiree =$idSoiree");
        //return $resultatRequete;
    }
    public function AjouerUneSoirees($nom,$nbPlace,$date) {
        $resultatRequete= $this ->exec("INSERT INTO `soiree`( `nom`, `nbPlaces`, `dateSoiree`) VALUES ('$nom','$nbPlace','$date')");
        //return $resultatRequete;
    }
    public function ModifierUneSoirees($nom,$nbPlace,$date) {
        $resultatRequete= $this ->exec("INSERT INTO `soiree`( `nom`, `nbPlaces`, `dateSoiree`) VALUES ('$nom','$nbPlace','$date')");
        //return $resultatRequete;
    }
}