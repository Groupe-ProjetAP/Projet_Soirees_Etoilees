<?php
class Soiree {
    private $id;
    private $nom;
    private $lieu;
    private $nbplace;
    private $dateSoiree;
    private $heureSoiree;
    private $infoComp;
    private $dateCreation;
    public function __construct($id, $nom,$nbplace,$lieu,$dateSoiree,$heureSoiree,$infoComp,$dateCreation) {
        $this->id = $id;
        $this->nom = $nom;
        $this->lieu = $lieu;
        $this->nbplace = $nbplace;
        $this->dateSoiree = $dateSoiree;
        $this->heureSoiree = $heureSoiree;
        $this->infoComp = $infoComp;
        $this->dateCreation = $dateCreation;
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
    public function getInfoComp(){
        return $this->infoComp;
    }
    public function getDateCreation(){
        return $this->dateCreation;
    }

}