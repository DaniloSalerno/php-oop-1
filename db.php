<?php
$movies = [
    new Movie('Matrix', 5, 'Inglese', 1999, 'Fantascienza'),
    new Movie('Avatar', 4, 'Inglese', 2009, 'Fantascienza')
];

//Aggiungiamo un nuovo genere al 'miovie' con indice 0
$movies[0]->addGenres('Action');
