<?php

class Movie
{
    public $title;
    public $rating;
    public $language;
    public $year;

    function __construct($_title, $_rating, $_language, $_year)
    {
        $this->title = $_title;
        $this->rating = $_rating;
        $this->language = $_language;
        $this->year = $_year;
    }
};

$matrix = new Movie('Matrix', 5, 'Inglese', 1999);
$avatar = new Movie('Avatar', 4, 'Inglese', 2009);
var_dump($matrix);
var_dump($avatar);
