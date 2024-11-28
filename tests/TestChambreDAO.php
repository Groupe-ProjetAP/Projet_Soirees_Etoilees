<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
require_once 'Modeles\ChambreDAO.php';

class ChambreDAOTest extends TestCase
{
    public function testAjouterUneChambre()
    {
        $sourceDeDonnees = new ChambreDAO();
        $nom ="Chambre 8";
        $adresse ="rue des pres";
        $nom ="mail@gmailcom";
        $nom ="test.fr";
        $nbligneEnreg = $sourceDeDonnees->AjouterUneChambre($nom), $adresse, $mail, $siteweb);
        assertEquals(1, $nbligneEnreg,'NOK_AjouterUneChambre');
    }

}
