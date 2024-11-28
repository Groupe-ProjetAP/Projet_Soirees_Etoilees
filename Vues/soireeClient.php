<h2>  les soirées : </h2>


</br>

<table>
    <thead>
        <tr>
            <th>Nom de</br> la soirée</th>
            <th>Nombre de</br>places totale</th>
            <th>Lieu</th>
            <th>Date</br> soirée</th>
            <th>Heure</br> Soirée</th>
            <th>Emplacement</th>
            <th>Info Complémentaire</th>
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
                echo "<td>";
                echo "<a class='btn' href='index.php?controleur=#&action=#'>reserver</a>";

                echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>