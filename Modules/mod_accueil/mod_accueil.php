<?php

include_once "cont_accueil.php";

class ModAccueil{

    private $contAccueil;

    public function __construct(){

        $this -> contAccueil = new ContAccueil();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
        default:
            $this -> contAccueil -> contenueAccueil();
            break;
        }
    }
}


?>