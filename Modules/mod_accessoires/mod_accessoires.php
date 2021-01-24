<?php

include_once "cont_accessoires.php";

class ModAccessoires{

    private $contAccessoires;

    public function __construct(){

        $this -> contAccessoires = new ContAccessoires();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
        default:
            $this -> contAccessoires -> contenueAccessoires();
            break;
        }
    }
}


?>