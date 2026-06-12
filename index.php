<?php

class Movie
{
    public $title;
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
            $this->year = $year;
        } else {
            echo "Invalid Year";
        }
    }
}

$movie = new Movie("Batman", "Action", 2022, "Matt Reeves");


$movie->setYear(2010);

var_dump($movie);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP - Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Movies</h1>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                        <p class="card-text">Year: <?php echo $movie->year; ?></p>
                        <p class="card-text">Director: <?php echo $movie->director; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>