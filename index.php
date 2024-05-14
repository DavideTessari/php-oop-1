<?php

// Include 
require_once 'Models/movie.php';
require_once 'Models/layout.php';

// Dati dei film
$movies = [
    new Movie("Inception", "Christopher Nolan", 2010, ["Action", "Sci-Fi"]),
    new Movie("The Shawshank Redemption", "Frank Darabont", 1994, ["Drama"]),
];

// Stampa delle informazioni dei film
foreach ($movies as $movie) {
    echo "<h2>{$movie->title}</h2>";
    $movie->printInfo();
}

?>
