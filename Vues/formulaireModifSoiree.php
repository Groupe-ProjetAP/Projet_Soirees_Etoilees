<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?controleur=Soiree&action=enregSoireeModif" method="POST">
        
        <input type="hidden" id="idSoiree" name="idSoiree" value="<?php echo $_GET['idSoiree']; ?>">

        <label for="nom">Nom de la soirée :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom de la soirée" value="<?php echo isset($_GET['nom']) ? $_GET['nom'] : ''; ?>"><br><br>

        <label for="nbPlace">Nombre de places disponibles :</label>
        <input type="number" id="nbPlace" name="nbPlace" placeholder="Nombre de places disponibles" value="<?php echo isset($_GET['nbPlace']) ? $_GET['nbPlace'] : ''; ?>"><br><br>

        <label for="lieu">Lieu de la soirée :</label>
        <input type="text" id="lieu" name="lieu" placeholder="Lieu de la soirée" value="<?php echo isset($_GET['lieu']) ? $_GET['lieu'] : ''; ?>"><br><br>

        <label for="dateSoiree">Date de la soirée :</label>
        <input type="date" id="dateSoiree" name="dateSoiree" placeholder="Date de la soirée" value="<?php echo isset($_GET['dateSoiree']) ? $_GET['dateSoiree'] : ''; ?>"><br><br>

        <label for="heureSoiree">Heure de la soirée :</label>
        <input type="time" id="heureSoiree" name="heureSoiree" placeholder="Heure de la soirée" value="<?php echo isset($_GET['heureSoiree']) ? $_GET['heureSoiree'] : ''; ?>"><br><br>

        <label>Place assise :</label>
        <input type="radio" id="placeAssiseOui" name="placeAssise" value="1" <?php echo (isset($_GET['placeAssise']) && $_GET['placeAssise'] == 1) ? 'checked' : ''; ?>>
        <label for="placeAssiseOui">Oui</label>
        <input type="radio" id="placeAssiseNon" name="placeAssise" value="0" <?php echo (isset($_GET['placeAssise']) && $_GET['placeAssise'] == 0) ? 'checked' : ''; ?>>
        <label for="placeAssiseNon">Non</label><br><br>

        <label for="infoComp">Informations complémentaires :</label>
        <input type="text" id="infoComp" name="infoComp" placeholder="Informations complémentaires" value="<?php echo isset($_GET['infoComp']) ? $_GET['infoComp'] : ''; ?>"><br><br>

        <input type="submit" value="Modifier">
    </form>

    <?php
    isset($_GET['idSoiree']) ? $_GET['idSoiree'] : 'idSoiree non défini';
    ?>
</body>
</html>