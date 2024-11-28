<?php
class Soiree {
    private $idSoiree;
    private $nbplacedispo;
    private $nom;
    private $lieu;
    private $nbplace;
    private $dateSoiree;
    private $heureSoiree;
    private $placeAssise;
    private $infoComp;

    public function __construct($idSoiree, $nom,$nbplace,$lieu,$dateSoiree,$heureSoiree,$placeAssise,$infoComp,$nbplacedispo) {
        $this->idSoiree = $idSoiree;
        $this->nom = $nom;
        $this->nbplace = $nbplace;
        $this->lieu = $lieu;
        $this->dateSoiree = $dateSoiree;
        $this->heureSoiree = $heureSoiree;
        $this->placeAssise = $placeAssise;
        $this->infoComp = $infoComp;
        $this->nbplacedispo = $nbplacedispo;

    }
    public function getIdSoiree() {
        return $this->idSoiree;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getNbPlace(){
        return $this->nbplace;
    }
    public function getLieu(){
        return $this->lieu;
    }
    public function getDateSoiree(){
        return $this->dateSoiree;
    }

    public function getHeureSoiree(){
        return $this->heureSoiree;
    }
    public function getPlaceAssise(){
        return $this->placeAssise;
    }
    public function getInfoComp(){
        return $this->infoComp;
    }
    public function getNbPlaceDispo(){
        return $this->nbplacedispo;
    }

}