<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site</title>
    <link rel="stylesheet" href="styles.css"> <!-- Vérifiez le chemin -->
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Accueil</a></li>
            <li><a href="index.php?page=gerer">Gérer vos soirées</a></li>
            <li><a href="index.php?page=reservations">Vos réservations</a></li>
        </ul>
    </nav>
</header>

<main>
    <?php
        // Inclusion du fichier de connexion
        include 'db.php'; // Vérifiez que le chemin est correct

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    echo '<section id="home"><h1>Bienvenue sur notre site !</h1><p>Planifiez, organisez et réservez vos soirées facilement.</p></section>';
                    break;
                case 'gerer':
                    include('Controleurs/gererSoiree.php'); 
                    break;
                case 'reservations':
                    // Récupération des réservations depuis la base de données
                    $sql = "SELECT * FROM reservations";
                    $stmt = $pdo->query($sql);
                    $reservations = $stmt->fetchAll();

                    // Affichage du tableau des réservations
                    echo '<section id="reservations">';
                    echo '<h2>Vos réservations</h2>';
                    echo '<table>';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Nom de la soirée</th>';
                    echo '<th>Date</th>';
                    echo '<th>Lieu</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    if ($reservations) {
                        foreach ($reservations as $reservation) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($reservation['nom_soiree']) . '</td>';
                            echo '<td>' . htmlspecialchars($reservation['date']) . '</td>';
                            echo '<td>' . htmlspecialchars($reservation['lieu']) . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="3">Aucune réservation disponible.</td></tr>';
                    }

                    echo '</tbody>';
                    echo '</table>';

                    // Bouton pour faire une réservation
                    echo '<div class="button-container">';
                    echo '<a href="./Vues/faireReservation.php" class="button">Faire une réservation</a>'; // Vérifiez le chemin ici
                    echo '</div>';
                    echo '</section>';
                    break;
                default:
                    echo '<section><h2>Page non trouvée</h2><p>Désolé, la page que vous cherchez n\'existe pas.</p></section>';
                    break;
            }
        } else {
            // Page d'accueil par défaut
            echo '<section id="home"><h1>Bienvenue sur notre site !</h1><p>Planifiez, organisez et réservez vos soirées facilement.</p></section>';
        }
    ?>
</main>

<footer>
    <p>&copy; 2024 Votre Site - Tous droits réservés.</p>
</footer>
</body>
</html>
