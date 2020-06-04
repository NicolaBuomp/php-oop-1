<?php

class Movie {
    public $title;
    public $genre;
    public $director;
    public $date;

    public function __construct($_title, $_genre, $_director, $_date) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->date = $_date;
    }

    public function show() {
        echo "<br>Title: {$this->title}";
        echo "<br>Genre: {$this->genre}";
        echo "<br>Director: {$this->director}";
        echo "<br>Date : {$this->date}";
        echo "<br>";
    }
}


$movie1 = new Movie('Harry Potter - La pietra filosofale', 'science-fiction', 'Warner Bros', '2001');
$movie2 = new Movie('Harry Potter - La Camera dei segreti', 'science-fiction', 'Warner Bros', '2002');
$movie3 = new Movie('Harry Potter - Il prigioniero di Azkaban', 'science-fiction', 'Warner Bros', '2004');
$movie4 = new Movie('Harry Potter - Il calice di fuoco', 'science-fiction', 'Warner Bros', '2005');
$movie5 = new Movie("Harry Potter - L'Ordine della fenice", 'science-fiction', 'Warner Bros' , '2007');
$movie6 = new Movie('Harry Potter - Il principe mezzosangue', 'science-fiction', 'Warner Bros', '2009');
$movie7 = new Movie('Harry Potter - I doni della morte Parte 1', 'science-fiction', 'Warner Bros', '2010');
$movie8 = new Movie('Harry Potter - I doni della morte Parte 2', 'science-fiction', 'Warner Bros', '2011');

$movie1 -> show();
$movie2 -> show();
$movie3 -> show();
$movie4 -> show();
$movie5 -> show();
$movie6 -> show();
$movie7 -> show();
$movie8 -> show();