<?php

include_once "cont_consoles.php";

class ModConsoles{

    private $contConsoles;

    public function __construct(){

        $this -> contConsoles = new ContConsoles();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
        default:
            $this -> contConsoles -> contenueConsoles();
            break;
        }
    }
}


?>