<?php
class VueRecherche{

	public function __construct () {

	}

    function afficherPageProduitRecherche($produitrechercher){
        
?>
        <!-- Titre -->
        <div class="container">
            <div class="titreTriPage">
                <div id="titre_elements_sans_trait">
                    <h1>Résultats</h1>
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
        <?php
        if($produitrechercher == null){
        ?>
            <div align=center>
               <h1> Aucun résultat </h1>
            </div>
        <?php
        }
        ?>
        <!-- Produits -->
        <div class="presentation_produits">
            <div class="ligne">
                <?php
                $i = 0;
                foreach($produitrechercher as $key => $value){
                ?>
                    <div class="pre_prod">
                        <div class="pre_prod_container">
                            <a href="index.php?module=produit&action=produit&idp=<?php echo $produitrechercher[$i]['IdProduit']; ?>"><img src="<?php echo $produitrechercher[$i]['Image'] ?>"></a>
                            <div id="trait"></div>
                            <h4><?php echo $produitrechercher[$i]['NomProduit'] ?></h4>
                            <div class="avis">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5><?php echo $produitrechercher[$i]['Prix'] ?></h5>
                        </div>
                    </div>
                <?php
                    $i++;
                } 
                ?>   
            </div> 
        </div>

    </div>
<?php    
    }
}
?>