<?php

include("connexion.php");
Connexion::init_connexion();

class ModelesMessagerie extends Connexion{

	public function __construct(){		

	}

    function getPseudoAdmin(){
        $sql = 'SELECT Username from client WHERE Admin = true ORDER BY RAND()';
		$req = self::$bdd -> prepare($sql);
        $req -> execute();
        $pseudoAdmin = $req -> fetch();
        return $pseudoAdmin[0];
    }

    function ajouterMessage($pseudoClient,$pseudoAdmin,$message){
        if(isset($_POST['formMessagerie'])){
			if(!empty($_POST['message'])){
                $sql = 'INSERT INTO message (idMessage, Message, Retour, PseudoClient, PseudoAdmin, Date) VALUES (default, :message, false, :pseudoClient, :pseudoAdmin, default)';
                $req = self::$bdd -> prepare($sql);
                $req -> bindParam(':pseudoClient', $pseudoClient);
                $req -> bindParam(':pseudoAdmin', $pseudoAdmin);
                $req -> bindParam(':message', $message);
                $req -> execute();
                //header("Location: index.php?module=messagerie&action=pageMessagerie");
                echo json_encode(["status" => "success"]);
            }
            else{
                echo "Champs vide";
            }
        }
    }

    function getMessageClient($pseudo,$admin){
        $sql = 'SELECT * from message WHERE PseudoClient = :pseudo AND PseudoAdmin = :contact';
        $req = self::$bdd -> prepare($sql);
        $req -> bindParam(':pseudo', $pseudo);
		$req -> bindParam(':contact', $contact);
        $req -> execute();
        $messages = $req -> fetchAll();
        return $messages;
    }
    

}

?>