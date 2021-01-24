<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include_once "mod_connexion.php";
include_once "modele_connexion.php";
include_once "vue_connexion.php";
include_once "connexion.php";

class ContConnexion{
	
	private $modele;
	private $vue;

	public function __construct () {
		$this -> modele = new modelesConnexion();
		$this -> vue = new VueConnexion();
	}
	
	public function formInscription() {
		$this -> vue -> afficherFormulaireInscription();
	}

	public function formConnexion() {
		$this -> vue -> afficherFormulaireConnexion();
	}

	public function formModif() {
		$this -> vue -> afficherFormulaireModifier();
	}

	public function inserer_BD($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel){
		$this -> modele -> inserer_BD($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel);
	}

	public function verif_connexion($pseudo,$mdp){
		$this -> modele -> verif_connexion($pseudo,$mdp);
	}

	public function modifierBD($newpseudo,$newmdp,$newmailo,$newnom,$newprenom,$newadresse,$newtel,$oldpseudo){
		$this -> modele -> modifierBD($newpseudo,$newmdp,$newmailo,$newnom,$newprenom,$newadresse,$newtel,$oldpseudo);
	}

	public function afficherVue() {
		$this->vue->affichageBasique();
	}

	public function espaceMembre(){
		$this -> vue -> afficherEspaceMembre();
	}

	public function MesInformations($pseudo){
		$userinfo = $this -> modele -> getUserinfo($pseudo);
		$this -> vue -> afficherMesInformations($userinfo);
	}

	public function deconnecte(){
		$this -> modele -> deconnecte();
	}

	public function listClient(){
		$a = $this -> modele -> getClients();
		$this -> vue -> afficherLesClients($a);
	}

	public function menuMembreAdmin(){
		$this -> vue -> afficherMenuMembre();
	}

	public function menuPaieAdmin(){
		$this -> vue -> afficherMenuPaie();
	}

	public function formAjouterMembre(){
		$this -> vue -> afficherFormulaireAjouterMembre();
	}

	public function ajouterMembre($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel,$admin,$ban){
		$this -> modele -> ajouterMembre($pseudo,$mdp,$mailo,$nom,$prenom,$adresse,$tel,$admin,$ban);
	}

	public function formModifierMembre(){
		$this -> vue -> afficherFormulaireModifierMembre();
	}

	public function modifierMembre($idclient,$newpseudo,$newmdp,$newmailo,$newnom,$newprenom,$newadresse,$newtel,$admin,$ban){
		$this -> modele -> modifierMembre($idclient,$newpseudo,$newmdp,$newmailo,$newnom,$newprenom,$newadresse,$newtel,$admin,$ban);
	}

	public function formSupprimerMembre(){
		$this -> vue -> afficherFormulaireSupprimerMembre();
	}

	public function supprimerMembre($idclient){
		$this -> modele -> supprimerMembre($idclient);
	}

	public function formSupprimerPaie(){
		$this -> vue -> afficherFormSuppPaie();
	}

	public function supprimerPaiement($idpaie){
		$this -> modele -> suppPaie($idpaie);
	}

	public function formAjouterRabais(){
		$this -> vue -> afficherFormAjoutRabais();
	}

	public function ajouterRabais($codereduc){
		$this -> modele -> ajouterRabais($codereduc);
	}

	public function formSupprimerRabais(){
		$this -> vue -> afficherFormSuppRabais();
	}

	public function supprimerRabais($idreduc){
		$this -> modele -> suppRabais($idreduc);
	}

	public function menuProduitAdmin(){
		$this -> vue -> afficherMenuProduit();
	}

	public function formAjouterProduit(){
		$this -> vue -> afficherFormulaireAjouterProduit();
	}

	public function ajouterProduit($nom,$prix,$stock,$description,$image){
		$this -> modele -> ajouterProduit($nom,$prix,$stock,$description,$image);
	}

	public function formSupprimerProduit(){
		$this -> vue -> afficherFormSuppProduit();
	}

	public function supprimerProduit(){
		$this -> modele -> suppProduit($idproduit);
	}

	public function formModifierProduit(){
		$this -> vue -> afficherFormulaireModifierProduit();
	}

	public function modiferProduit($idproduit,$nom,$prix,$stock,$description,$image){
		$this -> modele -> modifierProduit($idproduit,$nom,$prix,$stock,$description,$image);
	}

	public function espaceAvisSignaler(){
		$avissignaler = $this -> modele -> getAvisSignaler();
		$this -> vue -> espaceAvisSignaler($avissignaler);
	}

	public function formSuppAvis(){
		$this -> vue -> afficherFormSuppAvis();
	}

	public function supprimerAvis($idavis){
		$this -> modele -> suppAvis($idavis);
	}

	public function MesCommandes($pseudo){
		$usercommandes = $this -> modele -> getCommandesUser($pseudo);
		$this -> vue -> afficherMesCommandes($usercommandes);
	}
}

?>