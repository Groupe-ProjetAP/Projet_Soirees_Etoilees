<h2> Gestion des soirées : </h2>

<a class='btn' href="index.php?controleur=Soiree&action=AjouterSoiree">ajouter une soirée</a>
</br>
</br>

<table>
    <thead>
        <tr>
            <th>Nom de la soirée</th>
            <th>Nombre de places disponible</th>
            <th>Lieu</th>
            <th>Date soirée</th>
            <th>Heure Soirée</th>
            <th>Emplacement</th>
            <th>Info Complémentaire</th>
            <th>date de création de la soirée</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listeSoirées as $uneSoirée) {
            echo "<tr>";
                echo "<td>" . $uneSoirée->getNom() . "</td>";
                echo "<td>" . $uneSoirée->getNbPlace() . "</td>";
                echo "<td>" . $uneSoirée->getLieu() . "</td>";
                echo "<td>" . $uneSoirée->getDateSoiree() . "</td>";
                echo "<td>" . $uneSoirée->getHeureSoiree() . "</td>";
                    if($uneSoirée->getPlaceAssise()){
                        echo "<td>Assis</td>";
                    }else{
                        echo "<td>Debout</td>";
                    }
                echo "<td>" . $uneSoirée->getInfoComp() . "</td>";
                echo "<td>" . $uneSoirée->getDateCreation() . "</td>";
                echo "<td>";
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=supprimerSoiree&idSoiree=" . $uneSoirée->getId() . "'>Supprimer</a>";
                    echo " ";
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=modifierSoiree&nom=" . $uneSoirée->getNom() . "&nbPlace=" . $uneSoirée->getNbPlace() . "&date=" . $uneSoirée->getDateSoiree() . "'>Modifier</a>";
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>