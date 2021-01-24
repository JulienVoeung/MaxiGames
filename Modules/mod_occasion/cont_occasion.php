<?php

include_once "mod_occasion.php";
include_once "vue_occasion.php";

class ContOccasion{

    private $vue;

    public function __construct(){
		$this -> vue = new VueOccasion();
    }

    public function contenueOccasion(){
        $this -> vue -> afficherContenueOccasion();
    }
}


?>