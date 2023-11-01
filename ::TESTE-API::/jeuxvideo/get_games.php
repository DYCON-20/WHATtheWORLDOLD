<?php
header('Content-Type: application/json');

$apiKey = '7160c50c3c41433d9c4aca8299897dd4'; // Remplacez par votre propre clé d'API RAWG
$apiUrl = 'https://api.rawg.io/api/games';

// Paramètres de la requête
$params = [
    'key' => $apiKey,
    'region' => 'FR', // Filtrez par région "France" en utilisant le code ISO FR
];

// Créez l'URL de la requête en ajoutant les paramètres
$url = $apiUrl . '?' . http_build_query($params);

// Effectuez la requête
$response = file_get_contents($url);

echo $response;
?>
