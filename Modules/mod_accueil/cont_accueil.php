<?php

include_once "mod_accueil.php";
include_once "vue_accueil.php";
include_once "connexion.php";

class ContAccueil{

    private $vue;

    public function __construct(){
		$this -> vue = new VueAccueil();
    }

    public function contenueAccueil(){
        $this -> vue -> afficherContenueAccueil();
    }
}


?>