<section class="accueil">
    <h1>Le pic du midi de bigorre</h1>
    <div class="">
        <h2>Prochaine Soirée</h2><br/>
        <table>
            <thead>
                <tr>
                    <th>Nom de la soirée</th>
                    <th>Nombre de places</th>
                    <th>date de l'évenement</th>
                    <th>Lieux</th>
                    <th>Heure Soirée</th>

                    
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
                }
                ?>
            </tbody>
        </table>
        <br/>
        <a class="btn" href="index.php?controleur=Soiree&action=consultationClient">En savoir plus</a>
    </div>
</section>