<?php

include_once "cont_transaction.php";

class ModTransaction{

    private $contTransaction;

    public function __construct(){

        $this -> contTransaction = new ContTransaction();

        if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
        case 'validepaie':
            $prenom = htmlspecialchars($_POST['prenompaie']);
            $nom = htmlspecialchars($_POST['nompaie']);
            $dateexp = htmlspecialchars($_POST['dateexp']);
            $numcarte = hash('sha256', $_POST['numcarte']);
            $code = hash('sha256', $_POST['code']);
            $retour = $this -> contTransaction -> verifPaie($numcarte,$nom,$prenom,$dateexp,$code);
            if($retour == 1){
                $adresse = $this -> contTransaction -> getAdresseClient($_SESSION['Pseudo']);
                $date = date('Y-m-d');
                $detail = $this -> contTransaction -> getCommandeProduit($_SESSION['Pseudo']);
                $panier = $this -> contTransaction -> getCommandePanier($_SESSION['Pseudo']);
                $pseudo = $_SESSION['Pseudo'];
                $i = 0;
                $string = "";
                $Tot = 0;
                foreach($detail as $key => $value){
                    $compteur = $panier[$i]['NombreProduit'];
                    $actuel = $this -> contTransaction -> getNbProduit($detail[$i]['idProduit']);
                    while($compteur > 0){
                        $this -> contTransaction -> decrementerStockProduit($detail[$i]['idProduit']);
                        $stop = $this -> contTransaction -> getNbProduit($detail[$i]['idProduit']);
                        if($stop == 0){
                            $compteur == 0;
                        }
                        $compteur--;
                    }
                    $sousTot = $panier[$i]['NombreProduit']*$detail[$i]['prixProduit'];
                    $Tot = $Tot + $sousTot;
                    if($stop == 0){
                        $string .= $actuel. " x ".$detail[$i]['nomProduit']. " : ". $sousTot . "<br/>";
                    }else{
                        $string .= $panier[$i]['NombreProduit']. " x ".$detail[$i]['nomProduit']. " : ". $sousTot . "<br/>";
                    }
                    $i++;
                }
                if($Tot < 50){
                    $Tot = $Tot + 9.99;
                }
                $string = $string . "TOTAL : " . $Tot;
                $this -> contTransaction -> viderPanier($_SESSION['Pseudo']);
                $this -> contTransaction -> insererCommande($adresse,$date,$string,$pseudo);
            }
            else{
                $this -> contTransaction -> PageErreur();
            }
            break;
        case 'formpaie':
            $this -> contTransaction -> formPaie();
            break;
        case 'formnewpaie':
            $this -> contTransaction -> formnewPaie();
            break;
        case 'ajouternewpaie':
            $prenom = htmlspecialchars($_POST['newprenompaie']);
            $nom = htmlspecialchars($_POST['newnompaie']);
            $dateexp = htmlspecialchars($_POST['newdateexp']);
            $numcarte = hash('sha256', $_POST['newnumcarte']);
            $code = hash('sha256', $_POST['newcode']);
            $this -> contTransaction -> insererPaie($numcarte,$nom,$prenom,$dateexp,$code);
            break;
        case 'pageLivraison':
            $this -> contTransaction -> PageLivraison();
            break;
        case 'pageConfirmer':
            $this -> contTransaction -> PageConfirmer();
            break;
        case 'pageErreur':
            $this -> contTransaction -> PageErreur();
            break;
        default:
            $this -> contTransaction -> formnewPaie();
            break;
        }
    }
}


?>