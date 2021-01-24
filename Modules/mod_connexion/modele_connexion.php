<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include("connexion.php");
Connexion::init_connexion();

class ModelesConnexion extends Connexion{

	public function __construct(){		
		
	}

	function inserer_BD($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel){
		if(self::verif_champs_remplis()){

			if(self::verif_long_pseudo($pseudo)){

				if(!self::verif_unicite_identifiant($pseudo)){
					
					if(self::verif_mail_valide($mailo)){

						if(!self::verif_unicite_mail($mailo)){

							$sql = 'INSERT INTO client (IdClient, NomClient, PrenomClient, Email, Adresse, Telephone, Username, Mdp, Admin, Ban) VALUES (default, :nom, :prenom, :maila, :adresse, :tel, :login, :mdp, default, default)';
							$req = self::$bdd -> prepare($sql);
							$req -> bindParam(':nom', $nom);
							$req -> bindParam(':prenom', $prenom);
							$req -> bindParam(':adresse', $adresse);
							$req -> bindParam(':tel', $tel);
							$req -> bindParam(':login', $pseudo);
							$req -> bindParam(':mdp', $mdp);
							$req -> bindParam(':maila',$mailo);
							$req -> execute();

							header("Location: index.php");
						}
						else {
							echo "Un compte est déjà attribué pour cette adresse mail" ;
						}
					} 
					else {
						echo "Le mail n'est pas valide ! " ;
					}
				}
				else {
					echo "Pseudo déjà pris";
				}
			}	
			else{
				echo "La longueur du pseudo ne doit pas dépassé 50 caractères";
			}	
		}
		else{
			echo "Les champs doivent être remplis";
		}	
	}

	function verif_connexion($pseudo,$mdp){
		if(self::verif_champsconnect_remplis()){

			$sql = 'SELECT idClient from client where Username like :pseudo and Mdp like :mdp';
			$req = self::$bdd -> prepare($sql);
			$req -> bindParam(':pseudo', $pseudo);
			$req -> bindParam(':mdp', $mdp);
			$req -> execute();
			$res = $req -> rowCount();
			if($res == 1) {
				if(!self::verifBan($pseudo)){
					$_SESSION['Pseudo'] = $pseudo;

					$reqadmin = self::$bdd -> prepare('SELECT Admin FROM client WHERE Username LIKE ?');
					$reqadmin -> execute(array($pseudo));
					$resadmin = $reqadmin -> fetch();
					$_SESSION['Admin'] = $resadmin[0];

					header("Location: index.php");
				}
				else{
					echo "Vous êtes actuellement bannie du site";
				}
			}
			else {
				echo "Pseudo ou mot de passe incorrect";
			}
		}
		else{
			echo "Les champs doivent être remplis";
		}	
	}

	function verif_mail_valide($mailo){
		if(filter_var($mailo, FILTER_VALIDATE_EMAIL)) {
			   list($userName, $domaineMail) = explode("@", $mailo);
			if (!checkdnsrr($domaineMail, "MX")){
			// Email is unreachable.
			return false;
			}
			return true;
		}
		else{
			// Email is bad.
			return false;
		}
	}

