<?php

require './Personnage/Personnage.php';

$thryndil = new Personnage("Thryndil");

$thryndil -> vie = 30;



$merlin = new Personnage("Merlin");

$merlin -> vie = 0;

$merlin-> regenerer(60);

$merlin-> attaque($thryndil);

if ($thryndil->mort()){
  echo "Thryndil est mort :(";
} else {
  echo "Thryndil a survécu avec $thryndil->vie";
}

var_dump ($thryndil);
var_dump ($merlin);