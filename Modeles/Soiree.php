<?php
class Soiree {
    private $id;
    private $nbplacedispo;
    private $nom;
    private $nbplace;
    private $dateSoiree;
    public function __construct($id, $nom,$nbplace,$dateSoiree,$nbplacedispo) {
        $this->id = $id;
        $this->nom = $nom;
        $this->nbplace = $nbplace;
        $this->dateSoiree = $dateSoiree;
        $this->nbplacedispo= $nbplacedispo;
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
    public function getNbPlaceDispo(){
        return $this->nbplacedispo;
    }

}