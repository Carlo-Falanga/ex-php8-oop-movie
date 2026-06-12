<?php

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";


$movie = new Movie("Batman", 2022, "Matt Reeves", new Genre("Action"));


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
                        <p class="card-text">Genre: <?php echo $movie->genre->name; ?></p>
                        <p class="card-text">Director: <?php echo $movie->director; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>