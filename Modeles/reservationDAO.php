<?php
include 'modeles/Base.php'; // Inclusion de la classe de base pour la gestion de la connexion à la base de données.
include 'Modeles/reservations.php'; // Inclusion du modèle représentant une réservation.

/**
 * Classe `reservationDAO` permettant de gérer les opérations sur les réservations.
 * Hérite de la classe `Base` pour utiliser les fonctionnalités de connexion et exécution des requêtes SQL.
 */
class reservationDAO extends Base{
    
     /**
     * Constructeur de la classe `reservationDAO`.
     * Appelle le constructeur de la classe parent (`Base`) avec des paramètres spécifiques pour établir la connexion.
     */
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5');
    }
    
     /**
     * Récupère toutes les réservations de la base de données.
     * @return array Retourne une liste d'objets `reservations` représentant chaque réservation.
     */
    public function getLesReservation() {
        $resultatRequete= $this ->query("SELECT numReservation,nom,prenom,nbPlace,dateReservation,idSoiree FROM reservation");
        $tableauSoirée=$resultatRequete->fetchAll();
        $listeReservation=array();
        foreach ($tableauSoirée as $uneLigneUneSoirée) {
            $unObjetCompetence = new reservations($uneLigneUneSoirée["numReservation"],
                                                            $uneLigneUneSoirée['nom'],
                                                            $uneLigneUneSoirée['prenom'],
                                                            $uneLigneUneSoirée['nbPlace'],
                                                            $uneLigneUneSoirée['dateReservation'],
                                                            $uneLigneUneSoirée['idSoiree']);
            $listeReservation[]=$unObjetCompetence;
        }
        
        return $listeReservation;
    }

    /**
     * Ajoute une nouvelle réservation à la base de données.
     * @param string $nom Nom de la réservation.
     * @param string $dateReservation Date de la réservation.
     * @param int $idSoiree Identifiant de la soirée liée à la réservation.
     * @return int Retourne le nombre de lignes affectées par la requête.
     */
    public function AjoutLesReservation($nom,$dateReservation,$idSoiree){
        $resultatRequete= $this ->exec("INSERT INTO `soiree`( `nom`, `nbPlaces`, `lieu` , `dateSoiree`, `heureSoiree`, `placeAssise`, `infoComp` ) VALUES ()");
        return $resultatRequete;
    }


     /**
     * Effectue une réservation pour une soirée et met à jour le nombre de places disponibles.
     * @param string $nom Nom du réservataire.
     * @param string $prenom Prénom du réservataire.
     * @param int $nbPlace Nombre de places réservées.
     * @param int $idSoiree Identifiant de la soirée.
     * @param int $nombrePlace Nombre total de places à réduire.
     * @return int Retourne le nombre total de lignes affectées par les deux requêtes (insertion et mise à jour).
     */
    public function reserverSoiree($nom, $prenom, int $nbPlace, int $idSoiree, int $nombrePlace){
       var_dump($nom, $prenom,  $nbPlace,  $idSoiree,  $nombrePlace);
        $resultatRequete= $this ->exec("INSERT INTO `reservation`(`nom`,`prenom`,`nbPlace`,`idSoiree`) VALUES ('$nom','$prenom','$nbPlace','$idSoiree') ");
        $resultatRequete2 = $this->exec("UPDATE soiree SET nbPlaces = nbPlaces - $nombrePlace WHERE idSoiree='$idSoiree'");
        // var_dump($resultatRequete2);
        return $resultatRequete + $resultatRequete2;

    }

}