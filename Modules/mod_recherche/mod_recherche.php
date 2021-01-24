<?php

include_once "cont_recherche.php";

class ModRecherche{

    private $contRecherche;

    public function __construct(){

        $this -> contRecherche = new ContRecherche();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {  
        default:
            if(isset($_POST['formRecherche'])){
                if(!empty($_POST['rechercher'])){
                    $recherche = htmlspecialchars($_POST['rechercher']);
                    $this -> contRecherche -> pageProduitRechercher($recherche);
                }
                else{
                    header("Location: index.php");
                }
            }
            break;
        }
    }
}


?>