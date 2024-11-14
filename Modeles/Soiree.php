<?php
class Soiree {
    private $id;
    private $nbplacedispo;
    private $nom;
    private $lieu;
    private $nbplace;
    private $dateSoiree;
    private $heureSoiree;
    private $placeAssise;
    private $infoComp;
    private $dateCreation;
    public function __construct($id, $nom,$nbplace,$lieu,$dateSoiree,$heureSoiree,$placeAssise,$infoComp,$dateCreation,$nbplacedispo) {
        $this->id = $id;
        $this->nom = $nom;
        $this->nbplace = $nbplace;
        $this->lieu = $lieu;
        $this->dateSoiree = $dateSoiree;
        $this->heureSoiree = $heureSoiree;
        $this->placeAssise = $placeAssise;
        $this->infoComp = $infoComp;
        $this->dateCreation = $dateCreation;
        $this->nbplacedispo = $nbplacedispo;

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
    public function getDateCreation(){
        return $this->dateCreation;

    }

    public function getNbPlaceDispo(){
        return $this->nbplacedispo;
    }

}