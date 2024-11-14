<h2>  les soirées : </h2>


</br>

<table>
    <thead>
        <tr>
            <th>Nom de la soirée</th>
            <th>places dispo</th>
            <th>date de l'évenement</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listeSoirées as $uneSoirée) {
            echo "<tr>";
                echo "<td>" . htmlspecialchars($uneSoirée->getNom()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getNbPlaceDispo()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getDateSoiree()) . "</td>";
                echo "<td>";
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=supprimerSoiree&idSoiree=" . $uneSoirée->getId() . "'>reserver</a>";

                echo "</td>";
                
                
            echo "</tr>";
        }
        ?>
    </tbody>
</table>