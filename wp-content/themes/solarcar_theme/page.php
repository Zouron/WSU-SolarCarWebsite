<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Solarcar
 * @since 2017
 */

get_header(); ?>



<?php
	if ( is_front_page() && solarcar_theme_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	//
?>
<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			echo do_shortcode("[post_grid id='32']");

 		endwhile;?>
 <?php else:?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php

get_footer();
