<?php
class VueConsoles{

	public function __construct () {

	}

    function afficherContenueConsoles(){
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
                        <a href="index.php?module=produit&action=produit&idp=1"><img src="img/imgProduits/CONSOLE _ PS5.png"></a>
                        <div id="trait"></div>
                        <h4>Sony PlayStation 5 Edition Standard</h4>
                        <h5>499.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=2"><img src="img/imgProduits/sony-ps5-digital-edition.jpg"></a>
                        <div id="trait"></div>
                        <h4>Sony PlayStation 5 Edition Digitale</h4>
                        <h5>399.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=3"><img src="img/imgProduits/CONSOLE _ XBOX SERIES X.png"></a>
                        <div id="trait"></div>
                        <h4>Xbox Series X</h4>
                        <h5>499.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 2 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=4"><img src="img/imgProduits/CONSOLE _ XBOX SERIES S.png"></a>
                        <div id="trait"></div>
                        <h4>Xbox Series S</h4>
                        <h5>299.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=6"><img src="img/imgProduits/CONSOLE _ XBOX ONE X.png"></a>
                        <div id="trait"></div>
                        <h4>Xbox One X</h4>
                        <h5>259.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=7"><img src="img/imgProduits/CONSOLE _ XBOX ONE S.png"></a>
                        <div id="trait"></div>
                        <h4>Xbox One S</h4>
                        <h5>299.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 3 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=5"><img src="img/imgProduits/CONSOLE _ PS4.png"></a>
                        <div id="trait"></div>
                        <h4>Sony PlayStation 4 Pro</h4>
                        <h5>299.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=38"><img src="img/imgProduits/nintendoswitch.jpg"></a>
                        <div id="trait"></div>
                        <h4>Console Nintendo Switch</h4>
                        <h5>319.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=41"><img src="img/imgProduits/PackPS5Morales.jpg"></a>
                        <div id="trait"></div>
                        <h4>Pack PS5 Standard Edition+ SpiderMan</h4>
                        <h5>519.99€</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php    }
}
?>