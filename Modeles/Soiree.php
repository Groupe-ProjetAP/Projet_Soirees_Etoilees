<?php

/**
 * Classe `Soiree`
 * Représente une soirée avec toutes les informations nécessaires telles que l'identifiant, le nom, le lieu, les places disponibles, etc.
 */
class Soiree {
    private $id;
    private $nom;
    private $lieu;
    private $nbplace;
    private $dateSoiree;
    private $heureSoiree;
    private $placeAssise;
    private $infoComp;
    private $nbplacedispo;


    /**
     * Constructeur de la classe `Soiree`.
     * Initialise les propriétés de la soirée.
     *
     * @param int $id Identifiant unique de la soirée.
     * @param string $nom Nom de la soirée.
     * @param int $nbplace Nombre total de places disponibles.
     * @param string $lieu Lieu où se déroule la soirée.
     * @param string $dateSoiree Date de la soirée.
     * @param string $heureSoiree Heure de la soirée.
     * @param int $placeAssise Nombre de places assises disponibles.
     * @param string $infoComp Informations complémentaires.
     * @param int $nbplacedispo Nombre de places encore disponibles.
     */
   public function __construct($id, $nom,$nbplace,$lieu,$dateSoiree,$heureSoiree,$placeAssise,$infoComp,$nbplacedispo) {

        $this->id = $id;
        $this->nom = $nom;
        $this->nbplace = $nbplace;
        $this->lieu = $lieu;
        $this->dateSoiree = $dateSoiree;
        $this->heureSoiree = $heureSoiree;
        $this->placeAssise = $placeAssise;
        $this->infoComp = $infoComp;
        $this->nbplacedispo = $nbplacedispo;

    }

    /**
     * Retourne l'identifiant unique de la soirée.
     * @return mixed
     */
    public function getId() {
        return $this->id;

    }

    /**
     * Retourne le nom de la soirée.
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Retourne le nombre total de places disponibles pour la soirée.
     * @return mixed
     */
    public function getNbPlace(){
        return $this->nbplace;
    }

    /**
     * Retourne le lieu où se déroule la soirée.
     * @return mixed
     */
    public function getLieu(){
        return $this->lieu;
    }

    /**
     * Retourne la date de la soirée.
     * @return mixed
     */
    public function getDateSoiree(){
        return $this->dateSoiree;
    }

    /**
     * Retourne l'heure de la soirée.
     * @return mixed
     */
    public function getHeureSoiree(){
        return $this->heureSoiree;
    }

    /**
     * Retourne le nombre de places assises disponibles pour la soirée.
     * @return mixed
     */
    public function getPlaceAssise(){
        return $this->placeAssise;
    }

    /**
     * Retourne les informations complémentaires sur la soirée.
     * @return mixed
     */
    public function getInfoComp(){
        return $this->infoComp;
    }
    
    /**
     * Retourne le nombre de places encore disponibles pour la soirée.
     *
     * @return int
     */
    public function getNbPlaceDispo(){
        return $this->nbplacedispo;
    }

}