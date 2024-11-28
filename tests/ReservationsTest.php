<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
include(".\\Modeles\\reservationDAO.php");

class reservationsTest extends TestCase
{
    public function testGetId()
    {
        $uneReservation = new reservations(1, "TestReservation1", random_int(1,100),"2024-11-24");
        $this->assertEquals(1, $uneReservation->getId(),'NOK_GetId');
    }
    public function testGetNom()
    {
        $uneReservation = new reservations(1, "TestReservation1", random_int(1,100),"2024-11-24");
        $this->assertEquals("TestReservation1", $uneReservation->getNom(),'NOK_GetNom');
    }
    public function testgetnumReservation()
    {
        $uneReservation = new reservations(1, "TestReservation1", 5,"2024-11-24");
        $this->assertEquals(5, $uneReservation->getnumReservation(),'NOK_GetnumReservation');
    }    
    public function testgetDateSoirée()
    {
        $uneReservation = new reservations(1, "TestReservation1", random_int(1,100),"2024-11-24");
        $this->assertEquals("2024-11-24", $uneReservation->getDateSoirée(),'NOK_GetDateSoirée');
    }
    /*
    public function testAjoutLesReservation() {
        $sourceDeDonnees = new reservationDAO();
        $reservation = $sourceDeDonnees->AjoutLesReservation('TestAjoutReservation', 'testnom', '2024-11-24', 152);
        

    }*/
}