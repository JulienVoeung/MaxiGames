<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>MaxiGames</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

<!-- Menu -->

    <div class="header">
        <div class="container">
            <header>
               <a href="index.php"><img src="img/logo.png" alt="" width="150px"></a>
               <div class="barreDeRecherche">
                    <form action="index.php?module=recherche&action=default" method="post">
                        <input type="text" placeholder="  Rechercher..." name="rechercher" id="barreDeRecherche">
                        <div class="boutonRecherche">
                            <button type="submit" name="formRecherche">Rechercher</button>
                        </div>
                    </form>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?module=consoles&action=default">Consoles</a></li>
                        <li><a href="index.php?module=jeux&action=default">Jeux</a></li>
                        <li><a href="index.php?module=accessoires&action=default">Accessoires</a></li>
                        <li><a href="index.php?module=occasion&action=default">Occasion</a></li>
                        <li><a href="index.php?module=connexion&action=FormConnexion" class="btn-compte" title="Mon Compte"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                        <li><a href="index.php?module=connexion&action=EspaceMembre"><?php  if(isset($_SESSION['Pseudo'])){
                                        echo $_SESSION['Pseudo'];
                                    }   ?></a>  
                        </li>
                        <li><a href="index.php?module=produit&action=monPanier" class="btn-compte" title="Mon Panier"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>

<?php

    if (isset($_GET["module"])){
        $module = $_GET["module"];
    }
    else{
        $module = "accueil";
    }

    switch ($module) {

        case 'accueil':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'consoles':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'jeux':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'accessoires':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'occasion':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'transaction':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'connexion':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'produit':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'recherche':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        case 'messagerie':
            include_once "Modules/mod_$module/mod_$module.php";
            break;
        default:
            die("interdiction");
    }

    if (isset($module)) {
        $nom_class = "Mod" . $module;
        $mod = new $nom_class();
    }

?>


<!-- Footer -->

<div class="footer">
        <div class="container">
            <footer>
                <div class="footerSection_1">
                    <h2>CONTACT</h2>
                    <h4>Adresse :</h4>
                    <p>156 rue de France,<br>93100, Montreuil</p>
                    <h4>Email :</h4>
                    <p>maxigames@contact.fr</p>
                    <h4>Appel :</h4>
                    <p>+(33) 4531449664</p>
                    <h4>Horaires :</h4>
                    <p>Du Lundi au Vendredi<br>De 9h00 à 18h00</p>
                </div>
                <div class="footerSection_2">
                    <div class="footerSection_2">
                        <h2>LIENS UTILES</h2>
                        <ul>
                            <li><a href="index.php?module=consoles&action=default">Consoles</a></li>
                            <li><a href="index.php?module=jeux&action=default">Jeux</a></li>
                            <li><a href="index.php?module=accessoires&action=default">Accessoires</a></li>
                            <li><a href="index.php?module=occasion&action=default">Occasion</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footerSection_3">
                    <h2>À PROPOS</h2>
                    <ul>
                        <li><a href="">Conditions d'utilisation</a></li>
                        <li><a href="">Données personnelles</a></li>
                        <li><a href="">Conditions de vente</a></li>
                        <li><a href="">Mentions légales</a></li>
                    </ul>
                </div>
                <div class="footerSection_4">
                    <h2>RÉSEAUX</h2>
                    <ul>
                        <li><a href="https://www.snapchat.com/l/fr-fr/"><img src="img/snapchat.png"></a> Snapchat</li>
                        <li><a href="https://www.instagram.com/maxigame_12/"><img src="img/instagram.png"></a> Instagram</li>
                        <li><a href="https://twitter.com/Jvl944"><img src="img/twitter.png"></a> Twitter</li>
                        <li><a href="https://www.facebook.com/EmmanuelMacron/?ref=nf&hc_ref=ARR7MZnub_-Z5NjvqImclUwXebkZyzOYNlNpL09WXHGcqzCyF7Psa12g5mjvOQ3WNQk&__tn__=%3C-R"><img src="img/facebook.png"></a> Facebook</li>
                    </ul>
                </div>
            </footer>
            <div id="logo_footer">
                <img src="img/logo.png">
            </div>
            <div id="copyright">
                <p>MaxiGames © Copyright 2020, Tous droits réservés</p>
            </div>
        </div>
    </div>
</body>
</html>


