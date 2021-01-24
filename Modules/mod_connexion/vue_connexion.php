<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
class VueConnexion{

	public function __construct () {

	}

    function afficherFormulaireInscription(){
?> 
		<div class="container">
			<div class="sectionConnexion">
				<h1>Inscription</h1>
				<div class="formulaireConnexion">
					<form action="index.php?module=connexion&action=inscription" method="post">
						<div class="nomUtilisateur">
							<label for="">Pseudo:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Pseudo" name="pseudo">
						</div>
						<div class="nomUtilisateur">
							<label for="">Nom:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Nom" name="nom">
						</div>
						<div class="nomUtilisateur">
							<label for="">Prénom:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Prénom" name="prenom">
						</div>
						<div class="nomUtilisateur">
							<label for="">Email:</label>
							<input type="email" id="pseudoconnect" Placeholder="  E-mail" name="mail">
						</div>
						<div class="nomUtilisateur">
							<label for="">Adresse:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Adresse" name="adresse">
						</div>
						<div class="nomUtilisateur">
							<label for="">Téléphone:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Téléphone" name="tel">
						</div>
						<div class="motDePasse">
							<label for="">Mot de passe:</label>
							<input type="password" id="mdpconnect" Placeholder="  Mot de passe" name="mdp">
						</div>
						<div class="boutonFormulaire">
							<button type="submit" name="forminscription">S'inscrire</button>
						</div>
					</form>
					<div class="redirectionInscription">
						<p>Déjà membre ? Connectez vous !
							<a id=lienconnexion href="index.php?module=connexion&action=FormConnexion">Se connecter</a>
						</p>
					</div>
				</div>
			</div>
		</div>
<?php
	}

	function afficherFormulaireConnexion(){
?>		
	<div class="container">
		<div class="sectionConnexion">
			<h1>Connexion</h1>
			<div class="formulaireConnexion">
				<form action="index.php?module=connexion&action=connexion" method="post">
					<div class="nomUtilisateur">
						<label for="">Pseudo:</label>
						<input type="text" id="pseudoconnect" Placeholder="  Pseudo" name="pseudoconnect">
					</div>
					<div class="motDePasse">
						<label for="">Mot de passe:</label>
						<input type="password" id="mdpconnect" Placeholder="  Mot de passe" name="mdpconnect">
					</div>
					<div class="boutonFormulaire">
						<button type="submit" name="formconnection">Se connecter </button>
					</div>
				</form>
				<div class="redirectionInscription">
					<p>Pas encore membre ?
						<a id=lienconnexion href="index.php?module=connexion&action=FormInscription"> Rejoignez nous !</a>
					</p>
				</div>
			</div>
		</div>
	</div>
<?php	}

