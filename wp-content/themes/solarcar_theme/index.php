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
			<div class="col-xs-4">
			
				<?php the_title() ;?>
			</div>
	 		<?php endwhile;?>
	 <?php else:?>
			<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>
			
	
</div>
	<div id="delimiter">
	</div>
<?php get_footer(); ?>
