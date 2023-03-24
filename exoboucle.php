<?php


$notes = [];
$action = null;

while ($action !== "fin") {
  $action = readline("Entrez une nouvelle note (ou 'fin' pour terminer la saisie) :");
  if ($action !== 'fin') {
    $notes[] = (int)$action;
  }
}

foreach ($notes as $note) {
  echo "- $note\n";
}

/*
while (true) {
  $action = readline("Entrez une nouvelle note (ou 'fin' pour terminer la saisie) :");
if ($action === 'fin') {
    break;
} else {
    $notes[] = (int)$action;
  }
}

foreach ($notes as $note) {
  echo "- $note\n";
}
*/