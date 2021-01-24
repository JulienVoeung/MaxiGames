<?php
class VueProduit{

	public function __construct () {

    }
    
    function afficherMonPanier(){
?> 
    
<?php
    }

    function afficherPageProduit($produitinfo,$produitavis,$noteproduit){
    
?>        

    <!-- Presentation du produit  -->

    <div class="pageProduitContainer">
        <div class="presentationProduit">
            <div class="sectionGauche">
                <div id="imageProduit">
                    <img src="<?php    echo $produitinfo['Image'];    ?>">
                </div>
            </div>
            <div class="sectionDroite">
                <div id="titreProduit">
                    <h1><?php    echo $produitinfo['NomProduit'];   ?></h1>
                </div>
                <div class="avisProduit">
                    <div class="avis">
                        <?php   if($noteproduit == 0){   ?>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <?php   }                             ?>
                        <?php   if($noteproduit == 1){   ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php   }                             ?>
                        <?php   if($noteproduit == 2){   ?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <?php   }                             ?>
                        <?php   if($noteproduit == 3){   ?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <?php   }                             ?>
                        <?php   if($noteproduit == 4){   ?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <?php   }                             ?>
                        <?php   if($noteproduit == 5){   ?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <?php   }                             ?>
                    </div>
                </div>
                <div id="prixProduit">
                    <p> <?php    echo $produitinfo['Prix'];   ?> € </p>
                </div>
                <?php 
                    if($produitinfo['Stock'] > 0){
                    ?>
                        <div id="stockProduit">
                            <p>En Stock : <?php echo $produitinfo['Stock']; ?>  </p>
                        </div>
<?php               }   
                    else{
                    ?>
                        <div id="epuiseProduit">
                            <p>Produit épuisé</p>
                        </div>
<?php               }  
                ?>
                
                <div class="descriptionProduit">
                    <h3>Description</h3>
                    <div id="descriptionProduitTexte">
                        <p><?php    echo $produitinfo['Description'];    ?></p>
                    </div>
                </div> 
<?php               if($produitinfo['Stock'] > 0){   ?>
                        <div class="boutton_cta_panier">
                            <a href="index.php?module=produit&action=ajouterPanier&idp=<?php    echo $produitinfo['IdProduit'];    ?>">AJOUTER AU PANIER</a>
                        </div>
        <?php       }  ?>
                <p id=err >     <?php   if(isset($_GET['err'])){
                                    if($_GET['err'] == "Connectez vous pour commander"){
                                        echo "Connectez vous pour commander";
                                    }
                                }   ?>       
                </p>
            </div>
        </div>

<!-- Avis Clients Disponibles -->

        <div class="avisClientsDispoContainer">
            <!-- avis 1 -->
            <div class="avisClientsDispo">
                <div id="avisClientsDispoTitre">
                    <h1>Avis clients</h1>
                </div>
                <?php
                    $i = 0;
                    $j = 0;
                    $somme = 0;
                    foreach($produitavis as $key => $value){
                        
                ?>
                        <!-- Avis 1 -->
                        <div class="avisClientsDispoPetitConteneur">
                                <div id="nomClientDispo">
                                    <p><?php    echo $produitavis[$i]['PseudoAvis'];  ?></p>
                                </div>
                                <div id="dateAvisClientDispo">
                                    <p><?php    echo $produitavis[$i]['Date'];    ?></p>
                                </div>
                                <?php 
                                if(isset($_SESSION['Admin'])){
                                if($_SESSION['Admin'] == 1){
                                ?>
                                    <div class="signal">
                                        <a id="liensignal" href="index.php?module=produit&action=supprimerAvis&idavis=<?php    echo $produitavis[$i]['idAvis'];    ?>&idp=<?php    echo $produitinfo['IdProduit'];    ?>">Supprimer</a>
                                    </div>
                                <?php
                                }
                                else if($_SESSION['Admin'] == 0){
                                ?>
                                    <div class="signal">
                                        <a id="liensignal" href="index.php?module=produit&action=signalerAvis&idavis=<?php    echo $produitavis[$i]['idAvis'];    ?>&idp=<?php    echo $produitinfo['IdProduit'];    ?>">Signaler</a>
                                    </div>
                                <?php
                                }
                                }
                                ?>
                            <div class="avisClientDispoProduit">
                                <div class="avis">
                                <?php    if($produitavis[$i]['Note']==0){   ?>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                <?php    }                                          ?>
                                <?php    if($produitavis[$i]['Note']==1){   ?>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                <?php    }                                          ?>
                                <?php    if($produitavis[$i]['Note']==2){   ?>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                <?php    }                                          ?>
                                <?php    if($produitavis[$i]['Note']==3){   ?>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                <?php    }                                          ?>
                                <?php    if($produitavis[$i]['Note']==4){   ?>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                <?php    }                                          ?>
                                <?php    if($produitavis[$i]['Note']==5){   ?>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                <?php    }                                          ?>
                                </div>
                            </div>
                            <div id="paragrapheAvisClientDispo">
                                <p><?php    echo $produitavis[$i]['DescriptionAvis'];    ?></p>
                            </div>
                            
                        </div> 
                    <?php
                        $i = $i + 1;
                    }
                ?>
            </div>
        </div>

<!-- Formulaire avis clients -->

<div class="conteneurFormulaireAvisClients">
            <div class="formulaireAvisClients">
                <!-- Form -->
	            <form action="index.php?module=produit&action=ajouterAvis&idp=<?php    echo $produitinfo['IdProduit'];    ?>" method="POST">
                <div class="titreFormulaire">
                    <h1>Mettre un commentaire :</h1>
                </div>
                <div class="choixEtoilesClient">
                    <label for="choixEtoiles">Note :</label>
                    <select name="note" id="tri_produits">
                        <option value="">-- Note --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="espaceFormulaire">
                    <label for="commentaire">Commentaire :</label>
                    <textarea name="descriptionavis" id="" cols="264" rows="9"></textarea>
                </div>
                <p id=err style="color:red;">     <?php   if(isset($_GET['err'])){
                                    if($_GET['err'] == "Connectez vous pour poster un avis"){
                                        echo "Connectez vous pour poster un avis";
                                    }
                                }   ?>       
                </p>
                <!-- button -->
		        <div id="boutonavis">
			        <button type="submit" name="formavis"> Envoyer </button>
		        </div>
	            </form>	
            </div>
        </div>
    </div>

<?php    }

