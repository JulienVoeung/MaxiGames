<?php
class VueOccasion{

	public function __construct () {

	}

    function afficherContenueOccasion(){
?>  
<!-- Titre -->

<div class="container">
        <div class="titreTriPage">
            <div id="titre_elements_sans_trait">
                <h1>Occasion</h1>
            </div>
            <div class="tri">
                <p>Trier par</p>
                <select name="tri" id="tri_produits">
                    <option value="">-- options --</option>
                    <option value="prix_croissant">prix croissant</option>
                    <option value="prix_décroissant">prix décroissant</option>
                    <option value="nom">nom</option>
                </select>
            </div>
        </div>
        
<!-- Produits -->
        
        <div class="presentation_produits">
            <!-- Ligne 1 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=1"><img src="img/imgProduits/ps4slim.jpg"></a>
                        <div id="trait"></div>
                        <h4>Sony PS4 Slim 1To Occasion</h4>
                        <h5>199.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=2"><img src="img/imgProduits/PS4 _ 3.png"></a>
                        <div id="trait"></div>
                        <h4>Metro Exodus PS4 Occasion</h4>
                        <h5>9.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=3"><img src="img/imgProduits/OCC-GRAND-THEFT-AUTO-V.png"></a>
                        <div id="trait"></div>
                        <h4>GTA V Xbox Occasion</h4>
                        <h5>9.99€</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php    }
}
?>