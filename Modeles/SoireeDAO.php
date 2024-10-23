<?php
include 'modeles/Base.php';
include 'C:\wamp64\www\bundledelamort\Projet_Soirees_Etoilees\modeles\Soiree.php';

class SoireeDAO extends Base{
    
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5'); // les mdp et user ne sont pas correct
    }
    
    public function getLesSoirees() {
        $resultatRequete= $this ->query("SELECT idSoiree, nom FROM soiree");
        $tableauSoirée=$resultatRequete->fetchAll();
        $listeSoirées=array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {
            $unObjetCompetence = new Soiree($uneLigneUneSoirée["idSoiree"], $uneLigneUneSoirée["nom"]);
            $listeSoirées[]=$unObjetCompetence;
        }
        return $listeSoirées;
    }
}