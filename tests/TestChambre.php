<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
require_once 'Modeles\Chambre.php';

class ChambreTest extends TestCase
{
    public function testGetId()
    {
        $uneChambre = new Chambre(1, nom: "Chambre 8", "12 rue des neiges","Tom@gmail.com","airbnb.fr");
        assertEquals(1, $uneChambre->getId(),'NOK_GetId');
    }

    public function testGetNom()
    {
        $uneChambre = new Chambre(1, "Chambre 8", "12 rue des neiges","Tom@gmail.com","airbnb.fr");
        assertEquals("Chambre 8", $uneChambre->getNom(),'NOK_GetNom');
    }
    public function testGetAdresse()
    {
        $uneChambre = new Chambre(1, "Chambre 8", "12 rue des neiges","Tom@gmail.com","airbnb.fr");
        assertEquals("12 rue des neiges", $uneChambre->getAdresse(),'NOK_GetAdresse');
    }
    public function testGetMail()
    {
        $uneChambre = new Chambre(1, "Chambre 8", "12 rue des neiges","Tom@gmail.com","airbnb.fr");
        assertEquals("Tom@gmail.com", $uneChambre->getMail(),'NOK_GetMail');
    }

    public function testGetSiteweb()
    {
        $uneChambre = new Chambre(1, "Chambre 8", "12 rue des neiges","Tom@gmail.com","airbnb.fr");
        assertEquals("airbnb.fr", $uneChambre->getSiteweb(),'NOK_GetSiteweb');
    }
}
