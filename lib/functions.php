<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		// le reste du code
		include "../pages/" . $_GET["page"].".php";

	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}


function getUserData(){
	$jsonFile = '../data/user.json';
	$jsonData = file_get_contents($jsonFile);
	$result = json_decode($jsonData,true);
	$trad = implode(" ", $result);
	echo $trad;

}