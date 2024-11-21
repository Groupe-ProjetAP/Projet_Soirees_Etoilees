<?php
class reservations {
    private $numReservation;
    private $nom;
    private $prenom;
    private $nbPlace;
    private $dateReservation;
    private $idSoiree;
    public function __construct($numReservation, $nom, $prenom, $nbPlace, $dateReservation, $idSoiree) {
        $this->numReservation = $numReservation;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nbPlace = $nbPlace;
        $this->dateReservation = $dateReservation;
        $this->idSoiree = $idSoiree;
    }
    public function getnumReservation() {
        return $this->numReservation;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getNbPlace(){
        return $this->nbPlace;
    }

    public function getdateReservation(){
        return $this->dateReservation;
    }

    public function getidSoiree(){
        return $this->idSoiree;
    }

}