<!DOCTYPE html>
<html>
<head>
    <title>Recherche de livres par pays</title>
</head>
<body>
    <h1>Recherche de livres publiés aux États-Unis</h1>
    <button id="searchButton">Rechercher</button>
    <div id="results"></div>

    <script>
        async function searchBooksByCountry() {
            try {
                const response = await fetch('http://localhost/livres/api.php');
                const data = await response.json();

                const booksInCountry = data.works;
                const resultsContainer = document.getElementById('results');
                resultsContainer.innerHTML = '';

                if (booksInCountry && booksInCountry.length > 0) {
                    resultsContainer.innerHTML = '<h2>Résultats :</h2>';
                    booksInCountry.forEach(book => {
                        const bookTitle = book.title;
                        const coverId = book.cover_id;
                        const coverUrl = `https://covers.openlibrary.org/b/id/${coverId}-L.jpg`;
                        
                        resultsContainer.innerHTML += `
                            <p><strong>${bookTitle}</strong></p>
                            <img src="${coverUrl}" alt="Couverture du livre">
                        `;
                    });
                } else {
                    resultsContainer.innerHTML = 'Aucun livre trouvé pour ce pays.';
                }
            } catch (error) {
                console.error('Erreur lors de la requête API :', error);
            }
        }

        const searchButton = document.getElementById('searchButton');
        searchButton.addEventListener('click', searchBooksByCountry);
    </script>
</body>
</html>
