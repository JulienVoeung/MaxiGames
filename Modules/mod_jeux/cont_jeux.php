<?php

include_once "mod_jeux.php";
include_once "vue_jeux.php";
include_once "connexion.php";

class ContJeux{

  private $vue;

  public function __construct(){
	$this -> vue = new VueJeux();
  }

  public function contenueJeux1(){
   $this -> vue -> afficherContenueJeux1();
  }

  public function contenueJeux2(){
    $this -> vue -> afficherContenueJeux2();
  }

  public function contenueJeux3(){
   $this -> vue -> afficherContenueJeux3();
  }

  public function contenueJeux4(){
    $this -> vue -> afficherContenueJeux4();
   }
}


?>