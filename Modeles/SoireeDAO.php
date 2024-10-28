<?php
include 'modeles/Base.php';
include 'C:\wamp64\www\Projet_Soirees_Etoilees\modeles\Soiree.php';

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
        return $resultatRequete;
    }
    public function AjouterUneSoiree($nom,$nbPlace,$date) {
        $resultatRequete= $this ->exec("INSERT INTO `soiree`( `nom`, `nbPlaces`, `dateSoiree`) VALUES ('$nom','$nbPlace','$date')");
        return $resultatRequete;
    }
    public function ModifierUneSoiree($idSoiree,$nom,$nbPlace,$date) {
        echo("UPDATE `soiree` SET `nom` = '$nom', `nbPlaces` = '$nbPlace', `dateSoiree` = '$date' WHERE `idSoiree` = $idSoiree");
        $resultatRequete = $this->exec("UPDATE `soiree` SET `nom` = '$nom', `nbPlaces` = '$nbPlace', `dateSoiree` = '$date' WHERE `idSoiree` = $idSoiree");
        return $resultatRequete;
    }
}