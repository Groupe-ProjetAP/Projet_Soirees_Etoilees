<?php
include 'modeles/Base.php';
include './Modeles/Chambre.php';

class ChambreDAO extends Base {
    
    public function __construct() {
        parent::__construct('projetsjp', '69844fqfqkmILJ5');
    }

    /**
     * Ajoute une nouvelle soirée dans la base de données.
     * @param string $nom
     * @param string $adresse
     * @param string $mail
     * @param string $siteweb
     */
    public function AjouterUneChambre($nom, $adresse, $mail, $siteweb) {
        $sql = "INSERT INTO ChambreHote (nom, adresse, mail, siteweb)
                VALUES (:nom, :adresse, :mail, :siteweb)";
        $params = [
            ':nom' => $nom,
            ':adresse' => $adresse,
            ':mail' => $mail,
            ':siteweb' => $siteweb,
        ];
        return $this->prepareAndExecute($sql, $params);
    }}