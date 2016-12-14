<?php get_header(); ?>
<div id="main">
	<p>Index</p>
<?php
	
	$counter=(int)0;
?>
<div class="row">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();?>
			<?php echo do_shortcode("[post_grid id='7']"); ?>
	 		<?php endwhile;?>
	 <?php else:?>
			<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>
			
	
</div>
	<div id="delimiter">
	</div>
<?php get_footer(); ?>
