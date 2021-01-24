<?php
class VueJeux{

	public function __construct () {

	}

    function afficherContenueJeux1(){
?> 

<!-- Titre -->

    <div class="container">
        <div class="titreTriPage">
            <div id="titre_elements_sans_trait">
                <h1>JEUX</h1>
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
                        <a href="index.php?module=produit&action=produit&idp=8"><img src="img/imgProduits/PS5 _ 1.png"></a>
                        <div id="trait"></div>
                        <h4>NBA 2K21 PS5</h4>
                        <h5>74.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=11"><img src="img/imgProduits/PS5 _ 2.png"></a>
                        <div id="trait"></div>
                        <h4>Call of Duty : Cold War PS5</h4>
                        <h5>64.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=10"><img src="img/imgProduits/PS5 _ 3.png"></a>
                        <div id="trait"></div>
                        <h4>Spider-Man : Miles Morales PS5</h4>
                        <h5>59.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 2 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=13"><img src="img/imgProduits/PS5 _ 4.png"></a>
                        <div id="trait"></div>
                        <h4>Watch-Dogs : Legion PS5</h4>
                        <h5>64.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=26"><img src="img/imgProduits/FIFA-21-PS5.png"></a>
                        <div id="trait"></div>
                        <h4>FIFA 21 PS5</h4>
                        <h5>79.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=27"><img src="img/imgProduits/FIFA-21-Xbox-Series-X.png"></a>
                        <div id="trait"></div>
                        <h4>FIFA 21 Xbox Series X</h4>
                        <h5>79.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 3 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=15"><img src="img/imgProduits/PS4 _ 2.png"></a>
                        <div id="trait"></div>
                        <h4>Cyberpunk 2077 PS4</h4>
                        <h5>56.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=16"><img src="img/imgProduits/Cyberpunk-2077-Edition-Day-One-Xbox-One.jpg"></a>
                        <div id="trait"></div>
                        <h4>Cyberpunk 2077 Xbox One </h4>
                        <h5>56.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=12"><img src="img/imgProduits/CALL-OF-DUTY-Black-Ops-Cold-War-Xbox-Series-X.jpg"></a>
                        <div id="trait"></div>
                        <h4>Call of Duty : Black Ops Cold War Xbox</h4>
                        <h5>64.99€</h5>
                    </div>
                </div>
            </div>
        </div>

<!-- Pagination -->

        <div class="pagination">
            <ul>
                <i class="bi bi-arrow-right-short"></i>
                <li><a href="index.php?module=jeux&action=jeux1">1</a></li>
                <li><a href="index.php?module=jeux&action=jeux2">2</a></li>
                <li><a href="index.php?module=jeux&action=jeux3">3</a></li>
                <li><a href="index.php?module=jeux&action=jeux4">4</a></li>
            </ul>
        </div>
    </div>
    <?php    }

    function afficherContenueJeux2(){
?> 

<!-- Titre -->

<div class="container">
        <div class="titreTriPage">
            <div id="titre_elements_sans_trait">
                <h1>JEUX</h1>
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
                        <a href="index.php?module=produit&action=produit&idp=9"><img src="img/imgProduits/NBA-2K21-Xbox-Series-X.jpg"></a>
                        <div id="trait"></div>
                        <h4>NBA 2K21 Xbox Series X</h4>
                        <h5>74.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=14"><img src="img/imgProduits/Watch-Dogs-Legion-Xbox-One.png"></a>
                        <div id="trait"></div>
                        <h4>Watch-Dogs : Legion Xbox Series X</h4>
                        <h5>64.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=17"><img src="img/imgProduits/PS4 _ 4.png"></a>
                        <div id="trait"></div>
                        <h4>The Last of Us II PS4</h4>
                        <h5>39.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 2 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=18"><img src="img/imgProduits/PS4 _ 5.png"></a>
                        <div id="trait"></div>
                        <h4>Call of Duty Modern Warfare PS4</h4>
                        <h5>54.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=19"><img src="img/imgProduits/Call-of-Duty-Modern-Warfare-Xbox-One.png"></a>
                        <div id="trait"></div>
                        <h4>Call of Duty Modern Warfare Xbox One</h4>
                        <h5>49.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=20"><img src="img/imgProduits/PS4 _ 3.png"></a>
                        <div id="trait"></div>
                        <h4>Metro Exodus PS4</h4>
                        <h5>29.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 3 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=21"><img src="img/imgProduits/PS4 _ 1.png"></a>
                        <div id="trait"></div>
                        <h4>Minecraft PS4</h4>
                        <h5>29.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=22"><img src="img/imgProduits/Minecraft-Starter-Collection-Xbox-One.jpg"></a>
                        <div id="trait"></div>
                        <h4>Minecraft Xbox One </h4>
                        <h5>29.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=23"><img src="img/imgProduits/Metro-Exodus-Xbox-One.png"></a>
                        <div id="trait"></div>
                        <h4>Metro Exodus Xbox One</h4>
                        <h5>29.99€</h5>
                    </div>
                </div>
            </div>
        </div>

<!-- Pagination -->

        <div class="pagination">
            <ul>
                <i class="bi bi-arrow-right-short"></i>
                <li><a href="index.php?module=jeux&action=jeux1">1</a></li>
                <li><a href="index.php?module=jeux&action=jeux2">2</a></li>
                <li><a href="index.php?module=jeux&action=jeux3">3</a></li>
                <li><a href="index.php?module=jeux&action=jeux4">4</a></li>
            </ul>
        </div>
    </div>
<?php
    }

