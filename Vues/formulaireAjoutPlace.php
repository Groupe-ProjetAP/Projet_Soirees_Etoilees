<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?controleur=PlaceParking&action=enregPlaceAjoutee" method="POST">
        <label for="nom">Nom de la Place :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom de la Place"><br><br>

        <label for="nbPlace">Nombre de places disponibles :</label>
        <input type="number" id="nbPlace" name="nbPlace" placeholder="Nombre de places disponibles"><br><br>

        <label>Type de place :</label>
        <input type="radio" id="placeClassiqueOui" name="placeClassique" value="1">
        <label for="placeAssiseOui">Classique</label>
        <input type="radio" id="placeClassiqueNon" name="placeClassique" value="0" checked>
        <label for="placeAssiseNon">Mobilité réduite</label><br><br>
        
        
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>