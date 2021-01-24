<?php

include_once "cont_occasion.php";

class ModOccasion{

    private $contOccasion;

    public function __construct(){

        $this -> contOccasion = new ContOccasion();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
        default:
            $this -> contOccasion -> contenueOccasion();
            break;
        }
    }
}


?>