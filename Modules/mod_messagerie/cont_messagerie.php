<?php

include_once "mod_messagerie.php";
include_once "modele_messagerie.php";
include_once "vue_messagerie.php";
include_once "connexion.php";

class ContMessagerie{

    private $modele;
    private $vue;

    public function __construct(){
        $this -> modele = new ModelesMessagerie();
		$this -> vue = new VueMessagerie();
    }

    public function pageMessagerie($pseudo,$contact){
        $messages = $this -> modele -> getMessageClient($pseudo,$contact);
        $this -> vue -> afficherPageMessagerie($messages);
    }

    public function posterMessage($pseudoClient,$pseudoAdmin,$message){
        $this -> modele -> ajouterMessage($pseudoClient,$pseudoAdmin,$message);
    }

    public function getMessagesClient($pseudo,$admin){
        $messages = $this -> modele -> getMessageClient($pseudo,$admin);
        echo json_encode($messages);
    }

}


?>