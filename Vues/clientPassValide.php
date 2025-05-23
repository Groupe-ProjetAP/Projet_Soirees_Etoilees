<h2> Gestion des client avec une carte Pass : </h2>

</br>
</br>
<div>
    <table>
        <thead>
            <tr>
                <th>N° Carte Pass</th>
                <th>Valable jusqu'au</th>
                <th>N° Client</th>
                <th>Nom Client</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listeClientPass as $unClientPass) {
                echo "<tr>";
                    echo "<td>" . $unClientPass->getNumCarte() . "</td>";
                    echo "<td>" . $unClientPass->getDateValiditee() . "</td>";
                    echo "<td>" . $unClientPass->getUnClient()->getNumClient() . "</td>";
                    echo "<td>" . $unClientPass->getUnClient()->getNomClient() . "</td>";
            }

            ?>
        </tbody>
    </table>

    




</div>