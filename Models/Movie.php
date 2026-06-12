<?php

    require_once "./Traits/Validatable.php";

class Movie {

    use Validatable;

    public $title;
    public $year;
    public $director;
    public $genres;

    public function __construct($_title, $_year, $_director, Genre ...$names)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genres = $names;
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