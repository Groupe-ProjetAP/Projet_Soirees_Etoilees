<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?controleur=Soiree&action='enregSoireeModif" method="POST">
        <input type="text" id='nom' name='nom' placeholder='nom du participant' >
        <input type="text" id='prenomParticipant' name='prenomParticipant' placeholder='prenom du participant'>
        <input type="number" id='nbPlace' name='nbPlace' placeholder='nombre de place' >

        <input type="hidden" id="Id" name="Id" value="<?php echo $_GET['Id']; ?>">
        <input type="hidden" value="<?php echo $_GET['Id']; ?>">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>