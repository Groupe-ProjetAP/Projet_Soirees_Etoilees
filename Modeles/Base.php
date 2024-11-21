<?php
/**
 * Classe abstraite pour les classes DAO
 */
class Base {
    private $db;
	 /**
	  * Constructeur de la classe Base
	  * @param string $user
	  * @param string $mdp
	  */
     public function __construct(string $user, string $mdp) {         
		try{
			/* =============================BD LOCALE =============================================== */
			
			/*
			$serveurBdLocal = 'localhost';
			$nomBdLocale = "";
					
			$this->db = new PDO("mysql:host=".$serveurBdLocal.";dbname=".$nomBdLocale,$user,$mdp);
			*/
			
			/* =============================BD DISTANTE =============================================== */
			
			$serveurBdDistant = 'mysql-projetsjp.alwaysdata.net';
			
			$nomBdDistante = "projetsjp_soireeetoilees";
			$this->db = new PDO("mysql:host=".$serveurBdDistant.";dbname=".$nomBdDistante,$user,$mdp);
			
           		
			
            $this->db->query("SET CHARACTER SET utf8");
           //echo "<br/>connexion réussie.<br/>";
		}
		catch ( PDOException $erreur){
            die("Erreur de connexion à la base de données ".$erreur->getMessage());
		}
    }
	
	
	
	/**
	 * Methode publique définie pour pouvoir accéder à la méthode query() de la propriété $db qui est privée.
	 * @param mixed $sql
	 * @return bool|int
	 */
    public function query($sql) {
        return $this->db->query($sql);
    }
	/**
	 * Methode publique définie pour pouvoir accéder à la méthode exec() de la propriété $db qui est privée.
	 * @param mixed $sql
	 * @return bool|int
	 */
    public function exec($sql) {
		echo $sql;
        return $this->db->exec($sql);
    }
	
	
	
}

