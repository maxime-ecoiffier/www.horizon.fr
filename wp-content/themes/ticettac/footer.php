<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<div id="footer-container">
	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>

		<div class="large-4 medium-4 small-12 columns footer-1">
				<h3>Informations</h3>
				<ul class="text-footer">
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>À propos de nous</a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Contactez-nous</a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Confidentialité </a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Plan du site</a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Cédits</a></li>
				</ul>
		</div>
		<div class="large-4 medium-4 small-12 columns footer-2">
			<div class="container-footer-bloc">
				<h3>Aide et assistance</h3>
				<ul class="text-footer">
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Mentions légales</a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Livraison & retours</a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/puces.png" alt=""/>Conditions générales de ventes</a></li>
				</ul>
			</div>
			<div>
				<h3>Paiements sécurisés</h3>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/paiements-securises-icones.png" alt="" />
			</div>
		</div>
		<div class="large-4 medium-4 small-12 columns footer-3">
			<div class="container-footer-bloc">
				<h3>Suivez-nous sur les réseaux sociaux</h3>
				<ul class="social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div>
			<div class="newsletter">
				<h3>NEWSLETTER</h3>
				<form method="post" action="#">
					<input type="text" placeholder="Votre adresse e-mail" />
					<input type="submit" value="OK" />
				</form>
			</div>
		</div>
	</footer>
	<div class="copyright large-12 column text-center">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/logo-horizon-white.png" alt="copyright" width="90"/>
		<p>
			©2016 - Horizon by <a href="http://www.monkeyz.fr" target="_blank">Monkeyz.fr</a>
		</p>
	</div>
</div>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<!-- Google CDN jQuery with fallback to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/javascript/jquery-1.11.0.min.js"><\/script>')</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/javascript/jquery-1.9.1.min.js"></script>

<script type="text/javascript">

$('a.icon-arrow-continue').on('click', function(event) {
var target = $(".nouveaux-arrivants");
if( target.length ) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: target.offset().top
	}, 1000);
}
});
$('#woocommerce_product_categories-3 > select.dropdown_product_cat > option:first-of-type').replaceWith('<option value>Marques</option>');
$('#woocommerce_layered_nav-5 > select.dropdown_layered_nav_cadran > option:first-of-type').replaceWith('<option value>Cadran</option>');
$('.full-watches > ul.products > li > a > img').after('<span>Voir le modèle</span>');
</script>
</body>
</html>
