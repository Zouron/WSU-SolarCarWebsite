<?php get_header(); ?>
<section class="container">
      	<a name="team"></a>
        <div class="media-headings gothambold">Meet the Team</div>
        <p class="header-text">
          Integrated within the university, we bring students out from a theoretical world into a more practical environment to apply their knowledge and expand their horizons. We are made up of undergraduate students from a variety of disciplines ranging from engineering, computing, business, media &amp; communications.
        </p>
        <div class="">
          <div class="row">
          <div class="col-md-4 col-sm-6">
            	<div class="person">
            		<div class="info">
            			<div class="p_name">Samuel Larrondo</div>
            			<div class="p_title">Team Manager</div>
            			<div class="p_social">
            				<a class="p_linkedin" href="https://www.linkedin.com/in/sam-larrondo-014794125/">
                      		  <img src="<?php echo get_template_directory_uri() ?>/images/linkedIn.png" alt="LinkedIn" />
                            </a>
    					</div>
            		</div>
                <div class="portrait">
                  <img src="<?php echo get_template_directory_uri() ?>/images/team/samuel.png" alt="Samuel Larrondo" />
                </div>
            	</div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="person">
              <div class="info">
                <div class="p_name">Saamiul Bashar</div>
                <div class="p_title">Engineering Lead</div>
                <div class="p_social">
                    <a class="p_linkedin" href="https://www.linkedin.com/in/saamiulbashar/">
                    	<img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" />
                    </a>
                </div>
              </div>
              <div class="portrait">
                <img src="<?php echo get_template_directory_uri() ?>/images/team/saamiul.png" alt="Saamiul Bashar" />
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="person">
              <div class="info">
                <div class="p_name">Taylor Pope</div>
                <div class="p_title">Marketing Lead</div>
                <div class="p_social">
                    <a class="p_linkedin" href="https://www.linkedin.com/in/taylormpope/">
                    	<img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" /></a>
                </div>
              </div>
              <div class="portrait">
                <img src="<?php echo get_template_directory_uri() ?>/images/team/taylor.png" alt="Taylor Pope" />
              </div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-6">
            <div class="person">
              <div class="info">
                <div class="p_name">Daniel Nemec</div>
                <div class="p_title">Mechanical Lead</div>
                <div class="p_social">
                    <a class="p_linkedin" href="https://www.linkedin.com/in/daniel-nemec-922239123/">
                    	<img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" /></a>
                </div>
              </div>
              <div class="portrait">
                <img src="<?php echo get_template_directory_uri() ?>/images/team/daniel.png" alt="Daniel Nemec" />
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
              <div class="person">
              <div class="info">
                <div class="p_name">Zachary Mitchell</div>
                <div class="p_title">Electrical Lead</div>
                <div class="p_social">
                    <a class="p_linkedin" href="https://www.linkedin.com/in/zacmitchell/">
                    	<img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" /></a>
                </div>
              </div>
              <div class="portrait">
                <img src="<?php echo get_template_directory_uri() ?>/images/team/zachary.png" alt="Zachary Mitchell" />
              </div>
              </div>
          </div>
          <div class="col-md-4 col-sm-6">
              <div class="person">
              <div class="info">
                <div class="p_name">Georgi Georgieff</div>
                <div class="p_title">IT and Telemetry Lead</div>
                <div class="p_social">
                    <a class="p_linkedin" href="https://www.linkedin.com/in/georgi-georgieff-15606b103/">
                    	<img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" /></a>
                </div>
              </div>
              <div class="portrait">
                <img src="<?php echo get_template_directory_uri() ?>/images/team/georgi.png" alt="Georgi Georgieff" />
              </div>
              </div>
          </div>
          </div>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

      </section>
<?php get_footer(); ?>