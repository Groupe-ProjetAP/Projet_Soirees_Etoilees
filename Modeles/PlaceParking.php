<?php
class PlaceParking {
    private int $id;
    private String $zonesParking;
    private String $typePlace;
    
    public function __construct(int $id, String $zonesParking, String $typePlace) {
        $this->id = $id;
        $this->zonesParking = $zonesParking;
        $this->typePlace = $typePlace;
    }
    public function getId() {
        return $this->id;
    }

    public function getzonesParking() {
        return $this->zonesParking;
    }
    public function gettypePlace(){
        return $this->typePlace;
    }

}