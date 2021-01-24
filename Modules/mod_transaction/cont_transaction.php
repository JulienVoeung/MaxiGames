<?php

include_once "mod_transaction.php";
include_once "modele_transaction.php";
include_once "vue_transaction.php";
include_once "connexion.php";

class ContTransaction{

    private $modele;
    private $vue;

    public function __construct(){
        $this -> modele = new ModelesTransaction();
		$this -> vue = new VueTransaction();
    }

    public function formPaie(){
        $this -> vue -> afficherFormulairePaiement();
    }

    public function formnewPaie(){
        $this -> vue -> afficherFormInsererPaie();
    }

    public function verifPaie($numcarte,$nom,$prenom,$dateexp,$code){
        $retour = $this -> modele -> verif_paiement($numcarte,$nom,$prenom,$dateexp,$code);
        return $retour;
    }

    public function insererPaie($numcarte,$nom,$prenom,$dateexp,$code){
        $this -> modele -> inserer_paie($numcarte,$nom,$prenom,$dateexp,$code);
    }

    public function insererCommande($adresse,$date,$detail,$pseudo){
        $this -> modele -> insertCommande($adresse,$date,$detail,$pseudo);
    }

    public function getAdresseClient($pseudo){
        return $this -> modele -> getAdresseClient($pseudo);
    }

    public function getCommandePanier($pseudo){
        return $this -> modele -> getCommandePanier($pseudo);
    }

    public function PageLivraison(){
        $this -> vue -> afficherLivraison();
    }

    public function getCommandeProduit($pseudo){
        return $this -> modele -> getPanierProduitinfo($pseudo);
    }

    public function getNbProduit($idp){
        $nbp = $this -> modele -> getNbProduit($idp);
        return $nbp;
    }

    public function decrementerStockProduit($idp){
        $nbp = $this -> modele -> getNbProduit($idp);
        if($nbp > 0){
            $this -> modele -> decrementerStockProduit($idp,$nbp);
        }
    }

    public function viderPanier($pseudo){
        $this -> modele -> viderProduitPanier($pseudo);
    }

    public function PageConfirmer(){
        $this -> vue -> afficherPageValider();
    }

    public function PageErreur(){
        $this -> vue -> afficherPageInvalide();
    }
}


?>