    function afficherContenueJeux3(){
?>

<!-- Titre -->

<div class="container">
        <div class="titreTriPage">
            <div id="titre_elements_sans_trait">
                <h1>JEUX</h1>
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
                        <a href="index.php?module=produit&action=produit&idp=24"><img src="img/imgProduits/farcry5ps4.png"></a>
                        <div id="trait"></div>
                        <h4>Far Cry 5 PS4</h4>
                        <h5>19.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=25"><img src="img/imgProduits/Far-Cry-5-Xbox-One.png"></a>
                        <div id="trait"></div>
                        <h4>Far Cry 5 Xbox One</h4>
                        <h5>19.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=28"><img src="img/imgProduits/eFootball-PES-2021-PS4.png"></a>
                        <div id="trait"></div>
                        <h4>eFootball PES 2021 PS4</h4>
                        <h5>19.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 2 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=29"><img src="img/imgProduits/eFootball-PES-2021-Xbox-One.png"></a>
                        <div id="trait"></div>
                        <h4>eFootball PES 2021 Xbox One</h4>
                        <h5>19.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=30"><img src="img/imgProduits/Grand-Theft-Auto-V-Edition-Premium-Online-PS4.png"></a>
                        <div id="trait"></div>
                        <h4>Grand Theft Auto V Edition Premium PS4</h4>
                        <h5>19.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=31"><img src="img/imgProduits/OCC-GRAND-THEFT-AUTO-V.png"></a>
                        <div id="trait"></div>
                        <h4>Grand Theft Auto V Edition Premium Xbox</h4>
                        <h5>19.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 3 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=47"><img src="img/imgProduits/ufc4PS4.jpg"></a>
                        <div id="trait"></div>
                        <h4>UFC 4 PS4</h4>
                        <h5>69.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=46"><img src="img/imgProduits/ufc4Xbox.jpg"></a>
                        <div id="trait"></div>
                        <h4>UFC 4 Xbox</h4>
                        <h5>69.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=51"><img src="img/imgProduits/pokemon-lets-go-eevee-switch-cover.jpg"></a>
                        <div id="trait"></div>
                        <h4>Pokemon Let's Go Evoli Nintendo Switch</h4>
                        <h5>46.99€</h5>
                    </div>
                </div>
            </div>
        </div>

<!-- Pagination -->

        <div class="pagination">
            <ul>
                <i class="bi bi-arrow-right-short"></i>
                <li><a href="index.php?module=jeux&action=jeux1">1</a></li>
                <li><a href="index.php?module=jeux&action=jeux2">2</a></li>
                <li><a href="index.php?module=jeux&action=jeux3">3</a></li>
                <li><a href="index.php?module=jeux&action=jeux4">4</a></li>
            </ul>
        </div>
    </div>
<?php
    } 

    function afficherContenueJeux4(){
?> 
    <!-- Titre -->

<div class="container">
        <div class="titreTriPage">
            <div id="titre_elements_sans_trait">
                <h1>JEUX</h1>
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
                        <a href="index.php?module=produit&action=produit&idp=39"><img src="img/imgProduits/Aain-s-Creed-Valhalla-PS5.jpg"></a>
                        <div id="trait"></div>
                        <h4>Assassin's Creed Valhalla PS5</h4>
                        <h5>56.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=40"><img src="img/imgProduits/Aain-s-Creed-Valhalla-Xbox.jpg"></a>
                        <div id="trait"></div>
                        <h4>Assassin's Creed Valhalla Xbox</h4>
                        <h5>56.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=42"><img src="img/imgProduits/marioOdyssey.png"></a>
                        <div id="trait"></div>
                        <h4>Super Mario Odyssey Nintendo Switch</h4>
                        <h5>45.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 2 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=43"><img src="img/imgProduits/zeldaswitch.jpg"></a>
                        <div id="trait"></div>
                        <h4>Zelda : Breath of the wild Nintendo Switch</h4>
                        <h5>51.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=44"><img src="img/imgProduits/animalcrossing.png"></a>
                        <div id="trait"></div>
                        <h4>Animal Crossing Nintendo Switch</h4>
                        <h5>46.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=45"><img src="img/imgProduits/mariokart.png"></a>
                        <div id="trait"></div>
                        <h4>Mario Kart 8 Deluxe Nintendo Switch</h4>
                        <h5>48.99€</h5>
                    </div>
                </div>
            </div>
            <!-- Ligne 3 -->
            <div class="ligne">
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=49"><img src="img/imgProduits/12switch.png"></a>
                        <div id="trait"></div>
                        <h4>1 2 Switch Nintendo Switch</h4>
                        <h5>36.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=48"><img src="img/imgProduits/smashbros.jpg"></a>
                        <div id="trait"></div>
                        <h4>Super Smash Bros Nintendo Switch</h4>
                        <h5>51.99€</h5>
                    </div>
                </div>
                <div class="pre_prod">
                    <div class="pre_prod_container">
                        <a href="index.php?module=produit&action=produit&idp=50"><img src="img/imgProduits/splatoon2.jpg"></a>
                        <div id="trait"></div>
                        <h4>Splatoon 2 Nintendo Switch</h4>
                        <h5>45.99€</h5>
                    </div>
                </div>
            </div>
        </div>

<!-- Pagination -->

        <div class="pagination">
            <ul>
                <i class="bi bi-arrow-right-short"></i>
                <li><a href="index.php?module=jeux&action=jeux1">1</a></li>
                <li><a href="index.php?module=jeux&action=jeux2">2</a></li>
                <li><a href="index.php?module=jeux&action=jeux3">3</a></li>
                <li><a href="index.php?module=jeux&action=jeux4">4</a></li>
            </ul>
        </div>
    </div>
<?php
    } 
}
?>