	function afficherEspaceMembre(){
?>
<!-- Page Profil -->
<div class="container">
        <div class="pageProfil">
          <h1>VOTRE PROFIL</h1>
<?php
		  if(isset($_SESSION['Admin'])){
			  if($_SESSION['Admin'] == 0){
?>
            <div class="sectionHaut">
                <a href="index.php?module=connexion&action=Informations">
                    <div class="mesInformations">
                        <img src="img/file.png" alt="">
                        <h2>Mes informations</h2>
                        <p>Consultez et modifiez vos informations.</p>
                    </div>
                </a>
                <a href="index.php?module=connexion&action=mesCommandes">
                    <div class="mesCommandes">
                        <img src="img/box.png" alt="">
                        <h2>Mes commandes</h2>
                        <p>Suivez vos commandes ou consultez vos précédentes commandes.</p>
                    </div>
                </a>
            </div>
            <div class="sectionBas">
                <a href="index.php?module=transaction&action=formnewpaie">
                    <div class="monMoyenDePaiement">
                        <img src="img/credit-card.png" alt="">
                        <h2>Moyens de paiement</h2>
                        <p>Insérez votre moyen de paiement pour commander.</p>
                    </div>
                </a>
                <a href="index.php?module=messagerie&action=pageMessagerie">
                    <div class="maMessagerie">
                        <img src="img/chat.png" alt="">
                        <h2>Ma messagerie</h2>
                        <p>Vous avez un soucis ? Echangez avec notre service client sur votre problème.</p>
                    </div>
                </a>
            </div>
<?php
			}
			else if($_SESSION['Admin'] == 1){
?>
				<div class="sectionHaut">
                <a href="index.php?module=connexion&action=membresadmin">
                    <div class="mesInformations">
                        <img src="img/file.png" alt="">
                        <h2>Les membres</h2>
                        <p>Insérez, modifier et supprimer des membres.</p>
                    </div>
                </a>
                <a href="index.php?module=connexion&action=produitadmin">
                    <div class="mesCommandes">
                        <img src="img/box.png" alt="">
                        <h2>Les produits et avis</h2>
                        <p>Insérez, modifier et supprimer des produits et des avis.</p>
                    </div>
                </a>
            </div>
            <div class="sectionBas">
                <a href="index.php?module=connexion&action=paieadmin">
                    <div class="monMoyenDePaiement">
                        <img src="img/credit-card.png" alt="">
                        <h2>Paiements et rabais</h2>
                        <p>Insérez et supprimez des moyens de paiement et bons de réductions.</p>
                    </div>
                </a>
                <a href="index.php?module=messagerie&action=pageMessagerie">
                    <div class="maMessagerie">
                        <img src="img/chat.png" alt="">
                        <h2>Ma messagerie</h2>
                        <p>Echangez avec les clients sur leurs soucis</p>
                    </div>
                </a>
            </div>
<?php
			}
		}
?>
		</div>
		<div id="lienprofil">
			<a href="index.php?module=connexion&action=Deconnexion">Déconnexion</a>
		</div>
    </div>
<?php
	}

	function afficherMesInformations($userinfo){

?>
	<div class="container">
		
		<h2 style="text-align:center; margin:50px 0;">Vos informations</h2>
		<div class="informations">
		
				
				<p>
				
					Pseudo =            <?php    echo $userinfo['Username'];   ?>              						
					<br/>
					Nom = 			    <?php    echo $userinfo['NomClient'];   ?>     
					<br/>
					Prenom = 		    <?php    echo $userinfo['PrenomClient'];    ?>     
					<br/>
					Email = 		    <?php    echo $userinfo['Email'];   ?>     
					<br/>
					Adresse = 			<?php    echo $userinfo['Adresse'];    ?>     
					<br/>
					Telephone = 		<?php    echo $userinfo['Telephone'];   ?>     
					<br/>
					Mot de passe = *****
					<br/>
				</p>
		</div>
		<div id="lieninformations">
			<a href="index.php?module=connexion&action=FormModifier"> Modifier mes informations </a>
		</div>
	</div>
<?php
	}

	function afficherMesCommandes($usercommandes){
		if($usercommandes == null){
?>
			<h1 style="margin-top: 40px;" align=center>Vous n'avez passé aucune commande</h1>  
<?php
		}
		else{
?>

	<div class="container">
            <h1 style="margin-top: 40px;" align=center>Mes commandes</h1>
            
<?php
            $i = 0;
            foreach($usercommandes as $key => $value){
?>
			<div class="messages">
                <div class="message">
					<div class="numCom">
						<label for="">Numéro de commande:</label>
						<span class="pseudo"><?php echo $usercommandes[$i]['idCommande'];  ?></span>
					</div>
					<div class="dateCom">
						<label for="">Date de commande:</label>
						<span class="date"><?php echo $usercommandes[$i]['DateCommande'];  ?></span>
					</div>
					<div class="adresseCom">
						<label for="">Adresse d'expédition:</label>
						<span class="message"><?php echo $usercommandes[$i]['AdresseExpedition'];  ?></span>
					</div>
					<div class="detailCom">
						<label for="">Détail de la commande:</label>
						<span class="detail"><?php echo $usercommandes[$i]['detailCommande'];  ?></span>
					</div>
				</div>
			</div>
<?php
                $i = $i + 1;
                echo "<br>";
            }
?>
            
    </div>
<?php
		}
	}

