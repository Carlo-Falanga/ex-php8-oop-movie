<?php

class Movie
{
    public $title;
    public $year;
    public $director;
    public $genre;

    public function __construct($_title, $_year, $_director, Genre $name)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genre = $name;
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