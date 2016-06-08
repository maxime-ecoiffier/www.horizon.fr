<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>



<div class="row">
	<div class="small-12 large-8 columns" role="main">
		<!--<a href="#" class="clicker">Click Me !</a>-->
		<div class="filtres" style="display: none;">
			<?php dynamic_sidebar( 'filtres-widgets' ); ?>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.clicker').on('click', function(e) {
					e.preventDefault();
					$('.filtres').slideDown();
				});
			});
		</script>

	</div>
	<div class="small-12 large-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<!-- LISTING PRODUIT NOUVEAUTES -------------------->

		<section class="nouveaux-arrivants">
			<h1 id="target-arrow" class="titre-section-accueil"><span class="border-title">LES NOUVEAUX ARRIVANTS</span></h1>
			<p class="text-courant">
				HORIZON vous propose tous les mois de nouveaux modèles de montres vintage.<br/>
				Découvrez-les dès maintenant sur la page des nouveautés horizon.
			</p>
			<div>
				<!-- BLOQUE LE NOMBRE DE PRODUIT A AFFICHER A 4 -->
				<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 4,
						'product_cat' => 'marques'
						//'meta_key' => 'total_sales',
						//'oderby' => 'meta_value_num'
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							get_template_part( 'template-parts/nouveaux-arrivants', get_post_format() );
						endwhile;
					} else {
						echo __( 'Erreur de chargement des produits' );
					}
					wp_reset_postdata();
				?>
			</div>
			<hr style="clear: both; border: 0px;">
			<a href="#" class="sites-button text-center">TOUTES LES NOUVEAUTÉS</a>
		</section>
		</div>
	</div>

	<!-- LES MARQUES -------------------->
	<div class="custom-row">
		<section class="NosMarques">
			<div class="separator-LR">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 2500 75" enable-background="new 0 0 2500 75;" xml:space="preserve">
				<style type="text/css">
					.st0{
						fill:#FFFFFF;
						width:100%;
						margin-left: 0px;
					}
				</style>
				<polygon class="st0" points="0,0 2500,0 0.2,75 "/>
				</svg>
			</div>
			<div class="row">
					<h1 id="target-arrow" class="titre-section-accueil-blanc"><span class="border-title">NOS MARQUES</span></h1>
					<p class="text-courant-blanc">
						HORIZON vous propose tous les mois de nouveaux modèles de montres vintage.<br/>
						Découvrez-les dès maintenant sur la page des nouveautés horizon.
					</p>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-jaeger-lecoutre.png" alt="Jaeger LeCoutre" />
					</a>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-omega.png" alt="Omega" />
					</a>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-cartier.png" alt="Cartier" />
					</a>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-breitling.png" alt="Breitling" />
					</a>


					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-rolex.png" alt="Rolex" />
					</a>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-piguet.png" alt="Piguet" />
					</a>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-zenith.png" alt="Zenith" />
					</a>
					<a href="#" class="large-3 columns logo-marques">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-marques-chanel.png" alt="Chanel" />
					</a>
			</div>
			<a href="#" class="sites-button text-center">TOUTES NOS MARQUES</a>
			<div class="separator-RL">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 2500 75" enable-background="new 0 0 2500 75" xml:space="preserve">
					<style type="text/css">
						#st1{
							fill:#FFFFFF;
							width:100%;
						}
					</style>
					<polygon id="st1" points="0,75 2500,75 0.2,0 "/>
				</svg>
			</div>
		</section>
	</div>

	<!-- LES DERNIERES ACTUALITES -------------------->

		<section class="nouveautes">
				<div class="row">
					<h1 id="target-arrow" class="titre-section-accueil"><span class="border-title">NOS DERNIÈRES NOUVEAUTÉS</span></h1>

					<a href="#" class="couverture-nouveautes large-6 columns">
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-blog-texte-news.jpg" class="bandeau" alt="Bandeau"/>
							<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-blog-image-news.jpg" class="couverture" alt="Nouveautés"/>
					</a>
					<!--
					<div class="line-news">
						<a href="#" class="nouveautes large-3 columns">
								<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-blog-new1.jpg" class="couverture" alt="Nouveautés"/>
								<span class="TitreActu">Matthew McConaughey brille avec HORIZON</span>
						</a>
						<a href="#" class="nouveautes large-3 columns">
								<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-blog-new2.jpg" class="couverture" alt="Nouveautés"/>
								<span class="TitreActu">HORIZON au 69e Festivalde Cannes</span>
						</a>
					</div>
					<div class="line-news">
						<a href="#" class="nouveautes large-3 columns">
								<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-blog-new3.jpg" class="couverture" alt="Nouveautés"/>
								<span class="TitreActu">HORIZON au Gala de l’Opéra de Paris</span>
						</a>
						<a href="#" class="nouveautes large-3 columns">
								<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-blog-new4.jpg" class="couverture" alt="Nouveautés"/>
								<span class="TitreActu">La violoniste Chika Edanami</span>
						</a>
					</div>-->

					<div class="large-6 columns">
						<?php
				            $args = array(
				                'post_type' => 'post',
				                'posts_per_page' => 4,
				                //'meta_key' => 'total_sales',
				                //'oderby' => 'meta_value_num'
				                );
				            $loop = new WP_Query( $args );
				            if ( $loop->have_posts() ) {
				                while ( $loop->have_posts() ) : $loop->the_post();
				                    get_template_part( 'template-parts/blog-item', get_post_format() );
				                endwhile;
				            } else {
				                echo __( 'Erreur de chargement des produits' );
				            }
				            wp_reset_postdata();
				        ?>
					</div>

				</div>
		</section>

		<!-- LES MEILLEURES VENTES -------------------->
		<div class="custom-row">
			<section class="MeilleuresVentes">
				<div class="separator-LR">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 2500 75" enable-background="new 0 0 2500 75;" xml:space="preserve">
					<style type="text/css">
						.st0{
							fill:#FFFFFF;
							width:100%;
						}
					</style>
					<polygon class="st0" points="0,0 2500,0 0.2,75 "/>
					</svg>
				</div>
				<div class="row">
						<h1 id="target-arrow" class="titre-section-accueil-blanc"><span class="border-title">LES MEILLEURES VENTES</span></h1>

						<!-- BLOQUE LE NOMBRE DE PRODUIT A AFFICHER A 4 ET PAR ORDRE DECROISSANT DE NOMBRE D'ACHATS-->
						<?php
							$argsBS = array(
								'post_type' => 'product',
								//'stock' => 1,
								'posts_per_page' => 4,
								'meta_key' => 'total_sales',
								'orderby' => 'meta_value_num',
								'order' => 'DESC'
								);
							$loopBS = new WP_Query( $argsBS );
							if ( $loopBS->have_posts() ) {
								while ( $loopBS->have_posts() ) : $loopBS->the_post();
									get_template_part( 'template-parts/best-sales', get_post_format() );
								endwhile;
							} else {
								echo __( 'Erreur de chargement des produits' );
							}
							wp_reset_postdata();
						?>
				</div>
				<div class="separator-RL">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 2500 75" enable-background="new 0 0 2500 75" xml:space="preserve">
						<style type="text/css">
							#st1{
								fill:#FFFFFF;
								width:100%;
							}
						</style>
						<polygon id="st1" points="0,75 2500,75 0.2,0 "/>
					</svg>
				</div>
			</section>
		</div>


		<!-- NOS ENGAGEMENTS -------------------->
		<div class="row">
			<h1 id="target-arrow" class="titre-section-accueil"><span class="border-title">NOS ENGAGEMENTS</span></h1>
			<p class="text-courant">
				Tout simplement parce que votre satisfaction est également la notre.
			</p>
			<div class="large-3 medium-3 columns text-center">
					<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-engagements-livraison.png" alt="Livraison"/>
					<p class="engagements">
						Livraison en 48 heures
					</p>
			</div>
			<div class="large-3 medium-3 columns text-center">
					<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-engagements-qualite.png" alt=""/>
					<p class="engagements">
						Des produits de qualité,<br /> testés et approuvés
					</p>
			</div>
			<div class="large-3 medium-3 columns text-center">
					<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-engagements-retours.png" alt=""/>
					<p class="engagements">
						15 jours pour changer d'avis
					</p>
			</div>
			<div class="large-3 medium-3 columns text-center">
					<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/horizon-engagements-paiement-securise.png" alt=""/>
					<p class="engagements">
						Paiements sécurisés
					</p>
			</div>
		</div>
	<!--</section>--> <!-- FERMETURE SCROLL BAR -->

	<?php do_action( 'foundationpress_after_content' ); ?>


	<!--<?php //get_sidebar(); ?>-->

<?php get_footer();