    function afficherPanier($userpanier, $produitpanierinfo){

?>
<!-- Page Panier -->

<div class="container">
    <div class="titrePagePanier">
        <div id="titre_elements_sans_trait">
            <h1>MON PANIER</h1>
        </div>
    </div>
    <div class="traitHorizontal"></div>
    <div class="produitPanier">
        <div class="sectionRecapProduit">
            <h2>Récapitulatif de votre commande</h2>

            <!-- Ajout produits ici -->
            <?php
                $i = 0;
                $prixtot = 0;
                if($userpanier == null){
            ?>
                    <div align=center>
                        <h1> Votre panier est tristement vide :( </h1>
                    </div>
            <?php
                }
                foreach($userpanier as $key => $value){
                    
            ?>
                    <div class="prodPanier">
                        <img src="<?php echo $produitpanierinfo[$i]['imgProduit']; ?>" alt="">
                        <p><?php echo $produitpanierinfo[$i]['nomProduit']; ?></p>
                        <h2><?php echo $produitpanierinfo[$i]['prixProduit']*$userpanier[$i]['NombreProduit']; ?>€</h2>
                        <div class="quantiteProduitPanier">
                            <h3>Quantité : <?php echo $userpanier[$i]['NombreProduit']; ?> </h3>
                        </div>
                        <a href="index.php?module=produit&action=enleverproduitpanier&idp=<?php echo $userpanier[$i]['idProduit']; ?>">Supprimer</a>
                    </div>
                <?php
                    $prixtot = $prixtot + $produitpanierinfo[$i]['prixProduit']*$userpanier[$i]['NombreProduit'];
                    $i = $i + 1;
                }
                ?>
        </div>
        <?php
        if($userpanier == null){
            
        }
        else{ ?>
            <div class="sectionDroitePanier">
                <div class="sectionPrixTotal">
                    <h2>Total</h2>
                    <div class="sousTotal">
                        <p id="ST">Sous total :</p>
                        <p id="prixProduits"><?php echo $prixtot; ?>€</p>
                    </div>
                    <div class="livraison">
                    <?php   if($prixtot >= 50){
                                $prixlivraison = 0;
                            }
                            else{
                                $prixlivraison = 9.99;
                            }       ?>
                        <p id="livr">Livraison :</p>
                        <p id="prixLivr"><?php echo $prixlivraison; ?>€</p>
                    </div>
                    <div class="total">
                        <p id="tot">Total</p>
                        <p id="prixTot"><?php echo $prixtot + $prixlivraison; ?>€</p>
                    </div>
                    <a id="boutonPaiementPanier" href="index.php?module=transaction&action=formpaie">Commander</a>
                </div>
                <div class="sectionReduction">
                    <div class="reduction">
                        <form action="" method="post">
                            <input type="text" placeholder="  Entrer un code de réduction "name="reduction" id="barreDeReduction">
                            <a href="#">Ajouter</a>
                        </form>
                    </div>
                </div>
            </div> 
        <?php
        }
        ?>
    </div>
</div>

<?php
    }

}
?>