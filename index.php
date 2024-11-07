<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site</title>
    <link href="./style/main.css" rel="stylesheet">
</head>

<body>
    <header>

    </header>

    <main>
        <section>
            <nav>
                <ul>
                    <li><a href="index.php?page=home">Accueil</a></li>
                    <li><a href="index.php?controleur=Soiree&action=consultation">Gérer vos soirées</a></li> <!-- on avait inscrit gestionSoirée -->
                    <!-- <li><a href="index.php?page=reservations">Vos réservations</a></li> -->
                </ul>
            </nav>
            <div id="contenu">
                <?php
                // si aucune information n'est présente dans l'url, le controleur par défaut sera "accueil"
                if (isset($_GET['controleur']))
                    $controleur = filter_var($_GET['controleur'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                else
                    $controleur = "general";

                switch ($controleur) {
                    case 'Soiree': // si ici c'est Soiree on met dans l'url à la partie controleur Soiree aussi et non gestionSoirée 
                        include("controleurs/gestionSoiree.php");
                        break;

                }
                ?>

            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024  - Tous droits réservés.</p>
    </footer>
</body>

</html>

<?php
