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

?>