<?php
/* on affiche  les erreurs, 
si vous avez une erreur 500, 
regardez dans votre console */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* nous verrons plus tard comment se passer de ces 3 lignes */


// on inclue le fichier qui contient nos fonctions
require __DIR__ . '/../lib/functions.php';

// l'exemple avec le header, à vous de jouer pour le reste

getPart('menu');
getPart('header');
getContent();
getUserData();
getPart('footer');

