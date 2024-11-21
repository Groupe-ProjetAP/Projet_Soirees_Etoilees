<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
require_once 'Modeles\reservations.php';
include(".\\Modeles\\reservationDAO.php");

class reservationsTest extends TestCase
{
    public function testGetId()
    {
        $uneReservation = new reservations(1, "TestReservation1", random_int(1,100),"2024-11-24");
        assertEquals(1, $uneReservation->getId(),'NOK_GetId');
    }
    public function testGetNom()
    {
        $uneReservation = new reservations(1, "TestReservation1", random_int(1,100),"2024-11-24");
        assertEquals("TestReservation1", $uneReservation->getNom(),'NOK_GetNom');
    }
    public function testgetnumReservation()
    {
        $uneReservation = new reservations(1, "TestReservation1", 5,"2024-11-24");
        assertEquals(5, $uneReservation->getnumReservation(),'NOK_GetnumReservation');
    }    
    public function testgetDateSoirée()
    {
        $uneReservation = new reservations(1, "TestReservation1", random_int(1,100),"2024-11-24");
        assertEquals("2024-11-24", $uneReservation->getDateSoirée(),'NOK_GetDateSoirée');
    }
    public function testAjoutLesReservation(){
        $sourceDeDonnees = new reservationDAO();
        $resultatRequete = $sourceDeDonnees->AjoutLesReservation('TestAjoutReservation', "2024-11-24", 180);
        assertEquals("2024-11-24",$sourceDeDonnees->);
    }
}