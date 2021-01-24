<?php

include("connexion.php");
Connexion::init_connexion();

class ModelesTransaction extends Connexion{

	public function __construct(){		

	}

	function inserer_paie($numcarte,$nom,$prenom,$dateexp,$code){
		if(self::verif_champs_remplis2()){

						$sql = 'INSERT INTO paiement (idPaiement, NumCarte, NomCarte, DateExpiration, CodeSecurite, PrenomCarte) VALUES (default, :numcarte, :nom, :dateexp, :code, :prenom)';
						$req = self::$bdd -> prepare($sql);
						$req -> bindParam(':nom', $nom);
						$req -> bindParam(':prenom', $prenom);
						$req -> bindParam(':numcarte', $numcarte);
						$req -> bindParam(':dateexp', $dateexp);
						$req -> bindParam(':code', $code);
						$req -> execute();
		}
		else{
			echo "Les champs doit etre remplis";
		}
	}

	function verif_paiement($numcarte,$nom,$prenom,$dateexp,$code){
		if(self::verif_champs_remplis()){

						$sql = 'SELECT idPaiement from paiement where NumCarte like :numcarte and DateExpiration like :dateexp and CodeSecurite like :code';
						$req = self::$bdd -> prepare($sql);
						$req -> bindParam(':numcarte', $numcarte);
						$req -> bindParam(':dateexp', $dateexp);
						$req -> bindParam(':code', $code);
						$req -> execute();
						$res = $req -> fetch();
						if(!isset($res[0])) {
							return 0;
						}
						else {
							return 1;
						}
		}	
		else{
			echo "Les champs doit etre remplis";
		}
		
	}

	function verif_champs_remplis(){
		if(isset($_POST['formtransaction'])){
			if(!empty($_POST['numcarte']) AND !empty($_POST['nompaie']) AND !empty($_POST['prenompaie']) AND !empty($_POST['dateexp']) AND !empty($_POST['code'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function verif_champs_remplis2(){
		if(isset($_POST['formnewtransaction'])){
			if(!empty($_POST['newnumcarte']) AND !empty($_POST['newnompaie']) AND !empty($_POST['newprenompaie']) AND !empty($_POST['newdateexp']) AND !empty($_POST['newcode'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function getAdresseClient($pseudo){
		$sql = 'SELECT Adresse from client where Username like :pseudo ';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
		$res = $req -> fetch();
		return $res[0];
	}

	function getCommandePanier($pseudo){
		$sql = 'SELECT * from panier where Pseudo like :pseudo ';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
		$res = $req -> fetchAll();
		return $res;
	}

	function insertCommande($adresse,$date,$detail,$pseudo){
		$sql = 'INSERT INTO commande (idCommande, AdresseExpedition, DateCommande, detailCommande, Pseudo) VALUES (default, :adresse, :date, :detail, :pseudo)';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':adresse', $adresse);
		$req -> bindParam(':date', $date);
		$req -> bindParam(':detail', $detail);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
		header("Location: index.php?module=transaction&action=pageConfirmer");
	}

	function getPanierProduitinfo($pseudo){
		$sql = 'SELECT * from panierproduit WHERE Pseudo = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($pseudo));
		$panierproduitinfo = $req -> fetchAll();
		return $panierproduitinfo;
	}

	function viderProduitPanier($pseudo){
		$sql = 'DELETE FROM panier WHERE Pseudo = :pseudo';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
	}

	function getNbProduit($idp){
		$sql = 'SELECT Stock from produit WHERE IdProduit = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($idp));
		$nbp = $req -> fetch();
		return $nbp[0];
	}

	function decrementerStockProduit($idp,$nbp){
		$newnbp = $nbp - 1;
		$sql = 'UPDATE produit SET Stock = :newnbp WHERE IdProduit = :idp';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':newnbp', $newnbp);
		$req -> bindParam(':idp', $idp);
		$req -> execute();
	}
}

?>