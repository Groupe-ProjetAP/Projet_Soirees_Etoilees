<?php
class Soiree {
    private $id;
    private $nom;
    private $nbplace;
    private $dateSoiree;
    public function __construct($id, $nom,$nbplace,$dateSoiree) {
        $this->id = $id;
        $this->nom = $nom;
        $this->nbplace = $nbplace;
        $this->dateSoiree = $dateSoiree;
    }
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getNbPlace(){
        return $this->nbplace;
    }
    public function getDateSoirée(){
        return $this->dateSoiree;
    }

}