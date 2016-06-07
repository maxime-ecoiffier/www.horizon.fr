<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- SCROLLBAR -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/stylesheets/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/stylesheets/scrollBar-style.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/horizon-favicon.png" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--<section class="content large-12 columns" id="content-4">-->
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header>
		<div class="row">
			<div class="small-6 columns logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_visuels_dyns/horizon-logo-accueil.png" alt="horizon-logo" width="294" height="63"/></a>
			</div>
			<div class="small-6 columns menu-cart">
				<ul class="menu-technique">
					<li><a href="#" class="connexion">S'inscrire</a></li>
					<li><a href="#" class="connexion">Se connecter</a></li>
					<li><a href="/www.horizon.fr/index.php/panier">
						<span>
							Mon panier
							(<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>)
						</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="clr"></div>
		<div class="bg-black">
			<div class="row">
				<div class="small-12 medium-8 columns main-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
				</div>
				<div class="hide-for-small-only medium-4 columns form-menu">
					<form action="#" method="POST" class="search">
						<div class="recherche">
							<!--<input type="text" placeholder="Rechercher" id="search"/>
							<input class="loupe-search" type="submit" name="Valider" value="" />-->
							<?php get_search_form( ); ?>
						</div>
					</form>
						<select class="filtres">
							<option selected>Filtrer </option>
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
						</select>
				</div>
			</div>
		</div>
	</header>
	<section class="container">


		<?php
				// --> Injection slider my_slider 10
				do_action( 'foundationpress_after_header' );
