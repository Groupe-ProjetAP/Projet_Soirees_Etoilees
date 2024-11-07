<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?controleur=Soiree&action=enregSoireeModif" method="POST">
        <input type="text" id='nom' name='nom' placeholder='nom de la soirée' value="<?php echo $_GET['nom']; ?>">
        <input type="number" id='nbPlace' name='nbPlace' placeholder='nombre de place à la soirée' value="<?php echo $_GET['nbPlace']; ?>">
        <input type="date" id='date' name='date' placeholder='date de la soirée' value="<?php echo $_GET['date']; ?>">
        <input type="hidden" id="idSoiree" name="idSoiree" value="<?php echo $_GET['idSoiré']; ?>">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php
var_dump( $_GET['idSoiré']);