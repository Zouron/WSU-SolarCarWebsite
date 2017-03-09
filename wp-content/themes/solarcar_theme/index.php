<?php get_header(); ?>
<img class="wide_img" style="margin: 0px" src="<?php echo get_template_directory_uri() ?>/images/teaser.png">
	<section>
		<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
  <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'home_right_1' ); ?>
  </div><!-- #primary-sidebar -->
<?php endif; ?>
	</section>
	<section class="container">
        <img class="map" src="<?php echo get_template_directory_uri() ?>/images/map.svg">
        <div class="media-headings gothambold">World Solar Challenge</div>
        <h2 class="center gotham">Adventure. Innovation. Achievement.</h2>
        <p class="header-text">
          It is the world's biggest solar endurance race, held in Australia from Darwin to Adelaide, across 3000km of rugged outback terrain. We compete in the prestigious Challenger class for line honours.
        </p>
        <div class="flex">
          <div class="placing">
            <h1 class="center">11<sup>th</sup></h1>
            <h2>OUT OF 22</h2>
            <hr>
            <p class="header-text">2013</p>
          </div>
          <div class="placing">
            <h1 class="center">10<sup>th</sup></h1>
            <h2>OUT OF 43</h2>
            <hr>
            <p class="header-text">2015</p>
          </div>
          <div class="placing">
            <h1 class="center">&lt;10<sup>th</sup></h1>
            <h2>SEE YOU THERE!</h2>
            <hr>
            <p class="header-text">2017</p>
          </div>
        </div>
      </section>
<?php get_footer(); ?>