<div class="small-12 medium-6 large-3 columns animated fadeIn article-montre">
    <div id="img-mini" class="watches-img">
        <a href='<?php the_permalink(); ?>'>
            <div class="hover-thumbnail-cart">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="hover-thumbnail-search">
                <img src="<?= _URL_IMAGES; ?>/_visuels_dyns/search.svg" alt="Voir ce modèle"/>
                <span>Voir ce modèle</span>
            </div>
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <span>
        <!--<h4><?php the_excerpt(); ?></h4>-->
        <h3 class="title-article-montre"><?php the_title(); ?></h3>
        <span class="price-white"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>€</span>
        <!--<a class="add_to_cart" href="<?php the_permalink(); ?>">Ajouter au panier</a>-->

        <!--<a rel="nofollow" href="/www.horizon.fr/index.php/panier" data-quantity-"1" data-product_sku class="ajouter nouveaux-arrivants">Ajouter au panier</a>-->
        <form class="cart add-to-cart-accueil" method="post" enctype="multipart/form-data">
            <input type="hidden" name="add-to-cart" value="20">
        	<button type="submit" class="single_add_to_cart_button button alt ajouter best-sales">Ajouter au panier</button>
        </form>
    </span>
</div>
