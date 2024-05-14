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

?>