<?php
class VueAccueil{

	public function __construct () {

	}

    function afficherContenueAccueil(){
?>  
    <!-- Slider -->

<div class="img_sliderPPL">
    <div class="img_slider">
      <div class="slide active">
        <img id="sliderPPL" src="img/banner-1.png">
        <div class="info">
            <p id="titre_slide"> La PlayStation®5 est arrivée ! </p>
            <p>Bienvenue dans un nouvel univers d'immersion. Découvrez les performances exceptionnelles de la nouvelle génération. Disponible en version digital et standard. </p>
            <a href="index.php?module=produit&action=produit&idp=1">Disponible Maintenant</a>
        </div>
      </div>
      <div class="slide">
        <img id="sliderPPL" src="img/banner-2.png">
        <div class="info">
            <p id="titre_slide">Découvrez les nouveautés sur toutes les plateformes</p>
            <p> Venez décourvrir les nouveautés du moment ainsi que des promotions exclusives sur toutes les plateformes</p>
            <a href="index.php?module=jeux&action=default">Découvrir</a>
        </div>
      </div>
      <div class="slide">
        <img id="sliderPPL" src="img/banner-3.png">
        <div class="info">
            <p id="titre_slide">La nouvelle génération de console est arrivée</p>
            <p>Découvrez les dernières consoles de Microsoft avec la Xbox Series X et la Xbox Series S, passez à la vitesse supérieur et explorez de nouvelles façon de jouer</p>
            <a href="index.php?module=produit&action=produit&idp=3">Disponible Maintenant</a>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>
</div>
<!-- Javascript Slider -->

    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        // Mouvement par click
        var manualNav = function(manual) {
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                btn.classList.remove('active');
                });
            });
            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        };

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });

        // Mouvement automatique
        var repeat = function(activeClass) {
        let active = document.getElementsByClassName('active');
        let i = 1;

            var repeater = () => {
                setTimeout(function() {
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });
                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if(slides.length == i) {
                        i=0;
                    }
                    if(i >= slides.length) {
                        return;
                    }
                repeater();
                }, 10000);
            }
        repeater();
        }
    repeat();
    </script>

<!-- Nouveautés -->

    <div class="container">
        <div id="titre_elements">
            <h1>NOUVEAUTÉS</h1>
        </div>
        <div class="produits">
            <div class="produit">
                <img src="img/prod_xbox_s.png" width="230px" height="290px">
                <h4>Xbox Series S</h4>
                <h5>299.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=4">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/prod_xbox_x.png" width="230px" height="290px">
                <h4>Xbox Series X</h4>
                <h5>499.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=3">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/imgProduits/PS5 _ 1.png" width="230px" height="290px">
                <h4>NBA 2K21</h4>
                <h5>74.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=8">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/prod_ps5.png" width="230px" height="290px">
                <h4>Sony PlayStation 5 Standard</h4>
                <h5>499.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=1">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/imgProduits/PS5 _ 2.png" width="230px" height="290px">
                <h4>Call of Duty : Cold War</h4>
                <h5>64.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=11">Acheter</a>
            </div>
        </div>
    </div>

<!-- Section Présentation produits 1 -->

    <div class="big-container">
        <div class="SP_1">
            <img src="img//sectionPresentation_1.png">
            <a id="btn-SP_1" href="index.php?module=produit&action=produit&idp=39">ACHETER MAINTENANT <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="SP_2">
            <img src="img/sectionPresentation_2.png">
            <a id="btn-SP_2" href="index.php?module=produit&action=produit&idp=16">ACHETER MAINTENANT <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="SP_3">
            <img src="img/sectionPresentation_3.png">
            <div class="btn-SP_3">
                <a id="btn-SP_3et4" href="index.php?module=produit&action=produit&idp=35">ACHETER MAINTENANT</a>
            </div>
        </div>
        <div class="SP_4">
            <img src="img/sectionPresentation_4.png">
            <div class="btn-SP_4">
                <a id="btn-SP_3et4" href="index.php?module=produit&action=produit&idp=32">ACHETER MAINTENANT</a>
            </div>
        </div>
    </div>

<!-- Promotions -->

    <div class="container">
        <div id="titre_elements">
            <h1>PROMOTIONS</h1>
        </div>
        <div class="produits">
            <div class="produit">
                <img src="img/imgProduits/PS4 _ 5.png" width="230px" height="290px">
                <h4>Call of Duty : Modern Warfare</h4>
                <h5>54.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=18">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/imgProduits/PS5 _ 3.png" width="230px" height="290px">
                <h4>Spider-Man : Miles Morales</h4>
                <h5>59.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=10">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/imgProduits/PS4 _ 4.png" width="230px" height="290px">
                <h4>The Last of Us : Part II</h4>
                <h5>39.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=17">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/imgProduits/smashbros.jpg" width="230px" height="290px">
                <h4>Super Smash Bros</h4>
                <h5>51.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=48">Acheter</a>
            </div>
            <div class="produit">
                <img src="img/imgProduits/marioOdyssey.png" width="230px" height="290px">
                <h4>Super Mario Odyssey</h4>
                <h5>45.99€</h5>
                <a id="btn-produit" href="index.php?module=produit&action=produit&idp=42">Acheter</a>
            </div>
        </div>
    </div>

<!-- Section Présentation produits 2 -->

    <div class="SPP_2">
        <img src="img/SPP_2.png">
        <div class="SPP_2Texte">
            <h1>Sauvez New York dans Spider-Man Miles Morales </h1>
            <p>Découvrez la suite des aventures de Spider-Man, <br>en incarnant Miles Morales, le nouveau héros de l'univers Marvel. <br>Il est temps pour vous d'enfiler le costume ! </p>
            <a href="index.php?module=produit&action=produit&idp=41"><i class="fa fa-arrow-left" aria-hidden="true"></i> ACHETER MAINTENANT</a>
        </div>
    </div>

<!-- Informations Complémentaires -->

    <div class="infoComp">
        <img src="img/infoComp.png">
    </div>
    <?php    }
}
?>