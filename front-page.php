<?php
/**
 * This template adds home page template to Astra Child theme
 *Template Name: Home
 *Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php function custom_body_class( $classes ) {
  
        $classes[] = 'home';
    
    return $classes;
}
add_filter( 'body_class', 'custom_body_class' ); ?>

<?php add_action( 'astra_entry_content_after', 'astra_child_custom_content' );

function astra_child_custom_content() {
    while ( the_flexible_field('custom_fields') ) {
		get_template_part( 'flexible_content_sections/'. get_row_layout() );
        ?><hr><?php
	}
	//include('template_parts/testimonials.php');
	get_template_part('template_parts/testimonials');
}

?>
<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>