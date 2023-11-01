<?php
header("Access-Control-Allow-Origin: *"); // Autorise toutes les origines (ne pas utiliser en production)

$country = 'united states';
$url = "https://openlibrary.org/subjects/$country.json?subject_type=place";
$response = file_get_contents($url);

echo $response;
?>
