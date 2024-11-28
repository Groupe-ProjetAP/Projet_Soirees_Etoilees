<?php
include 'modeles/Base.php';
include './Modeles/Soiree.php';

class SoireeDAO extends Base {
    
    public function __construct() {
        parent::__construct('projetsjp', '69844fqfqkmILJ5');
    }

    /**
     * Récupère la liste de toutes les soirées depuis la base de données.
     * @return Soiree[]
     */
    public function getLesSoirees() {
        $sql = "SELECT idSoiree, nom, nbPlaces, lieu, dateSoiree, heureSoiree, placeAssise, infoComp FROM soiree";
        $stmt = $this->prepareAndExecute($sql);
        $tableauSoiree = $stmt->fetchAll();
        $listeSoirees = [];

        foreach ($tableauSoiree as $uneLigneUneSoiree) {
            $unObjetSoiree = new Soiree(
                $uneLigneUneSoiree["idSoiree"],
                $uneLigneUneSoiree["nom"],
                $uneLigneUneSoiree['nbPlaces'],
                $uneLigneUneSoiree['lieu'],
                $uneLigneUneSoiree['dateSoiree'],
                $uneLigneUneSoiree['heureSoiree'],
                $uneLigneUneSoiree['placeAssise'],
                $uneLigneUneSoiree['infoComp']
            );
            $listeSoirees[] = $unObjetSoiree;
        }

        return $listeSoirees;
    }

    /**
     * Supprime une soirée de la base de données à partir de son identifiant.
     * @param mixed $idSoiree
     * @return bool|int
     */
    public function SupprimerSoiree($idSoiree) {
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
    public function AjouterUneSoiree($nom, $nbPlace, $lieu, $dateSoiree, $heureSoiree, $placeAssise, $infoComp) {
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
    public function ModifierUneSoiree($idSoiree, $nom, $nbPlace, $lieu, $dateSoiree, $heureSoiree, $placeAssise, $infoComp) {
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
