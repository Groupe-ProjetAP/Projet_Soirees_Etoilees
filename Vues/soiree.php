<h2> Gestion des soirées : </h2>

<a class='btn' href="index.php?controleur=Soiree&action=AjouterSoiree">ajouter une soirée</a>
</br>
</br>

<table>
    <thead>
        <tr>
            <th>Nom de la soirée</th>
            <th>Nombre de places disponible</th>
            <th>date de création de la soirée</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listeSoirées as $uneSoirée) {
            echo "<tr>";
                echo "<td>" . htmlspecialchars($uneSoirée->getNom()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getNbPlace()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getDateSoirée()) . "</td>";
                echo "<td>";
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=supprimerSoiree&idSoiree=" . $uneSoirée->getId() . "'>Supprimer</a>";
                    echo " ";
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=modifierSoiree&nom=" . $uneSoirée->getNom() . "&nbPlace=" . $uneSoirée->getNbPlace() . "&date=" . $uneSoirée->getDateSoirée() . "'>Modifier</a>";
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>