<?php
include 'modeles/Base.php';
include 'C:\wamp64\www\Projet_Soirees_Etoilees\modeles\PlaceParking.php';

class PlaceParkingDAO extends Base{
    
    public function __construct() {
        parent::__construct('projetsjp','69844fqfqkmILJ5');
    }
    
    public function getLesPlaces() {
        $resultatRequete= $this ->query("SELECT `zones_de_parking`, `type_place`, `idPlaceParking` FROM `place_parking`");
        $tableauPlace=$resultatRequete->fetchAll();
        $listeParking=array();
        foreach ($tableauPlace as $uneLignePlace) {
            $unObjetCompetence = new PlaceParking($uneLignePlace["idPlaceParking"], $uneLignePlace["zones_de_parking"],$uneLignePlace['type_place']);
            $listeParking[]=$unObjetCompetence;
        }

        return $listeParking;
        
    }
    public function AjouterUnePlace($nom,$typePlace,$nbPlace,) {
        $resultatRequete= $this ->exec("INSERT INTO `place_parking`(`zones_de_parking`, `type_place`, `nb_place`) VALUES ('$nom','$typePlace','$nbPlace')");
        return $resultatRequete;
    }
}