<?php

include("connexion.php");
Connexion::init_connexion();

class ModelesProduit extends Connexion{

    public function __construct(){
        
    }

    function getProduitinfo($idp){
		$sql = 'SELECT * from produit WHERE IdProduit = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($idp));
		$produitinfo = $req -> fetch();
		return $produitinfo;
	}

	function getProduitavis($idp){
		$sql = 'SELECT * from avis WHERE idProduit = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($idp));
		$produitavis = $req -> fetchAll();
		return $produitavis;
	}

	function getUserPanier($pseudo){
		$sql = 'SELECT * from panier WHERE Pseudo = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($pseudo));
		$userpanier = $req -> fetchAll();
		return $userpanier;
	}

	function getPanierProduitinfo($pseudo){
		$sql = 'SELECT * from panierproduit WHERE Pseudo = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($pseudo));
		$panierproduitinfo = $req -> fetchAll();
		return $panierproduitinfo;
	}

	function videPanierProduit(){
		$sql = 'TRUNCATE TABLE panierproduit';
		$req = self::$bdd -> prepare($sql);
		$req -> execute();
	}

	function enleverProduitPanier($idp, $pseudo){
		$sql = 'DELETE FROM panier WHERE idProduit = :idp AND Pseudo = :pseudo';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':idp', $idp);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
		header("Location: index.php?module=produit&action=monPanier");
	}

	function insertpanierproduit($idp,$nomp,$imgp,$prixp,$pseudo){
		$sql = 'INSERT INTO panierproduit (idpanierproduit, nomProduit, imgProduit, prixProduit, idProduit, Pseudo) VALUES (default, :nomp, :imgp, :prixp, :idp, :pseudo)';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':idp', $idp);
		$req -> bindParam(':nomp', $nomp);
		$req -> bindParam(':imgp', $imgp);
		$req -> bindParam(':prixp', $prixp);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
	}

	function insertAvis($pseudo,$description,$idp,$note,$date){
		if(self::verif_champs_remplis()){
			$sql = 'INSERT INTO avis (idAvis, DescriptionAvis, PseudoAvis, idProduit, Ping, Note, Date) VALUES (default, :descriptiona, :pseudo, :idp, default,:note, :dateCom)';
			$req = self::$bdd -> prepare($sql);
			$req -> bindParam(':pseudo', $pseudo);
			$req -> bindParam(':descriptiona', $description);
			$req -> bindParam(':idp', $idp);
			$req -> bindParam(':note', $note);
			$req -> bindParam(':dateCom', $date);
			$req -> execute();
			header("Location: index.php?module=produit&action=produit&idp=$idp");
		}
		else{
			echo "Les champs doivent être remplis";
		}
	}

	function insertPanier($pseudo, $idp, $nbp){
		if(!self::verif_panierexisteproduit($pseudo, $idp)){
			$sql = 'INSERT INTO panier (idPanier, NombreProduit, idProduit, Pseudo) VALUES (default, :nbp, :idp, :pseudo)';
			$req = self::$bdd -> prepare($sql);
			$req -> bindParam(':pseudo', $pseudo);
			$req -> bindParam(':idp', $idp);
			$req -> bindParam(':nbp', $nbp);
			$req -> execute();
			header("Location: index.php?module=produit&action=produit&idp=$idp");
		}
		else{
			$newnbp = self::getNbpPanier($pseudo, $idp);
			echo $newnbp;
			$newnbp = $newnbp + $nbp;
			$sql = 'UPDATE panier SET NombreProduit = :newnbp WHERE Pseudo = :pseudo AND idProduit = :idp';
			$req = self::$bdd -> prepare($sql);
			$req -> bindParam(':pseudo', $pseudo);
			$req -> bindParam(':idp', $idp);
			$req -> bindParam(':newnbp', $newnbp);
			$req -> execute();
			header("Location: index.php?module=produit&action=produit&idp=$idp");
		}
	}
	
	function verif_panierexisteproduit($pseudo, $idp){
		$sql = 'SELECT idPanier from panier where Pseudo like :pseudo and idProduit like :idp';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> bindParam(':idp', $idp);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function getNbpPanier($pseudo, $idp){
		$sql = 'SELECT NombreProduit from panier WHERE idProduit LIKE :idp AND Pseudo LIKE :pseudo';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> bindParam(':idp', $idp);
		$req -> execute();
		$nbproduit = $req -> fetch();
		return $nbproduit[0];
	}

	function verif_champs_remplis(){
		if(isset($_POST['formavis'])){
			if(!empty($_POST['descriptionavis'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function supprimerAvis($idavis,$idp){
		$sql = 'DELETE FROM avis WHERE idAvis = :idavis';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':idavis', $idavis);
		$req -> execute();
		header("Location: index.php?module=produit&action=produit&idp=$idp");
	}

	function signalerAvis($idavis,$idp){
		$sql = 'UPDATE avis SET Ping = true WHERE idAvis = :idavis';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':idavis', $idavis);
		$req -> execute();
		header("Location: index.php?module=produit&action=produit&idp=$idp");
	}

	function updateNoteProduit($idp,$note){
		$sql = 'UPDATE produit SET Note = :note WHERE IdProduit = :idp';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':note', $note);
		$req -> bindParam(':idp', $idp);
		$req -> execute();
		header("Location: index.php?module=produit&action=produit&idp=$idp");
	}

	function getNoteAvisProduit($idp){
		$sql = 'SELECT Note from avis WHERE idProduit LIKE :idp';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':idp', $idp);
		$req -> execute();
		$noteProduit = $req -> fetchAll();
		return $noteProduit;
	}
}


?>