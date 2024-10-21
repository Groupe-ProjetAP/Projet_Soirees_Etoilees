<?php
include '../db.php'; // Vérifiez que le chemin est correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_soiree = htmlspecialchars($_POST['soiree']);
    $date = date('Y-m-d'); // Date actuelle
    $lieu = 'À déterminer'; // Remplacez par le lieu si nécessaire

    if (!empty($nom_soiree)) {
        try {
            $sql = "INSERT INTO reservations (nom_soiree, date, lieu) VALUES (:nom_soiree, :date, :lieu)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nom_soiree', $nom_soiree);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':lieu', $lieu); // Mettez à jour le lieu si disponible

            if ($stmt->execute()) {
                // Redirection après succès
                header("Location: ../index.php?page=reservations&success=1");
                exit();
            } else {
                echo "Erreur lors de la réservation.";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez sélectionner une soirée.";
    }
}
?>
