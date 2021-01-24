<?php
class VueAccessoires{

	public function __construct () {

	}

    function afficherContenueAccessoires(){
?>  

<!-- Titre -->

<div class="container">
        <div class="titreTriPage">
            <div id="titre_elements_sans_trait">
                <h1>CONSOLES</h1>
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
                        <a href="index.php?module=produit&action=produit&idp=32"><img src="img/imgProduits/MANNETTE _ PS5.png"></a>
                        <div id="trait"></div>
                        <h4>Mannette Sony PlayStation 5</h4>
                        <h5>69.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=33"><img src="img/imgProduits/MANNETTE _ PS4.png"></a>
                        <div id="trait"></div>
                        <h4>Mannette Sony PlayStation 4</h4>
                        <h5>59.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=34"><img src="img/imgProduits/MANNETTE _ XBOX SERIES X.png"></a>
                        <div id="trait"></div>
                        <h4>Mannette Xbox Series X</h4>
                        <h5>59.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 2 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=35"><img src="img/imgProduits/MANNETTE _ XBOX SERIES S.png"></a>
                        <div id="trait"></div>
                        <h4>Mannette Xbox Series S</h4>
                        <h5>59.99€</h5>
                    </div>                    
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=36"><img src="img/imgProduits/casque-pdp-level-50-gris-pour-xbox-one-2.jpg"></a>
                        <div id="trait"></div>
                        <h4>Casque XBOX</h4>
                        <h5>38.99€</h5>
                        </div>
                    </div>
                    <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=37"><img src="img/imgProduits/casque-ps4-lvl40.jpg"></a>
                        <div id="trait"></div>
                        <h4>Casque PS4</h4>
                        <h5>45.99€</h5>
                        </div>
                    </div>
                </div> 
                <!-- Ligne 3 -->
                <div class="ligne">
                    <div class="pre_prod">
                        <div class="pre_prod_container">
                            <a href="index.php?module=produit&action=produit&idp=52"><img src="img/imgProduits/manetteSwitch.jpg"></a>
                            <div id="trait"></div>
                            <h4>Manette Nintendo Switch Pro</h4>
                            <h5>69.99€</h5>
                            </div>                    
                        </div>
                    <div class="pre_prod">
                        <div class="pre_prod_container">
                            <a href="index.php?module=produit&action=produit&idp=53"><img src="img/imgProduits/manetteSwitchJoyCon.jpg"></a>
                            <div id="trait"></div>
                            <h4>Manette Nintendo Switch Joy-Con</h4>
                            <h5>69.99€</h5>
                            </div>
                        </div>
                    <div class="pre_prod">
                        <div class="pre_prod_container">
                            <a href="index.php?module=produit&action=produit&idp=54"><img src="img/imgProduits/porteclef.jpg"></a>
                            <div id="trait"></div>
                            <h4>Porte clé Manette Super Nintendo</h4>
                            <h5>4.99€</h5>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>
<?php    }
}
?>