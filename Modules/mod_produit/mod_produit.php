<?php

include_once "cont_produit.php";

class ModProduit{

    private $contProduit;

    public function __construct(){

        $this -> contProduit = new ContProduit();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {

        case 'enleverproduitpanier':
            if(isset($_SESSION['Pseudo'])){
                if(isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                    $pseudo = $_SESSION['Pseudo'];
                    $this -> contProduit -> enleverProduitPanier($idp, $pseudo);;
                }
                else{
                    echo "rien";
                }
            }
            else{
                header("Location: index.php");
            }
            break;
        case 'monPanier':
            if(isset($_SESSION['Pseudo'])){
                $pseudo = $_SESSION['Pseudo'];
                $this -> contProduit -> pagePanier($pseudo);
            }
            else{
                echo "Connectez vous pour commander";
            }
            break;
        case 'produit':
            if(isset($_GET['idp'])){
                $idp = $_GET['idp'];
                $this -> contProduit -> pageProduit($idp);
            }
            else{
                echo "Impossible d'afficher la page produit";
            }
            break;
        case 'ajouterPanier':
            if(isset($_SESSION['Pseudo'])){
                if(isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                    $pseudo = $_SESSION['Pseudo'];
                    $nbp = 1;
                    $this -> contProduit -> ajouterPanier($pseudo, $idp, $nbp);
                }
                else{
                    echo "rien";
                }
            }
            else{
                header("Connectez vous pour commander");
            }
            break;
        case 'ajouterAvis':
            if(isset($_SESSION['Pseudo'])){
                if(isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                    $pseudo = $_SESSION['Pseudo'];
                    $note = htmlspecialchars($_POST['note']);
                    $description = htmlspecialchars($_POST['descriptionavis']);
                    $date = date('Y-m-d');
                    $this -> contProduit -> ajouterAvis($pseudo,$description,$idp,$note,$date);
                }
                else{
                    echo "rien";
                }
            }
            else{
                if(isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                    header("Location: index.php?module=produit&action=produit&idp=$idp&err=Connectez vous pour poster un avis");
                }
            }
            break;
        case 'supprimerAvis':
            if(isset($_GET['idavis'])){
                $idavis = $_GET['idavis'];
                if(isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                    $this -> contProduit -> supprimerAvis($idavis,$idp);
                }
            }
            else{
                echo 'impossible';
            }
            break;
        case 'signalerAvis':
            if(isset($_GET['idavis'])){
                $idavis = $_GET['idavis'];
                if(isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                    $this -> contProduit -> signalerAvis($idavis,$idp);
                }
            }
            else{
                echo 'impossible';
            }
            break;
        default:
            echo "Impossible d'afficher la page produit";
            break;
        }
    }
}


?>