<!DOCTYPE html>
<html>
<head>
    <title>Jeux Vidéo Français</title>
</head>
<body>
    <h1>Liste des Jeux Vidéo Français</h1>
    <ul id="jeuxVideoList"></ul>

    <script>
        fetch('get_games.php')
            .then(response => response.json())
            .then(data => {
                const games = data.results;

                // Filtrer les jeux français
                const frenchGames = games.filter(game => {
                    const developers = game.developers ? game.developers.map(dev => dev.name) : [];
                    const publishers = game.publishers ? game.publishers.map(pub => pub.name) : [];
                    return (
                        developers.includes('French') ||
                        publishers.includes('French')
                    );
                });

                // Manipulez les données pour afficher les jeux vidéo français dans votre page HTML
                const jeuxVideoList = document.getElementById('jeuxVideoList');
                frenchGames.forEach(game => {
                    const listItem = document.createElement('li');
                    listItem.textContent = game.name;
                    jeuxVideoList.appendChild(listItem);
                });
            })
            .catch(error => {
                console.error('Une erreur s\'est produite :', error);
            });
    </script>
</body>
</html>
