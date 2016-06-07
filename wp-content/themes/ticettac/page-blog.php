<?php
/*
Template Name: Blog
*/
?>

<?php
/**
 *
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
<div class="clr"></div>
<div class="row">
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
 <?php get_footer();
