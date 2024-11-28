<?php
class Chambre {
    private $id;
    private $nom;
    private $adresse;
    private $mail;
    private $siteweb;



    /**
     * Contructeur de la classe chambre
     * @param mixed $id
     * @param mixed $nom
     * @param mixed $adresse
     * @param mixed $mail
     * @param mixed $siteweb
     */
    public function __construct($id, $nom,$adresse,$mail,$siteweb) {

        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->mail = $mail;
        $this->siteweb = $siteweb;
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
     * Retourne l'adresse de la chambre'.
     * @return mixed
     */
    public function getAdresse(){
        return $this->adresse;
    }

    /**
     * Retourne le mail de l'hôte .
     * @return mixed
     */
    public function getMail(){
        return $this->mail;
    }

    /**
     * Retourne le siteweb.
     * @return mixed
     */
    public function getSiteweb(){
        return $this->siteweb;
    }

}