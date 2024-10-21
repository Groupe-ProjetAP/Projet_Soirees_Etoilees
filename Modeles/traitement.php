<?php
// Inclusion du fichier de connexion
include '../db.php'; // Chemin vers le fichier de connexion

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']); 
    $places = intval($_POST['places']); 

    if (!empty($nom) && $places > 0) {
        try {
            $sql = "INSERT INTO soirees (nom, places_disponibles) VALUES (:nom, :places)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':places', $places);

            if ($stmt->execute()) {
                header("Location: ../index.php?page=gerer&success=1");
                exit();
            } else {
                echo "Erreur lors de la création de la soirée.";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs avec des valeurs valides.";
    }
}
?>