	function afficherFormulaireModifier(){
?> 
	<div class="container">
		<div class="sectionConnexion">
			<h1>Modifier mes informations</h1>
				<div class="formulaireConnexion">
					<form action="index.php?module=connexion&action=Modification" method="post">
						<div class="nomUtilisateur">
							<label for="">Pseudo:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Pseudo" name="pseudoModif">
						</div>
						<div class="nomUtilisateur">
							<label for="">Nom:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Nom" name="nomModif">
						</div>
						<div class="nomUtilisateur">
							<label for="">Prénom:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Prénom" name="prenomModif">
						</div>
						<div class="nomUtilisateur">
							<label for="">Email:</label>
							<input type="email" id="pseudoconnect" Placeholder="  E-mail" name="mailModif">
						</div>
						<div class="nomUtilisateur">
							<label for="">Adresse:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Adresse" name="adresseModif">
						</div>
						<div class="nomUtilisateur">
							<label for="">Téléphone:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Téléphone" name="telModif">
						</div>
						<div class="motDePasse">
							<label for="">Mot de passe:</label>
							<input type="password" id="mdpconnect" Placeholder="  Mot de passe" name="mdpModif">
						</div>
						<div class="boutonFormulaire">
							<p style="margin-bottom:20px;">Vous allez être déconnecter une fois l'enregistrement des modifications</p>
							<button type="submit" name="formModif">Enregistrer</button>
						</div>
					</form>
					<div class="redirectionAnnuler">
						<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre">Annuler</a>
					</div>
				</div>
		</div>
	</div>
<?php
	}

	function afficherMenuMembre(){
		?>
		<div align="center">
			<a id=lienconnexion href="index.php?module=connexion&action=formajoutermembreadmmin"> Ajouter </a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formmodifiermembre"> Modifier </a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formsuppmembre"> Supprimer </a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=listemembre"> Liste des membres </a>
		</div>
		<?php
	}

	function afficherFormulaireAjouterMembre(){
		?> 
		<div align="center">
		<h2>Ajouter membre</h2>
			<!-- Form -->
			<form action="index.php?module=connexion&action=ajoutermembre" method="POST">
				<!-- Pseudo -->
				<input type="text" id="pseudoadmin" Placeholder="Pseudo" name="pseudoadmin">
				<br/>
				<!-- Nom -->
				<input type="text" id="nomadmin" Placeholder="Nom" name="nomadmin">
				<br/>
				<!-- Prénom -->
				<input type="text" id="prenomadmin" Placeholder="Prénom" name="prenomadmin">
				<br/>
				<!-- Email -->
				<input type="email" id="mailadmin" Placeholder="E-mail" name="mailadmin">
				<br/>
				<!-- Adresse -->
				<input type="text" id="adresseadmin" Placeholder="Adresse" name="adresseadmin">
				<br/>
				<!-- Téléphone -->
				<input type="text" id="teladmin" Placeholder="Téléphone" name="teladmin">
				<br/>
				<!-- Password -->
				<input type="password" id="mdpadmin" Placeholder="Mot de passe" name="mdpadmin">
				<br/>
				<!-- admin -->
				<input type="text" id="admin" Placeholder="Admin" name="admin">
				<br/>
				<input type="text" id="ban" Placeholder="Ban" name="ban">
				<br/>
				<br/>
				<!-- Sign in button -->
				<button type="submit" name="formajoutermembre">Ajouter</button>
				<!-- Log In -->
				<p>Déjà membre ? Connectez vous !
				<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre">Annuler</a>
				</p>
			</form>
		</div>
		<?php
	}

