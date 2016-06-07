<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;
global $product;


/*$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( '', 'woocommerce' ) ) );*/

?>

<?php //if ( $heading ): ?>
  <h2 class="description-produit"><?php the_title(); ?></h2>
<?php //endif; ?>

<div class="row container-description">
	<div class="large-6 columns description-produit">
		<h3 class="title-description">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/puce-scroll.svg" width="30" alt=""/>
			Description
		</h3>
		<?php the_content(); ?>
	</div>
	<div class="large-6 columns description-produit">
		<h3 class="title-description">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/puce-scroll.svg" width="30" alt=""/>
			Caractéristiques techniques
		</h3>
		<?php $product->list_attributes(); ?>
	</div>
</div>
