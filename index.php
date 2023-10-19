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

define('ROOT', __DIR__); // questa creata in index.php puntera' sempre alla cartella base del nostro progetto e sara' piu' facile ragionare su come aggiungere gli altri file da altre cartelle, partendo sempre dalla base (appunto dalla ROOT)

define('DS', DIRECTORY_SEPARATOR); // questa in base al sistema aggiungera' il corretto slash / windows, \ linux

require_once ROOT . DS . 'partials' . DS . 'head.php';
require_once ROOT . DS . 'partials' . DS . 'main.php';
require_once ROOT . DS . 'partials' . DS . 'footer.php';
?>