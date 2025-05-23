<?php


class cartePass {
    private $numCarte;
    private $dateValiditee;
    private $UnClient;

    public function __construct($numCarte, $dateValiditee,$UnClient) {

        $this->numCarte = $numCarte;
        $this->dateValiditee = $dateValiditee;
        $this->UnClient = $UnClient;

    }

    public function getNumCarte() {
        return $this->numCarte;

    }

    public function getDateValiditee() {
        return $this->dateValiditee;

    }

    public function getUnClient() {
        return $this->UnClient;

    }

}