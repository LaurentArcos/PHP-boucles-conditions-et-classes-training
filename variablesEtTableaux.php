<?php

$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$noteMoyenne = (($note1 + $note2)/2);
echo "Bonjour $prenom, vous avez eu $noteMoyenne de moyenne \n";



$notes = [10,20,10,12,9,'absent'];
echo "$notes[1] \n";
echo "$notes[4] \n";
echo "$notes[5] \n";


$eleve = ['Marc', 'Doe', [10,20,13]];
echo $eleve[2][2];


$eleve2 = [
  'nom'=> 'Doe', 
  'prenom'=> 'Marc', 
  'notes'=>[10,20,15]];
echo $eleve2['nom'].' '.$eleve2['prenom'];

$eleve2['prenom'] = 'Jean';
echo $eleve2['nom'].' '.$eleve2['prenom'];

$eleve2['notes'][3] = 16;
$eleve2['notes'][] = 17;
$eleve2['notes'][] = 18;
$eleve2['notes'][] = 19;
$eleve2['notes'][] = 20;

$eleve2[] = 'CM2-A';


print_r($eleve2['notes']);

print_r ($eleve2);


$classe = [
  [
    'nom'=> 'Doe', 
    'prenom'=> 'Marc', 
    'note'=>[16,20,18],
  ],
  [
    'nom'=> 'Test', 
    'prenom'=> 'Jean', 
    'note'=>[5,8,11],
  ],
];
echo $classe[1]['note'][1];