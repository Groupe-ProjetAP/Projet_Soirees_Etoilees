<?php
include 'modeles/Base.php';
include 'Modeles\reservations.php';

class reservationDAO extends Base{
    
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5'); // les mdp et user ne sont pas correct
    }
    
    public function getLesReservation() {
        $resultatRequete= $this ->query("SELECT numReservation,nom,dateReservation,idSoiree FROM reservation");
        $tableauSoirée=$resultatRequete->fetchAll();
        $listeReservation=array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {
            $unObjetCompetence = new reservations($uneLigneUneSoirée["idSoiree"], $uneLigneUneSoirée["nom"],$uneLigneUneSoirée['numReservation'],$uneLigneUneSoirée['dateReservation']);
            $listeReservation[]=$unObjetCompetence;
        }
        
        return $listeReservation;
    }

}