document.addEventListener('DOMContentLoaded', function () {
    // Gérer les clics sur les liens "Voir plus" / "Voir moins"
    document.querySelectorAll('.toggle-info').forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien

            // Sélection des éléments associés
            const extrait = this.previousElementSibling.previousElementSibling; // Élément <span class="info-extrait">
            const complet = this.previousElementSibling; // Élément <span class="info-complete">

            // Basculer entre afficher le texte complet ou l'extrait
            if (complet.style.display === 'none' || complet.style.display === '') {
                // Affiche le texte complet et masque les "..."
                complet.style.display = 'inline';
                extrait.textContent = extrait.textContent.replace(/\.{3}$/, ''); // Supprime les "..."
                this.textContent = 'Voir moins';
            } else {
                // Masque le texte complet et restaure l'extrait avec "..."
                complet.style.display = 'none';
                if (!extrait.textContent.endsWith('...')) {
                    extrait.textContent += '...'; // Ajoute "..." à l'extrait
                }
                this.textContent = 'Voir plus';
            }
        });
    });
});