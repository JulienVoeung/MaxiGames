<?php
class VueTransaction{

	public function __construct () {

	}

    function afficherFormulairePaiement(){
?>		
<!-- Page de paiement -->
<div class="container">
    <div class="sectionPaiement">
        <h1>Paiement</h1>
        <div class="formulairePaiement">
            <form action="index.php?module=transaction&action=validepaie" method="post">
                <div class="numeroCarte">
                    <label for="">Numéro de carte:</label>
                    <input type="text" id="address1" Placeholder="  Numéro de carte" name="numcarte">
                </div>
				<div class="numeroCarte">
                    <label for="">Nom:</label>
                    <input type="text" id="address1" Placeholder="  Nom" name="nompaie">
                </div>
				<div class="numeroCarte">
                    <label for="">Prénom:</label>
                    <input type="text" id="address1" Placeholder="  Prénom" name="prenompaie">
                </div>
                <div class="dateExpiration">
                    <label for="">Date d'expiration:</label>
		    		<input type="text" id="dateexp" Placeholder="Date expiration" name="dateexp">
                </div>
                <div class="codeSecurite">
                    <label for="">CV Code:</label>
                    <input type="codeDeSecu" id="codeDeSecu" Placeholder="  CV" name="code">
                </div>
                <div class="boutonFormulairePaiement">
                    <button type="submit" name="formtransaction">Payer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php   
	}
	

	function afficherFormInsererPaie(){
		?>		<
		<div class="container">
			<div class="sectionConnexion">
				<h1>Insérer un nouveau moyen de paiement</h1>
				<div class="formulaireConnexion">
					<form action="index.php?module=connexion&action=inscription" method="post">
						<div class="nomUtilisateur">
							<label for="">Numéro de carte:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Numéro de carte" name="newnumcarte">
						</div>
						<div class="nomUtilisateur">
							<label for="">Nom:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Nom" name="newnompaie">
						</div>
						<div class="nomUtilisateur">
							<label for="">Prénom:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Prénom" name="newprenompaie">
						</div>
						<div class="nomUtilisateur">
							<label for="">Date d'expiration:</label>
							<input type="email" id="pseudoconnect" Placeholder="  Date d'expiration" name="newdateexp">
						</div>
						<div class="nomUtilisateur">
							<label for="">Code de sécurité:</label>
							<input type="text" id="pseudoconnect" Placeholder="  Code de sécurité" name="newcode">
						</div>
						<div class="boutonFormulaire">
							<button type="submit" name="formnewtransaction">Ajouter</button>
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

	function afficherLivraison(){
?>	

<!-- Page validation address -->

<div class="container">
    <div class="sectionAddress">
        <h1>Adresse</h1>
        <div class="formulaireAddress">
            <form action="" method="post">
                <div class="addressPplUtilisateur">
                    <label for="">Adresse 1:</label>
                    <input type="text" id="address1" Placeholder="  Adresse principale" name="address1">
                </div>
                <div class="addressSecUtilisateur">
                    <label for="">Complément d'adresse:</label>
                    <input type="address2" id="address2" Placeholder="  Bâtiment, porte, etc..." name="address2">
                </div>
                <div class="villeUtilisateur">
                    <label for="">Ville:</label>
                    <input type="ville" id="ville" Placeholder="  Ville" name="ville">
                </div>
                <div class="etatProvinceUtilisateur">
                    <label for="">État/Province:</label>
                    <input type="address2" id="etatProvince" Placeholder="  État/Province" name="etatProvince">
                </div>
                <div class="codePostale">
                    <label for="">Code Postale:</label>
                    <input type="address2" id="etatProvince" Placeholder="  Code Postale" name="etatProvince">
                </div>
        </div>
    </div>
    <div class="sectionLivraison">
        <h1>Livraison</h1>
        <div class="sectionModeLivraison">
            <select name="modeLivraison" id="selectionModeLivraison">
                <option value="modeDeLivraison"> -- Sélectionnez votre mode de livraison -- </option>
                <option value="1">Colissimo</option>
                <option value="2">Chronopost</option>
                <option value="3">La Poste</option>
                <option value="4">UPS</option>
            </select>
        </div>
        <div class="boutonFormulaire">
            <button type="submit" name="boutonAddress">Suivant</button>
		</div>
		</form>
    </div>
</div>

<?php   
    }
    
    function afficherPageValider(){
?>	
    <!-- Page confirmation de la commande -->

    <div class="container">
        <div class="confCommande">
            <div class="confCommandeBox">
                <div class="imgConfCommande">
                    <img src="img/confirmation.png" alt="">
                </div>
                <div class="texteConfCommande">
                    <h1>Votre commande a été placée avec succès !</h1>
                    <h2>Vous allez maintenant être redirigé vers la page d'accueil.</h2>
                    <h3>Si cela ne marche pas, <a href="index.php">cliquez ici !</a></h3>
                </div>
            </div>
        </div>
    </div>
<?php   
    }

    function afficherPageInvalide(){
?>	
    <!-- Page confirmation de la commande -->

    <div class="container">
        <div class="confNonCommande">
            <div class="confNonCommandeBox">
                <div class="imgNonConfCommande">
                    <img src="img/remove.png" alt="">
                </div>
                <div class="texteNonConfCommande">
                    <h1>Erreur, votre commande n'a pas pu être placée !</h1>
                    <h2>Vous allez maintenant être redirigé vers la page d'accueil.</h2>
                    <h3>Si cela ne marche pas, <a href="index.php">cliquez ici !</a></h3>
                </div>
            </div>
        </div>
    </div>
<?php   
    }
}
?>