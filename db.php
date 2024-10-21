<?php
$host = 'mysql-projetsjp.alwaysdata.net';
$db = 'projetsjp_soireeetoilees';
$user = 'projetsjp';
$pass = '69844fqfqkmILJ5';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
