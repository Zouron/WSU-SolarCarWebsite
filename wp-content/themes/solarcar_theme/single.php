<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="container grey-background" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();?>
		<h1 class="heading"><?php the_title();?></h1>
		<h3 class="blog-date"><?php echo get_the_date('jS M Y');?></h3>
		<?php echo the_content();?>
		<?php
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
