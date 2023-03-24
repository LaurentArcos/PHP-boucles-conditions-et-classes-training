<?php

$notes = [10, 15, 16];

$eleves = [
  'cm2' => ['Jean', 'Jules', 'Simon', 'Jacques'],
  'cm1' => ['Marc', 'Emma', 'Sarah', 'Thibault']
];

foreach ($notes as $note) {
  echo "Voici la note : $note \n";
}

// foreach ($eleves as $key => $eleve) {
//   echo "Voici $eleve qui est en $key \n";
// }

foreach ($eleves as $classe =>$listEleves) {
  echo "La Classe $classe : \n";
  foreach ($listEleves as $eleve) {
    echo "- $eleve\n";
  }
  echo "\n";
} 


// for ($i = 0; $i < 3; $i++) {
//   echo "Voici une note : $notes[$i] \n";
// }


