<?php

include_once "cont_jeux.php";

class ModJeux{

    private $contJeux;

    public function __construct(){

        $this -> contJeux = new ContJeux();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
        case 'jeux1':
            $this -> contJeux -> contenueJeux1();
            break;
        case 'jeux2':
            $this -> contJeux -> contenueJeux2();
            break;
        case 'jeux3':
            $this -> contJeux -> contenueJeux3();
            break;
        case 'jeux4':
            $this -> contJeux -> contenueJeux4();
            break;
        default:
            $this -> contJeux -> contenueJeux1();
            break;
        }
    }
}


?>