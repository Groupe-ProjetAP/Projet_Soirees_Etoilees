<?php
include './db.php'; // Vérifiez que le chemin est correct

// Affichage d'un message de succès après la création d'une soirée
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<p class="success-message">La soirée a été créée avec succès !</p>';
}
?>

<section id="creer-soiree-section">
    <h2>Gérer vos soirées</h2>

    <div class="table-container">
        <a href="./Vues/visualisation.php" class="button">Visualiser les soirées</a>
        <div class="create-button-container">
            <button onclick="toggleForm()">Créer votre soirée</button>
        </div>
    </div>

    <section id="creer-soiree-form" style="display:none;">
        <h2>Créer une nouvelle soirée</h2>
        <form action="./Modeles/traitement.php" method="post">
            <label for="nom">Nom de la soirée :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="places">Nombre de places disponibles :</label>
            <input type="number" id="places" name="places" required>

            <input type="submit" value="Créer la soirée">
        </form>
    </section>
</section>

<script>
    function toggleForm() {
        var form = document.getElementById('creer-soiree-form');
        form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
    }
</script>
