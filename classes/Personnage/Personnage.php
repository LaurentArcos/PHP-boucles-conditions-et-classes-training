<?php

class Personnage {

  public $vie = 80;

  public $attack = 20;

  public $nom;

  public function __construct($nom) {

    $this->nom = $nom;
    
  }
  public function crier(){
    echo "Leeeroy JEEEENKIINS !!";
  }

  public function regenerer($heal = null){
    if (is_null($heal)) {
    $this->vie = 100;
  } else {
    $this->vie = $this-> vie += $heal;
  }
  }

  public function mort(){

    return $this->vie <= 0;

  }

  public function attaque($cible){
    $cible->vie -= $this->attack;
  }


}