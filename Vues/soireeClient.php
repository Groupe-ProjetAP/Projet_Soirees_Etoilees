<h2>  les soirées : </h2>


</br>

<table>
    <thead>
        <tr>
            <th>Nom de la soirée</th>
            <th>Nombre de places</th>
            <th>date de l'évenement</th>
            <th>Lieux</th>
            <th>Heure Soirée</th>
            <th>Emplacement</th>
            <th>Info Complémentaire</th>
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
                echo "<td>" . htmlspecialchars($uneSoirée->getLieu()) . "</td>";
                echo "<td>" . htmlspecialchars($uneSoirée->getHeureSoiree()) . "</td>";
                if($uneSoirée->getPlaceAssise()){
                    echo "<td>Assis</td>";
                }else{
                    echo "<td>Debout</td>";
                }
                $infoComp = $uneSoirée->getInfoComp();
                $maxLength = 80; // Limite de caractères affichés

                if (strlen($infoComp) > $maxLength) {
                    // Si le texte est plus long que la limite, on montre un extrait avec un lien pour voir plus
                    echo "<td>";
                    echo "<span class='info-extrait'>" . substr($infoComp, 0, $maxLength) . "...</span>";
                    echo "<span class='info-complete' style='display:none;'>" . substr($infoComp, $maxLength) . "</span>";
                    echo "<a href='#' class='toggle-info'>Voir plus</a>";
                    echo "</td>";
                } else {
                    // Si le texte est court, on l'affiche en entier
                    echo "<td>" . $infoComp . "</td>";
                }
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