	function afficherFormulaireModifierMembre(){
		?> <div align="center">
		<h2>Modifier membre</h2>
			<!-- Form -->
			<form action="index.php?module=connexion&action=modifiermembre" method="POST">
				<!-- idclient -->
				<input type="text" id="idclient" Placeholder="IdClient" name="idclient">
				<br/>
				<!-- Pseudo -->
				<input type="text" id="pseudo" Placeholder="Pseudo" name="pseudoModif">
				<br/>
				<!-- Nom -->
				<input type="text" id="nom" Placeholder="Nom" name="nomModif">
				<br/>
				<!-- Prénom -->
				<input type="text" id="prenom" Placeholder="Prénom" name="prenomModif">
				<br/>
				<!-- Email -->
				<input type="email" id="mail" Placeholder="E-mail" name="mailModif">
				<br/>
				<!-- Adresse -->
				<input type="text" id="adresse" Placeholder="Adresse" name="adresseModif">
				<br/>
				<!-- Téléphone -->
				<input type="text" id="tel" Placeholder="Téléphone" name="telModif">
				<br/>
				<!-- Password -->
				<input type="password" id="mdp" Placeholder="Mot de passe" name="mdpModif">
				<br/>
				<input type="text" id="admin" Placeholder="Admin" name="admin">
				<br/>
				<input type="text" id="ban" Placeholder="Ban" name="ban">
				<br/>
				<br/>
				<!-- Sign in button -->
				<p> Vous allez être déconnecter une fois l'enregistrement des modifications </p>
				<button type="submit" name="formModifierMembre"> Enregistrer </button>
				<!-- Log In -->
				<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre"> Annuler </a>
			</form>
		</div>
		<?php
	}

	function afficherFormulaireSupprimerMembre(){
		?>  <div align="center">
				<h2>Supprimer membre</h2>
				<form action="index.php?module=connexion&action=supprimermembre" method="POST">
					<input type="text" id="idclient" Placeholder="IdClient" name="idclient">
					<br/>
					<button type="submit" name="formSupprimerMembre"> Supprimer </button>
					<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre"> Annuler </a>
				</form>
			</div>
		<?php
	}

	function afficherLesClients($lesclients){
		$i = 0;
		$j = 0;
		foreach($lesclients as $key => $value){
			if(is_array($value)){
				foreach($value as $key => $value){
					echo $key." : ".$value."<br>";
					$j = $j + 1; 
				}
			}
			echo "<br>";
		}
	}

	function afficherMenuPaie(){
		?>
		<div align="center">
			<a id=lienconnexion href="index.php?module=transaction&action=formnewpaie">Ajouter Paiement</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formsupppaie">Supprimer Paiement</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formajoutrabais">Ajouter rabais</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formsupprabais">Supprimer rabais</a>
		</div>
		<?php
	}

	function afficherFormSuppPaie(){
		?>  <div align="center">
				<h2>Supprimer paiement</h2>
				<form action="index.php?module=connexion&action=supppaie" method="POST">
					<input type="text" id="idpaie" Placeholder="IdPaiement" name="idpaie">
					<br/>
					<button type="submit" name="formSupprimerPaie"> Supprimer </button>
					<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre"> Annuler </a>
				</form>
			</div>
		<?php
	}

	function afficherFormAjoutRabais(){
		?>  <div align="center">
				<h2>Ajouter rabais</h2>
				<form action="index.php?module=connexion&action=ajouterrabais" method="POST">
					<input type="text" id="codereduc" Placeholder="Code reduction" name="codereduc">
					<br/>
					<button type="submit" name="formAjoutRabais">Ajouter</button>
					<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre"> Annuler </a>
				</form>
			</div>
		<?php
	}

	function afficherFormSuppRabais(){
		?>  <div align="center">
				<h2>Supprimer rabais</h2>
				<form action="index.php?module=connexion&action=supprabais" method="POST">
					<input type="text" id="idreduc" Placeholder="IdReduction" name="idreduc">
					<br/>
					<button type="submit" name="formSuppRabais">Supprimer</button>
					<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre"> Annuler </a>
				</form>
			</div>
		<?php
	}

