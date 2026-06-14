<?php

    require_once "./Traits/Validatable.php";
    require_once "./Models/Genre.php";

class Movie {

    use Validatable;

    public $title;
    public $year;
    public $director;
    public $genres;

    public function __construct($_title, $_year, $_director, Genre ...$genres)
    {
        $this->title = $this->validateNotEmpty($_title) ? $_title : "Senza titolo";
        $this->setYear($_year);
        $this->director = $this->validateNotEmpty($_director) ? $_director : "Sconosciuto";
        $this->genres = $genres;
    }

    public function setYear($year)
    {
        if ($this->validateYear($year)) {
            $this->year = $year;
        } else {
            echo "Invalid Year";
        }
    }
}