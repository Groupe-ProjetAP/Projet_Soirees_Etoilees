<?php
include 'modeles/Base.php';
include './Modeles/Soiree.php';

class SoireeDAO extends Base
{

    public function __construct()
    {
        parent::__construct('projetsjp', '69844fqfqkmILJ5');
    }

    /**
     * Récupère la liste de toutes les soirées depuis la base de données.
     * @return Soiree[]
     */
    public function getLesSoirees()
    {


        $resultatRequete = $this->query("SELECT idSoiree, nom,nbPlaces,lieu,dateSoiree,heureSoiree,placeAssise,infoComp,nbPlacesDispo FROM soiree");
        $tableauSoirée = $resultatRequete->fetchAll();
        $listeSoirees = array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {

            $unObjetCompetence = new Soiree($uneLigneUneSoirée["idSoiree"], $uneLigneUneSoirée["nom"], $uneLigneUneSoirée['nbPlaces'], $uneLigneUneSoirée['lieu'], $uneLigneUneSoirée['dateSoiree'], $uneLigneUneSoirée['heureSoiree'], $uneLigneUneSoirée['placeAssise'], $uneLigneUneSoirée['infoComp'], $uneLigneUneSoirée["nbPlacesDispo"]);

            $listeSoirees[] = $unObjetCompetence;
        }

        return $listeSoirees;
    }

    /**
     * Récupère la liste des dix prochaine soirées depuis la base de données.
     * @return Soiree[]
     */
    public function getDixSoirees(){
        $resultatRequete = $this->query("SELECT idSoiree, nom, nbPlaces, lieu, dateSoiree, heureSoiree, placeAssise, infoComp, nbPlacesDispo FROM soiree ORDER BY dateSoiree ASC LIMIT 10;");
        $tableauSoirée = $resultatRequete->fetchAll();
        $listeSoirees = array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {

            $unObjetCompetence = new Soiree($uneLigneUneSoirée["idSoiree"], $uneLigneUneSoirée["nom"], $uneLigneUneSoirée['nbPlaces'], $uneLigneUneSoirée['lieu'], $uneLigneUneSoirée['dateSoiree'], $uneLigneUneSoirée['heureSoiree'], $uneLigneUneSoirée['placeAssise'], $uneLigneUneSoirée['infoComp'], $uneLigneUneSoirée["nbPlacesDispo"]);

            $listeSoirees[] = $unObjetCompetence;
        }

        return $listeSoirees;
    }

    /**
     * Supprime une soirée de la base de données à partir de son identifiant.
     * @param mixed $idSoiree
     * @return bool|int
     */
    public function SupprimerSoiree($idSoiree)
    {
        $sql = "DELETE FROM soiree WHERE idSoiree = :idSoiree";
        $params = [':idSoiree' => $idSoiree];
        return $this->prepareAndExecute($sql, $params);
    }
    /**
     * Ajoute une nouvelle soirée dans la base de données.
     * @param string $nom
     * @param int $nbPlace
     * @param string $lieu
     * @param string $dateSoiree
     * @param string $heureSoiree
     * @param int $placeAssise
     * @param string $infoComp
     * @return bool|int
     */

    public function AjouterUneSoiree($nom, $nbPlace, $lieu, $dateSoiree, $heureSoiree, $placeAssise, $infoComp)
    {
        $sql = "INSERT INTO soiree (nom, nbPlaces, lieu, dateSoiree, heureSoiree, placeAssise, infoComp)
                VALUES (:nom, :nbPlaces, :lieu, :dateSoiree, :heureSoiree, :placeAssise, :infoComp)";
        $params = [
            ':nom' => $nom,
            ':nbPlaces' => $nbPlace,
            ':lieu' => $lieu,
            ':dateSoiree' => $dateSoiree,
            ':heureSoiree' => $heureSoiree,
            ':placeAssise' => $placeAssise,
            ':infoComp' => $infoComp
        ];
        return $this->prepareAndExecute($sql, $params);
    }

    /**
     * Modifie les informations d'une soirée existante dans la base de données.
     * @param int $idSoiree
     * @param string $nom
     * @param int $nbPlace
     * @param string $lieu
     * @param string $dateSoiree
     * @param string $heureSoiree
     * @param int $placeAssise
     * @param string $infoComp
     * @return bool|int
     */

    public function ModifierUneSoiree($idSoiree, $nom, $nbPlace, $lieu, $dateSoiree, $heureSoiree, $placeAssise, $infoComp)
    {

        $sql = "UPDATE soiree
                SET nom = :nom,
                    nbPlaces = :nbPlaces,
                    lieu = :lieu,
                    dateSoiree = :dateSoiree,
                    heureSoiree = :heureSoiree,
                    placeAssise = :placeAssise,
                    infoComp = :infoComp
                WHERE idSoiree = :idSoiree";
        $params = [
            ':idSoiree' => $idSoiree,
            ':nom' => $nom,
            ':nbPlaces' => $nbPlace,
            ':lieu' => $lieu,
            ':dateSoiree' => $dateSoiree,
            ':heureSoiree' => $heureSoiree,
            ':placeAssise' => $placeAssise,
            ':infoComp' => $infoComp
        ];
        return $this->prepareAndExecute($sql, $params);
    }
}
