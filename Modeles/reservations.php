<?php
/**
 * Classe représentant une réservation pour une soirée.
 */
class Reservations {
    private $id;
    private $nom;
    private $numReservation;
    private $dateSoiree;

    /**
     * Constructeur de la classe Reservations.
     *
     * @param mixed $id
     * @param mixed $nom
     * @param mixed $numReservation
     * @param mixed $dateSoiree
     */
    public function __construct($id, $nom, $numReservation, $dateSoiree) {
        $this->id = $id;
        $this->nom = $nom;
        $this->numReservation = $numReservation;
        $this->dateSoiree = $dateSoiree;
    }

    /**
     * Retourne l'identifiant unique de la réservation.
     *
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Retourne le nom de la personne ayant effectué la réservation.
     *
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Retourne le numéro de la réservation.
     *
     * @return mixed
     */
    public function getnumReservation() {
        return $this->numReservation;
    }

    /**
     * Retourne la date de la soirée pour laquelle la réservation a été faite.
     *
     * @return mixed
     */
    public function getDateSoiree() {
        return $this->dateSoiree;
    }
}

