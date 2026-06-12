<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    public function __construct($_title, $_genre, $_year, $_director)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function setYear($year)
    {
        if ($year >= 1900) {
            $this -> year = $year;
        } else {
            echo "Invalid Year";
        }
    }
}

$movie = new Movie("Batman", "Action", 2022, "Matt Reeves");


$movie -> setYear(2010);

var_dump($movie);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP - Movie</title>
</head>

<body>

</body>

</html>