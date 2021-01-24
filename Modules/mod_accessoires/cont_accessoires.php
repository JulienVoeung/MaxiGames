<?php

include_once "mod_accessoires.php";
include_once "vue_accessoires.php";

class ContAccessoires{

    private $vue;

    public function __construct(){
		$this -> vue = new VueAccessoires();
    }

    public function contenueAccessoires(){
        $this -> vue -> afficherContenueAccessoires();
    }
}


?>