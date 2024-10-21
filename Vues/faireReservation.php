<?php
// Inclusion du fichier de connexion
include '../db.php'; // Vérifiez que le chemin est correct

// Récupérer la liste des soirées pour le sélecteur
$sql = "SELECT * FROM soirees"; // Assurez-vous que le nom de la table est correct
$stmt = $pdo->query($sql);
$soirees = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire une Réservation</title>
    <link rel="stylesheet" href="../styles.css"> <!-- Vérifiez le chemin -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php?page=home">Accueil</a></li>
                <li><a href="../index.php?page=gerer">Gérer vos soirées</a></li>
                <li><a href="../index.php?page=reservations">Vos réservations</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="reservation-form">
            <h2>Faire une Réservation</h2>
            <form action="../Modeles/traitementReservation.php" method="POST"> <!-- Chemin corrigé -->
                <label for="soiree">Choisissez une soirée :</label>
                <select id="soiree" name="soiree" required>
                    <?php foreach ($soirees as $soiree) : ?>
                        <option value="<?php echo htmlspecialchars($soiree['nom']); ?>"><?php echo htmlspecialchars($soiree['nom']); ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Réserver">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Votre Site - Tous droits réservés.</p>
    </footer>
</body>
</html>