	function verif_unicite_mail($mailo){
		$sql = 'SELECT idClient from client where Email like :maila';
		$req = self::$bdd -> prepare($sql);
		$req -> bindParam(':maila', $mailo);
		$req -> execute();
		$res = $req -> fetch();
		if(isset($res[0])){
			return true;
		}
		else{
			return false;
		}
		
	}
	function verif_unicite_identifiant($pseudo){
		$sql = 'SELECT idClient from client where Username like :username';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':username', $pseudo);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function verif_champs_remplis(){
		if(isset($_POST['forminscription'])){
			if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mdp']) AND !empty($_POST['mail']) AND !empty($_POST['adresse']) AND !empty($_POST['tel'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function verif_long_pseudo($pseudo){
		$pseudolength = strlen($pseudo);
		if($pseudolength <= 50){
			return true;
		}
		else{
			return false;
		}
	}

	function verif_champsconnect_remplis(){
		if(isset($_POST['formconnection'])){
			if(!empty($_POST['pseudoconnect']) AND !empty($_POST['mdpconnect'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function getUserinfo($pseudo){
		$sql = 'SELECT * from client WHERE Username = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($pseudo));
		$userinfo = $req -> fetch();
		return $userinfo;
	}

	function getClients(){
		$sql = 'SELECT * FROM client';
		$req = self::$bdd -> prepare($sql);
		$req -> execute();
		$listClient = $req -> fetchAll();
		return $listClient;
	}

	function deconnecte(){
		$_SESSION = array();
		session_destroy();
		header("Location: index.php");
	}

	function modifierBD($newpseudo,$newmdp,$newmailo,$newnom,$newprenom,$newadresse,$newtel,$oldpseudo){
		if(isset($_POST['formModif'])){

			if(!empty($_POST['nomModif'])){
				$sql = 'UPDATE client SET NomClient = :nom WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':nom', $newnom);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			if(!empty($_POST['prenomModif'])){
				$sql = 'UPDATE client SET PrenomClient = :prenom WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':prenom', $newprenom);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			if(!empty($_POST['mdpModif'])){
				$sql = 'UPDATE client SET Mdp = :mdp WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':mdp', $newmdp);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			if(!empty($_POST['mailModif'])){
				$sql = 'UPDATE client SET Email = :mail WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':mail', $newmailo);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			if(!empty($_POST['adresseModif'])){
				$sql = 'UPDATE client SET Adresse = :adresse WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':adresse', $newadresse);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			if(!empty($_POST['telModif'])){
				$sql = 'UPDATE client SET Telephone = :tel WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':tel', $newtel);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			if(!empty($_POST['pseudoModif'])){
				$sql = 'UPDATE client SET Username = :pseudo WHERE Username = :oldpseudo';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':pseudo', $newpseudo);
				$req -> bindParam(':oldpseudo', $oldpseudo);
				$req -> execute();
			}
			header("Location: index.php?module=connexion&action=Deconnexion");
		}
	}

	function ajouterMembre($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel,$admin,$ban){
		if(self::verif_champs_remplis2()){

			if(self::verif_long_pseudo($pseudo)){

				if(!self::verif_unicite_identifiant($pseudo)){
					
					if(self::verif_mail_valide($mailo)){

						if(!self::verif_unicite_mail($mailo)){

							$sql = 'INSERT INTO client (IdClient, NomClient, PrenomClient, Email, Adresse, Telephone, Username, Mdp, Admin, Ban) VALUES (default, :nom, :prenom, :maila, :adresse, :tel, :login, :mdp, :admin, :ban)';
							$req = self::$bdd -> prepare($sql);
							$req -> bindParam(':nom', $nom);
							$req -> bindParam(':prenom', $prenom);
							$req -> bindParam(':adresse', $adresse);
							$req -> bindParam(':tel', $tel);
							$req -> bindParam(':login', $pseudo);
							$req -> bindParam(':mdp', $mdp);
							$req -> bindParam(':maila',$mailo);
							$req -> bindParam(':admin',$admin);
							$req -> bindParam(':ban',$ban);
							$req -> execute();

							header("Location: index.php?module=connexion&action=membresadmin");
						}
						else {
							echo "Un compte est déjà attribué pour cette adresse mail" ;
						}
					} 
					else {
						echo "Le mail n'est pas valide ! " ;
					}
				}
				else {
					echo "Pseudo déjà pris";
				}
			}	
			else{
				echo "La longueur du pseudo ne doit pas dépassé 50 caractères";
			}	
		}
		else{
			echo "Les champs doivent être remplis";
		}	
	}

	function verif_champs_remplis2(){
		if(isset($_POST['formajoutermembre'])){
			if(!empty($_POST['pseudoadmin']) AND !empty($_POST['nomadmin']) AND !empty($_POST['prenomadmin']) AND !empty($_POST['mdpadmin']) AND !empty($_POST['mailadmin']) AND !empty($_POST['adresseadmin']) AND !empty($_POST['teladmin']) AND !empty($_POST['admin']) AND !empty($_POST['ban'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function modifierMembre($idclient,$newpseudo,$newmdp,$newmailo,$newnom,$newprenom,$newadresse,$newtel,$admin,$ban){
		if(isset($_POST['formModifierMembre'])){
			if(!empty($_POST['idclient'])){
				if(!empty($_POST['nomModif'])){
					$sql = 'UPDATE client SET NomClient = :nom WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':nom', $newnom);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['prenomModif'])){
					$sql = 'UPDATE client SET PrenomClient = :prenom WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':prenom', $newprenom);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['mdpModif'])){
					$sql = 'UPDATE client SET Mdp = :mdp WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':mdp', $newmdp);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['mailModif'])){
					$sql = 'UPDATE client SET Email = :mail WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':mail', $newmailo);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['adresseModif'])){
					$sql = 'UPDATE client SET Adresse = :adresse WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':adresse', $newadresse);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['telModif'])){
					$sql = 'UPDATE client SET Telephone = :tel WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':tel', $newtel);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['admin'])){
					$sql = 'UPDATE client SET Admin = :admin WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':admin', $admin);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['ban'])){
					$sql = 'UPDATE client SET Ban = :ban WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':ban', $ban);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				if(!empty($_POST['pseudoModif'])){
					$sql = 'UPDATE client SET Username = :pseudo WHERE IdClient = :idclient';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':pseudo', $newpseudo);
					$req -> bindParam(':idclient', $idclient);
					$req -> execute();
				}
				header("Location: index.php?module=connexion&action=Deconnexion");
			}
			else{
				echo 'idclient doit être remplie pour modifier';
			}
		}
	}

	function supprimerMembre($idclient){
		if(self::verif_champs_remplis3()){
			if(self::verif_unicite_idclient($idclient)){
				$sql = 'DELETE FROM client WHERE IdClient = :idclient';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':idclient', $idclient);
				$req -> execute();
				header("Location: index.php?module=connexion&action=membresadmin");
			}
			else{
				echo "idClient n'existe pas";
			}
		}
		else{
			echo "Remplissez les champs";
		}
	}

	function verif_unicite_idclient($idclient){
		$sql = 'SELECT IdClient from client where IdClient like :idclient';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':idclient', $idclient);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function verif_champs_remplis3(){
		if(isset($_POST['formSupprimerMembre'])){
			if(!empty($_POST['idclient'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function verifBan($pseudo){
		$sql = 'SELECT Ban from client where Username like :pseudo';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':pseudo', $pseudo);
		$req -> execute();
		$res = $req -> fetch();
		
		if($res[0] == 1){
			return true;
		}
		else{
			return false;
		}
	}

	function suppPaie($idpaie){
		if(self::verif_champs_remplis4()){
			if(self::verif_unicite_idpaie($idpaie)){
				$sql = 'DELETE FROM paiement WHERE idPaiement = :idpaie';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':idpaie', $idpaie);
				$req -> execute();
				header("Location: index.php?module=connexion&action=paieadmin");
			}
			else{
				echo "idPaiement n'existe pas";
			}
		}
		else{
			echo "Remplissez les champs";
		}
	}

	function verif_unicite_idpaie($idpaie){
		$sql = 'SELECT idPaiement from paiement where idPaiement like :idpaie';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':idpaie', $idpaie);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function verif_champs_remplis4(){
		if(isset($_POST['formSupprimerPaie'])){
			if(!empty($_POST['idpaie'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function ajouterRabais($codereduc){
		if(isset($_POST['formAjoutRabais'])){
			if(!empty($_POST['codereduc'])){
				$sql = 'INSERT INTO reduction (idReduction, codeReduction) VALUES (default, :codereduc)';
				$req = self::$bdd -> prepare($sql);
				$req -> bindParam(':codereduc', $codereduc);
				$req -> execute();
				header("Location: index.php?module=connexion&action=paieadmin");
			}
			else{
				echo "Remplissez les champs";
			}
		}
	}

	function suppRabais($idreduc){
		if(isset($_POST['formSuppRabais'])){
			if(!empty($_POST['idreduc'])){
				if(self::verif_unicite_idreduc($idreduc)){
					$sql = 'DELETE FROM reduction WHERE idReduction = :idreduc';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':idreduc', $idreduc);
					$req -> execute();
					header("Location: index.php?module=connexion&action=paieadmin");
				}
				else{
					echo "idReduction n'existe pas";
				}
			}
			else{
				echo "Remplissez les champs";
			}
		}
	}

	function verif_unicite_idreduc($idreduc){
		$sql = 'SELECT idReduction from reduction where idReduction like :idreduc';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':idreduc', $idreduc);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function ajouterProduit($nom,$prix,$stock,$description,$image){
		if(self::verif_champs_remplis6()){
			$sql = 'INSERT INTO produit (IdProduit, NomProduit, Prix, Stock, Description, Image) VALUES (default, :nom, :prix, :stock, :description, :image)';
			$req = self::$bdd -> prepare($sql);
			$req -> bindParam(':nom', $nom);
			$req -> bindParam(':prix', $prix);
			$req -> bindParam(':stock', $stock);
			$req -> bindParam(':description', $description);
			$req -> bindParam(':image', $image);
			$req -> execute();
			header("Location: index.php?module=connexion&action=produitadmin");
		}
		else{
			echo "Les champs doivent être remplis";
		}	
	}

	function verif_champs_remplis6(){
		if(isset($_POST['formajouterproduit'])){
			if(!empty($_POST['nomproduit']) && !empty($_POST['prixproduit']) && !empty($_POST['stockproduit']) && !empty($_POST['descriptionproduit']) && !empty($_POST['imageproduit'])){
				return true;
			}
			else{
				return false;
			}
		}
	}

	function suppProduit($idproduit){
		if(isset($_POST['formSuppProduit'])){
			if(!empty($_POST['idproduit'])){
				if(self::verif_unicite_idproduit($idproduit)){
					$sql = 'DELETE FROM produit WHERE IdProduit = :idproduit';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':idproduit', $idproduit);
					$req -> execute();
					header("Location: index.php?module=connexion&action=produitadmin");
				}
				else{
					echo "idProduit n'existe pas";
				}
			}
			else{
				echo "Remplissez les champs";
			}
		}
	}

	function verif_unicite_idproduit($idproduit){
		$sql = 'SELECT IdProduit from produit where IdProduit like :idproduit';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':idproduit', $idproduit);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function modifierProduit($idproduit,$nom,$prix,$stock,$description,$image){
		if(isset($_POST['formmodifierproduit'])){
			if(!empty($_POST['idproduit'])){
				if(!empty($_POST['nomproduit'])){
					$sql = 'UPDATE produit SET NomProduit = :nom WHERE IdProduit = :idproduit';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':nom', $nom);
					$req -> bindParam(':idproduit', $idproduit);
					$req -> execute();
				}
				if(!empty($_POST['prixproduit'])){
					$sql = 'UPDATE produit SET Prix = :prix WHERE IdProduit = :idproduit';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':prix', $prix);
					$req -> bindParam(':idproduit', $idproduit);
					$req -> execute();
				}
				if(!empty($_POST['stockproduit'])){
					$sql = 'UPDATE produit SET Stock = :stock WHERE IdProduit = :idproduit';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':stock', $stock);
					$req -> bindParam(':idproduit', $idproduit);
					$req -> execute();
				}
				if(!empty($_POST['descriptionproduit'])){
					$sql = 'UPDATE produit SET Description = :description WHERE IdProduit = :idproduit';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':description', $description);
					$req -> bindParam(':idproduit', $idproduit);
					$req -> execute();
				}
				if(!empty($_POST['imageproduit'])){
					$sql = 'UPDATE produit SET Image = :image WHERE IdProduit = :idproduit';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':image', $image);
					$req -> bindParam(':idproduit', $idproduit);
					$req -> execute();
				}
				header("Location: index.php?module=connexion&action=produitadmin");
			}
			else{
				echo 'idProduit doit être remplie pour modifier';
			}
		}
	}

	function getAvisSignaler(){
		$sql = 'SELECT * FROM avis WHERE Ping = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array(true));
		$listavissignaler = $req -> fetchAll();
		return $listavissignaler;
	}

	function suppAvis($idavis){
		if(isset($_POST['formSuppAvis'])){
			if(!empty($_POST['idavis'])){
				if(self::verif_unicite_idavis($idavis)){
					$sql = 'DELETE FROM avis WHERE idAvis = :idavis';
					$req = self::$bdd -> prepare($sql);
					$req -> bindParam(':idavis', $idavis);
					$req -> execute();
					header("Location: index.php?module=connexion&action=produitadmin");
				}
				else{
					echo "idProduit n'existe pas";
				}
			}
			else{
				echo "Remplissez les champs";
			}
		}
	}

	function verif_unicite_idavis($idavis){
		$sql = 'SELECT idAvis from avis where idAvis like :idavis';
		$req = self::$bdd->prepare($sql);
		$req -> bindParam(':idavis', $idavis);
		$req -> execute();
		$res = $req -> rowCount();
		
		if($res > 0){
			return true;
		}
		else{
			return false;
		}
	}

	function getCommandesUser($pseudo){
		$sql = 'SELECT * from commande WHERE Pseudo = ?';
		$req = self::$bdd -> prepare($sql);
		$req -> execute(array($pseudo));
		$userCommandes = $req -> fetchAll();
		return $userCommandes;
	}
}
?>
