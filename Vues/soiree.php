<h2> Les soirée sont : </h2>

<a href="index.php?controleur=Soiree&action=AjouterSoiree">ajouter une soirée</a>
<table>
    <tr>
        <th>Nom de la soirée</th>
        <th>Nombre de places disponible</th>
        <th>date de création de la soirée</th>
        <th>Action</th>
    </tr>

    <?php
        foreach($listeSoirées as $uneSoirée){
            echo "<tr>";
            echo "<td>".$uneSoirée->getNom()."</td>";
            echo "<td>".$uneSoirée->getNbPlace()."</td>";
            echo "<td>".$uneSoirée->getDateSoirée()."</td>";
            echo "<td>"."<a href='index.php?controleur=Soiree&action=supprimerSoiree&idSoiree=".$uneSoirée->getId()."'>supprimer</a>"."<br>"."<a href='index.php?controleur=Soiree&action=modifierSoiree&nom=".$uneSoirée->getNom()."&nbPlace=".$uneSoirée->getNbPlace()."&date=".$uneSoirée->getDateSoirée()."'>modifier</a>"."</td>"; // je vais appliquer du css pour que ça resemble a des boutons
            echo "</tr>";
        }
    ?>

    </tr>
</table>

