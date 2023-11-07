   // Fonction pour initialiser la carte
   function initMap() {
    var map = L.map('map').setView([0, 0], 2); // Coordonnées de départ et niveau de zoom initial

    // Utilise une couche de tuiles OpenStreetMap en mode sombre (dark mode)
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 5, // Niveau de zoom maximum de la carte (ajustez la valeur selon vos besoins)
        id: 'mapbox.dark'
    }).addTo(map);

    // Fait une requête à l'API REST COUNTRY pour obtenir la liste des pays
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            data.forEach(country => {
                // Récupère les coordonnées géographiques du pays
                const lat = country.latlng[0];
                const lon = country.latlng[1];

                if (lat && lon) {
                    // Crée un marqueur personnalisé pour chaque pays
                    const marker = L.marker([lat, lon]).addTo(map);

                    // Crée un lien de redirection pour chaque pays
                    const link = `pays.html?country=${country.cca2}`;

                    // Ajoute un événement de clic au marqueur pour rediriger l'utilisateur
                    marker.on('click', function() {
                        window.location = link;
                    });
                }
            });
        })
        .catch(error => {
            console.error('Erreur lors de la récupération des données des pays', error);
        });
}

// Appelle la fonction d'initialisation de la carte lorsque la page est prête
document.addEventListener('DOMContentLoaded', initMap);