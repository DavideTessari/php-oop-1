<?php

class Movie {
    // Variabili di istanza
    public $title;
    public $director;
    public $year;

     // Costruttore
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

     // Metodo per stampare le informazioni del film
     public function printInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Year: " . $this->year . "<br><br>";
    }
}

// Istanziamento degli oggetti Movie
$movie1 = new Movie("Inception", "Christopher Nolan", 2010);
$movie2 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994);

// Stampa delle informazioni dei film
echo "<h2>Movie 1:</h2>";
$movie1->printInfo();

echo "<h2>Movie 2:</h2>";
$movie2->printInfo();

?>