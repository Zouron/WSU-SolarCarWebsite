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
		<main id="main" class="container" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();?>
		<?php the_post_thumbnail('full', array('class' => "img-responsive"));?>
		<h2 class="heading"><?php the_title();?></h2>
		<h3 class="blog-date"><?php echo get_the_date('jS F Y');?></h3>
		<?php echo the_content();?>
		<?php
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
