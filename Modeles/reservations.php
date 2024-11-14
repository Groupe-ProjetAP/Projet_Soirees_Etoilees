<?php
class reservations {
    private $id;
    private $nom;
    private $numReservation;
    private $dateSoiree;
    public function __construct($id, $nom,$numReservation,$dateSoiree) {
        $this->id = $id;
        $this->nom = $nom;
        $this->numReservation = $numReservation;
        $this->dateSoiree = $dateSoiree;
    }
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getnumReservation(){
        return $this->numReservation;
    }
    public function getDateSoirée(){
        return $this->dateSoiree;
    }

}