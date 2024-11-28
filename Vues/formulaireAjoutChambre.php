<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="index.php?controleur=ChambreHote&action=enregChambreAjoutee" method="POST">
            <label for="nom">Nom de la chambre :</label>
            <input type="text" id="nom" name="nom" placeholder="Nom de la chambre"><br><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" placeholder="Adresse de la chambre"><br><br>

            <label for="mail">Mail de l'hote :</label>
            <input type="text" id="mail" name="mail" placeholder="mail de l'hôte"><br><br>

            <label for="siteweb">Site Web :</label>
            <input type="text" id="siteweb" name="siteweb" placeholder="siteweb"><br><br>

            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>