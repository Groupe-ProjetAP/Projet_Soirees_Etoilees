<?php


class Client {
    private $numClient;
    private $nomClient;

    public function __construct($numClient, $nomClient) {

        $this->numClient = $numClient;
        $this->nomClient = $nomClient;

    }

    public function getNumClient() {
        return $this->numClient;

    }

    public function getNomClient() {
        return $this->nomClient;

    }

    
}