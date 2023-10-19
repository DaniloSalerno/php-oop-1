<!--
create un file index.php in cui:

è definita una classe ‘Movie’ 
=> all’interno della classe sono dichiarate delle variabili d’istanza 
=> all’interno della classe è definito un costruttore 
=> all’interno della classe è definito almeno un metodo

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. 

Possiamo ad esempio organizzare il codice creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php

mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/ 

organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.  -->

<?php

include './models/movie.php';
include './db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <?php foreach ($movies as $movie) : ?>

                <div class="col">

                    <div class="card">

                        <div class="card-body">
                            <h4>Titolo: <?= $movie->title ?> </h4>
                            <div>Voto: <?= $movie->rating ?> </div>
                            <div>Lingua: <?= $movie->language ?> </div>
                            <div>Anno: <?= $movie->year ?> </div>
                            <div>
                                <span>Generi:</span>
                                <ul>
                                    <?php foreach ($movie->genres as $genre) : ?>
                                        <li> <?= $genre ?> </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->

            <?php endforeach ?>

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container -->



</body>

</html>