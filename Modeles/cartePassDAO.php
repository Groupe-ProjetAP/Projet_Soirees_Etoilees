<?php
include 'modeles/Base.php';
include './Modeles/cartePass.php';
include './Modeles/Client.php';

class CartePassDAO extends Base
{

    public function __construct()
    {
        parent::__construct('projetsjp', '69844fqfqkmILJ5');
    }

    public function getLesClientPassValide()
    {

        $resultatRequete = $this->query("SELECT numCarte, dateValiditee,numClient FROM cartePass WHERE CURRENT_DATE <= dateValiditee");
        $tableauClientPass = $resultatRequete->fetchAll();
        $listeClientPass = array();
        foreach ($tableauClientPass as $uneLigneUnClientPass) {

            $unObjetCompetence = new cartePass($uneLigneUnClientPass["numCarte"], $uneLigneUnClientPass["dateValiditee"], $uneLigneUnClientPass['numClient']);

            $listeClientPass[] = $unObjetCompetence;
        }

        return $listeClientPass;
    }


    public function getLesClientPassValide2()
    {

        $resultatRequete = $this->query("SELECT client.numClient, nomClient, numCarte, dateValiditee FROM client INNER JOIN cartePass ON client.numClient = cartePass.numClient WHERE CURRENT_DATE <= dateValiditee");
        $tableauClientPass = $resultatRequete->fetchAll();
        $listeClientPass = array();
        foreach ($tableauClientPass as $uneLigneUnClientPass) {

            $unObjetCompetence = new cartePass($uneLigneUnClientPass["numCarte"], $uneLigneUnClientPass["dateValiditee"], new Client($uneLigneUnClientPass["numClient"],$uneLigneUnClientPass["nomClient"]));

            $listeClientPass[] = $unObjetCompetence;
        }

        return $listeClientPass;
    }














    public function getLesNomClientPassValide()
    {

        $resultatRequete = $this->query("SELECT client.numClient, nomClient FROM cartePass INNER JOIN client ON client.numClient = cartePass.numClient WHERE CURRENT_DATE <= dateValiditee");
        $tableauNomClientPass = $resultatRequete->fetchAll();
        $listeNomClientPass = array();
        foreach ($tableauNomClientPass as $uneLigneUnNomClientPass) {

            $unObjetCompetence = new Client($uneLigneUnNomClientPass['numClient'], $uneLigneUnNomClientPass['nomClient']);

            $listeNomClientPass[] = $unObjetCompetence;
        }

        return $listeNomClientPass;
    }

    

    
}