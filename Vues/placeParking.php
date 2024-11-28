<h2> Gestion des soirées : </h2>

<a class='btn' href="index.php?controleur=PlaceParking&action=AjouterPlace">ajouter une place</a>
</br>
</br>

<table>
    <thead>
        <tr>
            <th>Nom de la Zone</th>
            <th>type de places disponible</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listePlaceParking as $unePlace) {
            echo "<tr>";
                echo "<td>" . $unePlace->getzonesParking() . "</td>";
                if($unePlace->gettypePlace()){
                    echo "<td>Place Classique</td>";
                }else{
                    echo "<td>Place à mobilité réduite</td>";
                }
             

                echo "<td>" ."<a class='btn' href=''>Modifier</a>". "</td>";
                
            echo "</tr>";
        }
        ?>
    </tbody>
</table>