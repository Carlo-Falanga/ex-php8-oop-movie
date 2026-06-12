<?php

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";


$movies = [
    new Movie("Batman", 2022, "Matt Reeves", new Genre("Action"), new Genre("Thriller")),
    new Movie("Inception", 2010, "Christopher Nolan", new Genre("Sci-Fi"), new Genre("Action")),
    new Movie("Parasite", 2019, "Bong Joon-ho", new Genre("Drama"), new Genre("Thriller")),
    new Movie("Spirited Away", 2001, "Hayao Miyazaki", new Genre("Animation"), new Genre("Fantasy")),
];

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
            <?php foreach ($movies as $movie) : ?>
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <p class="card-text">Year: <?php echo $movie->year; ?></p>
                            <p class="card-text">Genre:
                                <?php
                                $genreNames = array_map(fn($genre) => $genre->name, $movie->genres);
                                echo implode(", ", $genreNames);
                                ?>
                            </p>
                            <p class="card-text">Director: <?php echo $movie->director; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
