<?php

include_once "cont_messagerie.php";

class ModMessagerie{

    private $contMessagerie;

    public function __construct(){

        $this -> contMessagerie = new ContMessagerie();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) { 
        case 'pageMessagerie':
            if(isset($_SESSION['Admin'])){
                if($_SESSION['Admin'] == 1){
                    $pseudo = $_SESSION['Pseudo'];
                    $contact = "cr7";
                    $this -> contMessagerie -> pageMessagerie($pseudo,$contact);
                }
                else if($_SESSION['Admin'] == 0){
                    $pseudo = $_SESSION['Pseudo'];
                    $contact = "admin";
                    $this -> contMessagerie -> pageMessagerie($pseudo,$contact);
                }
            }else{
                "impossible";
            }
            break;
        case 'posterMessage':
            if(isset($_SESSION['Pseudo'])){
                $pseudoClient = $_SESSION['Pseudo'];
                $pseudoAdmin = "admin";
                $message = htmlspecialchars($_POST['message']);
                $this -> contMessagerie -> posterMessage($pseudoClient,$pseudoAdmin,$message);
            }
            else{
                echo "Connectez vous pour accéder à la messagerie";
            }
            break;
        case 'lesMessages':
            $this -> contMessagerie -> getMessagesClient($pseudo);
            break;
        default:
            echo "non";
            break;
        }
    }
}


?>