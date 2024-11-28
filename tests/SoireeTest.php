<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
require_once 'Modeles\Soiree.php';

class SoireeTest extends TestCase
{
    public function testGetId(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15",15,'testinfo',14);
        $this->assertEquals(10,$uneReservation->getId(),"NOK_GetId");
    }
    public function testGetNom(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15",15,'testinfo',14);
        $this->assertEquals("testSoirée",$uneReservation->getNom(),"NOK_GetNom");
    }
    public function testGetNbPlace(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15",15,'testinfo',14);
        $this->assertEquals(12,$uneReservation->getNbPlace(),"NOK_GetNbPlace");
    }
    public function testGetLieu(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15",15,'testinfo',14);
        $this->assertEquals("testLieux",$uneReservation->getLieu(),"NOK_GetLieu");
    }
    public function testGetDateSoiree(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15",15,'testinfo',14);
        $this->assertEquals("2024-11-24",$uneReservation->getDateSoiree(),"NOK_GetDateSoiree");
    }
    public function testGetHeureSoiree(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15:00",15,'testinfo',14);
        $this->assertEquals("15:00",$uneReservation->getHeureSoiree(),"NOK_GetHeureSoiree");
    }
    public function testGetPlaceAssise(){
        $uneReservation = new soiree(10,"testSoirée",12,"testLieux","2024-11-24","15:00",15,'testinfo',14);
        $this->assertEquals(15,$uneReservation->getPlaceAssise(),"NOK_GetPlaceAssise");
    }
}