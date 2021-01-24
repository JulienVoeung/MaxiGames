<?php

include_once "mod_produit.php";
include_once "modele_produit.php";
include_once "vue_produit.php";
include_once "connexion.php";

class ContProduit{

    private $modele;
    private $vue;

    public function __construct(){
        $this -> modele = new ModelesProduit();
		$this -> vue = new VueProduit();
    }

    public function pageProduit($idp){
        $produitinfo = $this -> modele -> getProduitinfo($idp);
        $produitavis = $this -> modele -> getProduitavis($idp);
        $noteproduit = $this -> modele -> getNoteAvisProduit($idp);
        $j = 0;
        $somme = 0;
        $moyenne = 0;
        foreach($noteproduit as $key => $value){
            if($noteproduit[$j]['Note']>0){
                $somme = $somme + $noteproduit[$j]['Note'];
            }
            $j++;
        }
        if($j>0){
            $moyenne = round($somme/$j);
        }
        else{
            $moyenne = 0;
        }
        $this -> vue -> afficherPageProduit($produitinfo,$produitavis,$moyenne);
    }

    public function ajouterAvis($pseudo,$description,$idp,$note,$date){
        $this -> modele -> insertAvis($pseudo,$description,$idp,$note,$date);
    }

    public function ajouterPanier($pseudo, $idp, $nbp){
        $this -> modele -> insertPanier($pseudo, $idp, $nbp);
    }

    public function pagePanier($pseudo){
        $this -> modele -> videPanierProduit();
        $userpanier = $this -> modele -> getUserPanier($pseudo);
        $i = 0;
        foreach($userpanier as $key => $value){
            $a = $this -> modele -> getProduitinfo($userpanier[$i]['idProduit']);
            $this -> modele -> insertpanierproduit($a['IdProduit'], $a['NomProduit'], $a['Image'], $a['Prix'], $pseudo);
            $i++;
        }
        $produitpanierinfo = $this -> modele -> getPanierProduitinfo($pseudo);
        $this -> vue -> afficherPanier($userpanier, $produitpanierinfo);
    }

    public function enleverProduitPanier($idp, $pseudo){
        $this -> modele -> enleverProduitPanier($idp, $pseudo);
    }

    public function supprimerAvis($idavis,$idp){
        $this -> modele -> supprimerAvis($idavis,$idp);
    }

    public function signalerAvis($idavis,$idp){
        $this -> modele -> signalerAvis($idavis,$idp);
    }

    public function updateNoteProduit($idp,$note){
        $this -> modele -> updateNoteProduit($idp,$note);
    }
}


?>