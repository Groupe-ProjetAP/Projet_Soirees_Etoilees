<?php
include 'modeles/Base.php';
include './Modeles/Soiree.php';

class SoireeDAO extends Base{
    
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5');
    }
    
    /**
     * Récupère la liste de toutes les soirées depuis la base de données.
     * @return Soiree[]
     */
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

    /**
     * Supprime une soirée de la base de données à partir de son identifiant.
     * @param mixed $idSoiree
     * @return bool|int
     */
    public function SupprimerSoiree($idSoiree) {
        $resultatRequete= $this ->exec("DELETE FROM `soiree` WHERE idSoiree =$idSoiree");
        return $resultatRequete;
    }
    /**
     * Ajoute une nouvelle soirée dans la base de données.
     * @param mixed $nom
     * @param mixed $nbPlace
     * @param mixed $lieu
     * @param mixed $dateSoiree
     * @param mixed $heureSoiree
     * @param mixed $placeAssise
     * @param mixed $infoComp
     * @return bool|int
     */
  
    public function AjouterUneSoiree($nom,$nbPlace,$lieu,$dateSoiree,$heureSoiree,$placeAssise,$infoComp) {
        $resultatRequete= $this ->exec("INSERT INTO `soiree`( `nom`, `nbPlaces`, `lieu` , `dateSoiree`, `heureSoiree`, `placeAssise`, `infoComp` ) VALUES ('$nom','$nbPlace','$lieu','$dateSoiree','$heureSoiree','$placeAssise','$infoComp')");
        return $resultatRequete;
    }

    /**
     * Modifie les informations d'une soirée existante dans la base de données.
     * @param mixed $idSoiree
     * @param mixed $nom
     * @param mixed $nbPlace
     * @param mixed $lieu
     * @param mixed $dateSoiree
     * @param mixed $heureSoiree
     * @param mixed $placeAssise
     * @param mixed $infoComp
     * @return bool|int
     */

    public function ModifierUneSoiree($idSoiree, $nom, $nbPlace, $lieu, $dateSoiree, $heureSoiree, $placeAssise, $infoComp) {
        $resultatRequete = $this->exec("UPDATE `soiree` 
                                        SET `nom` = '$nom', 
                                            `nbPlaces` = '$nbPlace', 
                                            `lieu` = '$lieu', 
                                            `dateSoiree` = '$dateSoiree', 
                                            `heureSoiree` = '$heureSoiree', 
                                            `placeAssise` = '$placeAssise',                         
                                            `infoComp` = '$infoComp'  
                                        WHERE `idSoiree` = $idSoiree");
        return $resultatRequete;
    }
}