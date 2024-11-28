<?php
class Soiree {
    private $id;
    private $nom;
    private $lieu;
    private $nbplace;
    private $dateSoiree;
    private $heureSoiree;
    private $placeAssise;
    private $infoComp;


    /**
     * Contructeur de la classe soiree
     * @param mixed $id
     * @param mixed $nom
     * @param mixed $nbplace
     * @param mixed $lieu
     * @param mixed $dateSoiree
     * @param mixed $heureSoiree
     * @param mixed $placeAssise
     * @param mixed $infoComp
     */

    public function __construct($id, $nom,$nbplace,$lieu,$dateSoiree,$heureSoiree,$placeAssise,$infoComp) {

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
    public function getNbPlaceDispo(){
        return $this->nbplacedispo;
    }

}