<?php
include 'modeles/Base.php';
include 'C:\wamp64\www\Projet_Soirees_Etoilees\modeles\Soiree.php';

class SoireeDAO extends Base{
    
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5');
    }
    
    public function getLesSoirees() {
        $resultatRequete= $this ->query("SELECT idSoiree, nom,nbPlaces,lieu,dateSoiree,heureSoiree,placeAssise,infoComp,nbPlacesDispo FROM soiree");
        $tableauSoirée=$resultatRequete->fetchAll();
        $listeSoirées=array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {
            $unObjetCompetence = new Soiree($uneLigneUneSoirée["idSoiree"], $uneLigneUneSoirée["nom"],$uneLigneUneSoirée['nbPlaces'],$uneLigneUneSoirée['lieu'],$uneLigneUneSoirée['dateSoiree'],$uneLigneUneSoirée['heureSoiree'],$uneLigneUneSoirée['placeAssise'],$uneLigneUneSoirée['infoComp'],$uneLigneUneSoirée['nbPlacesDispo']);
            $listeSoirées[]=$unObjetCompetence;
        }
        return $listeSoirées;
    }
    public function SupprimerSoiree($idSoiree) {
        $resultatRequete= $this ->exec("DELETE FROM `soiree` WHERE idSoiree =$idSoiree");
        return $resultatRequete;
    }
    public function AjouterUneSoiree($nom,$nbPlace,$lieu,$dateSoiree,$heureSoiree,$placeAssise,$infoComp) {
        $resultatRequete= $this ->exec("INSERT INTO `soiree`( `nom`, `nbPlaces`, `lieu` , `dateSoiree`, `heureSoiree`, `placeAssise`, `infoComp` ) VALUES ('$nom','$nbPlace','$lieu','$dateSoiree','$heureSoiree','$placeAssise','$infoComp')");
        return $resultatRequete;
    }
    public function ModifierUneSoiree($idSoiree, $nom, $nbPlace, $lieu, $dateSoiree, $heureSoiree, $placeAssise, $infoComp) {
        $resultatRequete = $this->exec("UPDATE `soiree` 
                                        SET `nom` = '$nom', 
                                            `nbPlaces` = '$nbPlace', 
                                            `lieu` = '$lieu', 
                                            `dateSoiree` = '$dateSoiree', 
                                            `heureSoiree` = '$heureSoiree', 
                                            `placeAssise` = '$placeAssise', 
                                            `infoComp` = '$infoComp', 
                                        
                                        WHERE `idSoiree` = $idSoiree");
        return $resultatRequete;
    }
}