<?php
$movies = [
    new Movie('Matrix', 5, 'Inglese', 1999, 'Fantascienza'),
    new Movie('Avatar', 4, 'Inglese', 2009, 'Fantascienza'),
    //preferisco le serie tv
    new Movie('Breaking Bad', 5, 'Inglese', 2008, 'Drammatica'),
    new Movie('Game of Thrones', 4, 'Inglese', 2011, 'Fantasy'),
    new Movie('The Big Bang Theory', 4, 'Inglese', 2007, 'Commedia'),
    new Movie('Better Call Saul', 5, 'Inglese', 2015, 'Drammatica'),

];

//Aggiungiamo un nuovo genere al 'miovie' con indice 0
$movies[0]->addGenres('Action');
