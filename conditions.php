<?php


$heure = (int)readline("Entrez une heure :");

if (( 9 < $heure && $heure < 12) || (14 < $heure && $heure < 17)) {
  echo "Le magasin est ouvert" ;
} else {
  echo "Le magasin est fermé";
}



/*
$note = readline('Entrez votre note :');

if ($note > 10) {
  echo "Bravo vous avez la moyenne !";
  } elseif ( $note == 10 ) {
    echo "Vous avez juste la moyenne !";
  } else {
  echo "Aïe, vous n'avez pas la moyenne !";
};


$action =readline('Entrez votre action : (1: attaquer, 2: défendre, 3:ne rien faire)');

switch ($action) {
  case 1 :
    echo "J'attaque !";
    break;
  case 2 :
    echo "Je défends !";
    break;
  case 3 :
    echo "Je passe mon tour !";
    break;
  default:
    echo "Commande inconnue";
}
*/