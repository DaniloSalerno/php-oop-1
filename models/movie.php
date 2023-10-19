<?php

class Movie
{
    public $title;
    public $rating;
    public $language;
    public $year;
    public $genres = [];

    function __construct($_title, $_rating, $_language, $_year, $_genres)
    {
        $this->title = $_title;
        $this->rating = $_rating;
        $this->language = $_language;
        $this->year = $_year;
        array_push($this->genres, $_genres);
    }

    //funzione per aggiungere un nuovo genere
    function addGenres($_genres)
    {
        array_push($this->genres, $_genres);
    }
};