	function afficherMenuProduit(){
		?>
		<div align="center">
			<a id=lienconnexion href="index.php?module=connexion&action=formajouterproduit">Ajouter Produit</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formsuppproduit">Supprimer Produit</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formmodifierproduit">Modifier Produit</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=espaceAvisSignaler">Signalement d'avis</a>
			<br/>
			<a id=lienconnexion href="index.php?module=connexion&action=formSuppAvis">Supprimer avis</a>
		</div>
		<?php
	}

	function afficherFormulaireAjouterProduit(){
		?> 
		<div align="center">
		<h2>Ajouter produit</h2>
			<form action="index.php?module=connexion&action=ajouterproduit" method="POST">
				<input type="text" id="nomproduit" Placeholder="Nom du Produit" name="nomproduit">
				<br/>
				<input type="text" id="prixproduit" Placeholder="Prix du produit" name="prixproduit">
				<br/>
				<input type="text" id="stockproduit" Placeholder="Stock" name="stockproduit">
				<br/>
				<input type="text" id="descriptionproduit" Placeholder="Description" name="descriptionproduit">
				<br/>
				<input type="text" id="imageproduit" Placeholder="Lien de l'image" name="imageproduit">
				<br/>
				<br/>
				<button type="submit" name="formajouterproduit">Ajouter</button>
				<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre">Annuler</a>
			</form>
		</div>
		<?php
	}

	function afficherFormSuppProduit(){
		?>  <div align="center">
				<h2>Supprimer produit</h2>
				<form action="index.php?module=connexion&action=supprabais" method="POST">
					<input type="text" id="idproduit" Placeholder="IdProduit" name="idproduit">
					<br/>
					<button type="submit" name="formSuppProduit"> Supprimer </button>
					<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre"> Annuler </a>
				</form>
			</div>
		<?php
	}

	function afficherFormulaireModifierProduit(){
		?>
		<div align="center">
		<h2>Modifier produit</h2>
			<form action="index.php?module=connexion&action=modifierproduit" method="POST">
				<input type="text" id="idproduit" Placeholder="IdProduit" name="idproduit">
				<br/>
				<input type="text" id="nomproduit" Placeholder="Nom du Produit" name="nomproduit">
				<br/>
				<input type="text" id="prixproduit" Placeholder="Prix du produit" name="prixproduit">
				<br/>
				<input type="text" id="stockproduit" Placeholder="Stock" name="stockproduit">
				<br/>
				<input type="text" id="descriptionproduit" Placeholder="Description" name="descriptionproduit">
				<br/>
				<input type="text" id="imageproduit" Placeholder="Lien de l'image" name="imageproduit">
				<br/>
				<br/>
				<button type="submit" name="formmodifierproduit">Modifier</button>
				<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre">Annuler</a>
			</form>
		</div>
		<?php
	}

	function espaceAvisSignaler($avissignaler){
		$i = 0;
		$j = 0;
		foreach($avissignaler as $key => $value){
			if(is_array($value)){
				foreach($value as $key => $value){
					echo $key." : ".$value."<br>";
					$j = $j + 1; 
				}
			}
			echo "<br>";
		}
	}

	function afficherFormSuppAvis(){
		?>  <div align="center">
				<h2>Supprimer avis</h2>
				<form action="index.php?module=connexion&action=supprimerAvis" method="POST">
					<input type="text" id="idavis" Placeholder="IdAvis" name="idavis">
					<br/>
					<button type="submit" name="formSuppAvis">Supprimer</button>
					<a id=lienconnexion href="index.php?module=connexion&action=EspaceMembre">Annuler</a>
				</form>
			</div>
		<?php
	}

	function affichageBasique() {
			echo '<a href="index.php?module=connexion&action=FormInscription"><h3>INSCRIPTION</h3></a>
				<a href="index.php?module=connexion&action=FormConnexion"><h3>CONNEXION</h3></a>';
	}
	
}
?>