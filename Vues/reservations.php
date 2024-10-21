<?php
include '../db.php'; // Connexion à la base de données

// Récupérer les réservations
$stmt = $pdo->query("SELECT * FROM reservations");
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos Réservations</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Vos Réservations</h1>
        <a href="../index.php?page=home" class="button">Retour à l'accueil</a>
    </header>

    <main>
        <h2>Liste de vos réservations</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom de la Soirée</th>
                    <th>Date</th>
                    <th>Lieu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                    <tr>
                        <td><?= htmlspecialchars($reservation['nom_soiree']); ?></td>
                        <td><?= htmlspecialchars($reservation['date']); ?></td>
                        <td><?= htmlspecialchars($reservation['lieu']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Votre Site - Tous droits réservés.</p>
    </footer>
</body>
</html>
