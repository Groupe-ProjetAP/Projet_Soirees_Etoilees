document.addEventListener('DOMContentLoaded', function () {
    // Écouter les clics sur le lien "Voir plus"
    document.querySelectorAll('.show-more').forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            var fullText = event.target.getAttribute('data-info');

            // Créer la popup et l'afficher
            var popupOverlay = document.createElement('div');
            popupOverlay.classList.add('popup-overlay');
            document.body.appendChild(popupOverlay);

            var popup = document.createElement('div');
            popup.classList.add('popup');
            popup.innerHTML = '<p>' + fullText + '</p><button id="close-popup">Fermer</button>';
            document.body.appendChild(popup);

            // Fermer la popup
            document.getElementById('close-popup').addEventListener('click', function () {
                popup.remove();
                popupOverlay.remove();
            });

            // Afficher la popup
            popupOverlay.style.display = 'block';
            popup.style.display = 'block';
        });
    });
});
