<h2>  les soirées : </h2>


</br>

<table>
    <thead>
        <tr>
            <th>Nom de la soirée</th>
            <th>Nombre de places</th>
            <th>date de l'évenement</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listeSoirées as $uneSoirée) {
            echo "<tr>";
                echo "<td>" . htmlspecialchars($uneSoirée->getNom()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getNbPlace()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getDateSoiree()) . "</td>";
                echo "<td>";

                if($uneSoirée->getNbPlace() <= 0){
                    echo "<a class='btn' href='#'>Aucune place dispo</a>";
                }else{
                    echo "<a class='btn' href='index.php?controleur=Reservation&action=EnregistrerReservation&IdSoiree=".$uneSoirée->getId()."'>reserver</a>";
                }

                echo "</td>";
                
                
            echo "</tr>";
        }
        ?>
    </tbody>
</table>