<?php

include("connexion.php");
Connexion::init_connexion();

class ModelesRecherche extends Connexion{

	public function __construct(){		

	}

	function getProduitRechercher($recherche){
        $sql = 'SELECT * from produit WHERE NomProduit LIKE ?';
        $req = self::$bdd -> prepare($sql);
        $req -> execute(array("%".$recherche."%"));
        $nbproduit = $req -> fetchAll();
        return $nbproduit;
	}

}

?>