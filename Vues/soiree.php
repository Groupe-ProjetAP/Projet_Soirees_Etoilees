<h2> Gestion des soirées : </h2>

<a class='btn' href="index.php?controleur=Soiree&action=AjouterSoiree">ajouter une soirée</a>
</br>
</br>

<table>
    <thead>
        <tr>
            <th>Nom de</br> la soirée</th>
            <th>Nombre de</br> places totale</th>
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
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=supprimerSoiree&idSoiree=" . $uneSoirée->getId() . "'>Supprimer</a>"."</br>"."</br>";
                    echo " ";
                    echo "<a class='btn' href='index.php?controleur=Soiree&action=modifierSoiree&nom=" . $uneSoirée->getNom() . "&nbPlace=" . $uneSoirée->getNbPlace() . "&lieu=".$uneSoirée->getLieu(). "&dateSoiree=" . $uneSoirée->getDateSoiree()."&idSoiree=".$uneSoirée->getId()."&heureSoiree=" . $uneSoirée->getHeureSoiree()."&placeAssise=" . $uneSoirée->getPlaceAssise()."&infoComp=" . $uneSoirée->getInfoComp() . "'>Modifier</a>";
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>