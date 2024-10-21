<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une soirée</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Créer une nouvelle soirée</h1>
    </header>

    <main>
        <form action="Modeles/traitement.php" method="post">
            <label for="nom">Nom de la soirée :</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="places">Nombres de places disponibles :</label>
            <input type="number" id="places" name="places" required>
            
            <input type="submit" value="Créer la soirée">
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Votre Site - Tous droits réservés.</p>
    </footer>
</body>
</html>
