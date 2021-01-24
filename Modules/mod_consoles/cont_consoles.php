<?php

include_once "mod_consoles.php";
include_once "vue_consoles.php";

class ContConsoles{

    private $vue;

    public function __construct(){
		$this -> vue = new VueConsoles();
    }

    public function contenueConsoles(){
        $this -> vue -> afficherContenueConsoles();
    }
}


?>