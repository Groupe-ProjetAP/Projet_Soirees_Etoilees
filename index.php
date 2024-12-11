<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site</title>
    <link href="./style/main.css" rel="stylesheet">
    <link href="./style/voirPlus.css" rel="stylesheet">
</head>

<body>
    <header>

    </header>

    <main>
        <section>
            <nav>
                <ul>
                    <li><a href="index.php?controleur=General&action=accueil">Accueil</a></li>
                    <li><a href="index.php?controleur=Soiree&action=consultation">Gérer vos soirées</a></li> 
                    <!-- <li><a href="index.php?controleur=Soiree&action=consultation">vos soirées</a></li>  -->
                    <a href="index.php?controleur=Soiree&action=consultationClient">soirées</a></li>
                </ul>
            </nav>
            <div id="contenu">
                <?php
                // si aucune information  dans l'url, le controleur par défaut sera "accueil"
                if (isset($_GET['controleur']))
                    $controleur = filter_var($_GET['controleur'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                else
                    $controleur = "General";

                switch ($controleur) {
                    case 'General':
                        include("Controleurs/gestionGeneral.php");
                        break;
                    case 'Soiree': 
                        include("Controleurs/gestionSoiree.php");
                        break;
                    case 'Reservation': 
                        include("Controleurs\gestionReservation.php");
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
