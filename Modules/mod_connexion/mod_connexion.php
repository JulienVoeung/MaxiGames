<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include_once "cont_connexion.php";

class ModConnexion{

	private $contConnexion;

	public function __construct () {

		$this -> contConnexion = new ContConnexion();

		if (isset($_GET['action'])) {
            $action = htmlspecialchars($_GET['action']);
        } else {
            $action = "default";
        }
        
		switch ($action) {
		case 'FormInscription':
			if(isset($_SESSION['Pseudo'])){
				$pseudo = $_SESSION['Pseudo'];
				$this -> contConnexion -> espaceMembre();
			}
			else{
				$this -> contConnexion -> formInscription();
			}
			break;
		case 'FormConnexion':
			if(isset($_SESSION['Pseudo'])){
				$pseudo = $_SESSION['Pseudo'];
				$this -> contConnexion -> espaceMembre();
			}
			else{
				$this -> contConnexion -> formConnexion();
			}
			break;
		case 'inscription':
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
			$mdp = hash('sha256', $_POST['mdp']);
            $mailo = htmlspecialchars($_POST['mail']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $tel = htmlspecialchars($_POST['tel']);
			$this -> contConnexion -> inserer_BD($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel);
			break;
		case 'connexion' :
			$pseudo = htmlspecialchars($_POST['pseudoconnect']);
			$mdp = hash('sha256', $_POST['mdpconnect']);
			$this -> contConnexion -> verif_connexion($pseudo,$mdp);
			break;
		case 'Deconnexion' :
			$this -> contConnexion -> deconnecte();		
			break;
		case 'EspaceMembre':
			if(isset($_SESSION['Pseudo'])){
				$this -> contConnexion -> espaceMembre();
			}
			else{
				$this -> contConnexion -> formConnexion();
			}
			break;
		case 'Informations':
			if(isset($_SESSION['Pseudo'])){
				$pseudo = $_SESSION['Pseudo'];
				$this -> contConnexion -> MesInformations($pseudo);
			}
			break;
		case 'FormModifier':
			$this -> contConnexion -> formModif();
			break;
		case 'Modification':
			if(isset($_SESSION['Pseudo'])){
				$oldpseudo = $_SESSION['Pseudo'];
			}
			$pseudo = htmlspecialchars($_POST['pseudoModif']);
            $nom = htmlspecialchars($_POST['nomModif']);
            $prenom = htmlspecialchars($_POST['prenomModif']);
			$mdp = hash('sha256', $_POST['mdpModif']);
            $mailo = htmlspecialchars($_POST['mailModif']);
            $adresse = htmlspecialchars($_POST['adresseModif']);
			$tel = htmlspecialchars($_POST['telModif']);
			$this -> contConnexion -> modifierBD($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel,$oldpseudo);
			break;
		case 'membresadmin':
			$this -> contConnexion -> menuMembreAdmin();
			break;
		case 'formajoutermembreadmmin':
			$this -> contConnexion -> formAjouterMembre();
			break;
		case 'ajoutermembre':
			$pseudo = htmlspecialchars($_POST['pseudoadmin']);
            $nom = htmlspecialchars($_POST['nomadmin']);
            $prenom = htmlspecialchars($_POST['prenomadmin']);
			$mdp = hash('sha256', $_POST['mdpadmin']);
            $mailo = htmlspecialchars($_POST['mailadmin']);
            $adresse = htmlspecialchars($_POST['adresseadmin']);
			$tel = htmlspecialchars($_POST['teladmin']);
			$admin =  htmlspecialchars($_POST['admin']);
			$ban =  htmlspecialchars($_POST['ban']);
			$this -> contConnexion -> ajouterMembre($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel,$admin,$ban);
			break;
		case 'formmodifiermembre':
			$this -> contConnexion -> formModifierMembre();
			break;
		case 'modifiermembre':
			$idclient = htmlspecialchars($_POST['idclient']);
			$pseudo = htmlspecialchars($_POST['pseudoModif']);
            $nom = htmlspecialchars($_POST['nomModif']);
            $prenom = htmlspecialchars($_POST['prenomModif']);
			$mdp = hash('sha256', $_POST['mdpModif']);
            $mailo = htmlspecialchars($_POST['mailModif']);
            $adresse = htmlspecialchars($_POST['adresseModif']);
			$tel = htmlspecialchars($_POST['telModif']);
			$admin =  htmlspecialchars($_POST['admin']);
			$ban =  htmlspecialchars($_POST['ban']);
			$this -> contConnexion -> modifierMembre($idclient,$pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel,$admin,$ban);
			break;
		case 'formsuppmembre':
			$this -> contConnexion -> formSupprimerMembre();
			break;
		case 'supprimermembre':
			$idclient = htmlspecialchars($_POST['idclient']);
			$this -> contConnexion -> supprimerMembre($idclient);
			break;
		case 'listemembre':
			$this -> contConnexion -> listClient();
			break;
		case 'paieadmin':
			$this -> contConnexion -> menuPaieAdmin();
			break;
		case 'formsupppaie':
			$this -> contConnexion -> formSupprimerPaie();
			break;
		case 'supppaie':
			$idpaie = htmlspecialchars($_POST['idpaie']);
			$this -> contConnexion -> supprimerPaiement($idpaie);
			break;
		case 'formajoutrabais':
			$this -> contConnexion -> formAjouterRabais();
			break;
		case 'ajouterrabais':
			$codereduc = hash('sha256', $_POST['codereduc']);
			$this -> contConnexion -> ajouterRabais($codereduc);
			break;
		case 'formsupprabais':
			$this -> contConnexion -> formSupprimerRabais();
			break;
		case 'supprabais':
			$idreduc = htmlspecialchars($_POST['idreduc']);
			$this -> contConnexion -> supprimerRabais($idreduc);
			break;
		case 'produitadmin':
			$this -> contConnexion -> menuProduitAdmin();
			break;
		case 'formajouterproduit':
			$this -> contConnexion -> formAjouterProduit();
			break;
		case 'ajouterproduit':
			$nom = htmlspecialchars($_POST['nomproduit']);
			$prix = htmlspecialchars($_POST['prixproduit']);
			$stock = htmlspecialchars($_POST['stockproduit']);
			$description = htmlspecialchars($_POST['descriptionproduit']);
			$image = htmlspecialchars($_POST['imageproduit']);
			$this -> contConnexion -> ajouterProduit($nom,$prix,$stock,$description,$image);
			break;
		case 'formsuppproduit':
			$this -> contConnexion -> formSupprimerProduit();
			break;
		case 'suppproduit':
			$idproduit = htmlspecialchars($_POST['idproduit']);
			$this -> contConnexion -> supprimerProduit($idproduit);
			break;
		case 'formmodifierproduit':
			$this -> contConnexion -> formModifierProduit();
			break;
		case 'modifierproduit':
			$idproduit = htmlspecialchars($_POST['idproduit']);
			$nom = htmlspecialchars($_POST['nomproduit']);
			$prix = htmlspecialchars($_POST['prixproduit']);
			$stock = htmlspecialchars($_POST['stockproduit']);
			$description = htmlspecialchars($_POST['descriptionproduit']);
			$image = htmlspecialchars($_POST['imageproduit']);
			$this -> contConnexion -> modiferProduit($idproduit,$nom,$prix,$stock,$description,$image);
			break;
		case 'espaceAvisSignaler':
			$this -> contConnexion -> espaceAvisSignaler();
			break;
		case 'formSuppAvis':
			$this -> contConnexion -> formSuppAvis();
			break;
		case 'supprimerAvis':
			$idavis = htmlspecialchars($_POST['idavis']);
			$this -> contConnexion -> supprimerAvis($idavis);
			break;
		case 'mesCommandes':
			if(isset($_SESSION['Pseudo'])){
				$pseudo = $_SESSION['Pseudo'];
				$this -> contConnexion -> MesCommandes($pseudo);
			}
		default:
			$this -> contConnexion -> afficherVue();
			break;
		}
	}  

}

?>