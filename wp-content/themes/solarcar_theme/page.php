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
	
	$counter=(int)0;
?>
<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
	$counter=(int)0; ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>
<div class="container">
<div class="row">

	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<div class="col-sm-4">
			<?php the_post_thumbnail('medium');?>


			<?php the_title("<div class=\"grid-title\">","</div>");?>
			<div class="grid-post-date">
				<?php echo get_the_date();?>
			</div>
			<div class="grid-excerpt">
				<?php echo the_excerpt();?>
			</div>
			<?php $counter++;?>
		</div>
		<?php if($counter>=3):?>
			</div>
			<div class="row">
			<?php $counter=0;
			endif; ?>
		<!--<li><a href="<?php// the_permalink(); ?>"><?php// the_title(); ?></a></li>-->
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
