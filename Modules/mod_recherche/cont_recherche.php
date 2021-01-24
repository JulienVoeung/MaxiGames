<?php

include_once "mod_recherche.php";
include_once "modele_recherche.php";
include_once "vue_recherche.php";
include_once "connexion.php";

class ContRecherche{

    private $modele;
    private $vue;

    public function __construct(){
        $this -> modele = new ModelesRecherche();
		$this -> vue = new VueRecherche();
    }

    public function pageProduitRechercher($recherche){
        $resultat = $this -> modele -> getProduitRechercher($recherche);
        $this -> vue -> afficherPageProduitRecherche($resultat);
    }
}


?>