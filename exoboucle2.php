<?php

$creneaux = [];

while (true) {
  $ouverture = (int)readline("Heure d'ouverture du magasin :");
  $fermeture = (int)readline("Heure de fermeture du magasin :"); 
  if ($ouverture > $fermeture) {
    echo "Le créneau ne peut pas être enregistré car l'heure de début $ouverture h est supérieure à l'heure de fermeture $fermeture h";
  } else {
    $creneaux[] = [$ouverture, $fermeture];
    $action = readline('Voulez-vous enregistrer un nouveau créneau (o/n)');
    if ($action === "n"){
      break;
    }
  }
}

echo "Le magasin est ouvert de : \n";
foreach( $creneaux as $key => $creneau) {
  if ($key > 0) {
    echo 'et de';
  }
  echo "- $creneau[0] h à $creneau[1] h \n";
}


/*
$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ?");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
  if ($heure > $creneau[0] && $heure <= $creneau[1]){
    $creneauTrouve = true ;
    break ;
  }
}

if ($creneauTrouve) {
  echo "Le magasin sera ouvert !";
} else {
  echo "Désolé le magasin sera fermé !";
}
*/