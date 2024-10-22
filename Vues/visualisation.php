<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualisation des soirées</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Visualisation des soirées</h1>
    </header>

    <main>
        <div class="button-container">
            <a href="../index.php" class="button retour-button">Retour à l'accueil</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nom de la soirée</th>
                    <th>Nombre de places disponibles</th>
                    <th>Date de création</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inclusion du fichier de connexion
                include '../db.php'; // Chemin vers le fichier de connexion

                // Récupération des soirées depuis la base de données
                $sql = "SELECT * FROM soiree";
                $stmt = $pdo->query($sql);
                $soirees = $stmt->fetchAll();

                if ($soirees) {
                    foreach ($soirees as $soiree) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($soiree['nom']) . '</td>';
                        echo '<td>' . intval($soiree['nbPlaces']) . '</td>';
                        echo '<td>' . htmlspecialchars($soiree['dateSoiree']) . '</td>'; // Assurez-vous que ce champ existe dans votre DB
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="3">Aucune soirée disponible.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Votre Site - Tous droits réservés.</p>
    </footer>
</body>
</html>
