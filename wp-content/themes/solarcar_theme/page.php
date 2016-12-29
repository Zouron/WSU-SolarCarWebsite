<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Solarcar
 * @since 2017
 */

get_header(); ?>


<div class="media-headings gothambold">Media</div>
<?php
	
	$counter=(int)0;
?>
<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>
<div class="container">

	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<div class="row" style="margin: 15px 0px;">
			<a href="<?php the_permalink();?>">
				
					<div class="col-sm-6">
						<?php the_post_thumbnail('full', array('class' => "img-responsive"));?>
					</div>
					<div class="col-sm-6">
						<?php the_title("<div class=\"grid-title\">","</div>");?>
						<div class="grid-post-date">
							<?php echo get_the_date('jS F Y');?>
						</div>
						<div class="grid-excerpt">
							<?php echo get_the_excerpt();?>
						</div>
					</div>
				
			</a>
		</div>
	<?php endwhile; ?>
	<!-- end of the loop -->
</div>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
<?php

get_footer();?>
