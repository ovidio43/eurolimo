
      <footer id="footer">
        <div class="wrapper">
            <!--<div class="col-md-3">
                <h3>Our Car</h3>
            </div>-->
            <div class="col-md-12">
                <h3>Testimonials</h3>                
				<div class="caption">
<!--<div class="caption"> Planning a wedding was extremely stressful, but the advice and support from Driven took away the stress of our journeys. Our Chauffeur was wonderful, extremely professional and nothing was too much trouble. He even took a detour to a picturesque spot which we mentioned on the day, very last minute. I’ll certainly be recommending them to all my friends. Thanks for making our day so special!</div>-->
				<ul class="bxslider_testimonial">
				<?php
							$type = 'testimonials';
							$args=array(
							  'post_type' => $type,
							  'post_status' => 'publish',
							  'orderby' => 'date',
							  'order' => 'DESC',
							  'posts_per_page'=>-1);								 
							$myposts = new WP_Query( $args );
                             if ( $myposts->have_posts() ) : 
                                while ( $myposts->have_posts() ) : 
                                    $myposts->the_post();      
                            ?>
                            <li>
                                <?php echo substr(get_the_content(),300);   ?>
								<span class="autor"><?php the_title(); ?></span>
                            </li>
                            <?php endwhile;?>                            
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>					
				</ul>				
				</div>
            </div>
            <!--<div class="col-md-3">
                <h3>Our Team</h3>
                <div class="caption">
                    Our chauffeurs are carefully selected, professional, experienced drivers who understand the sensitivities of the business and entertainment worlds. We ensure a relaxed, safe and comfortable journey.
                </div>
            </div>
            <div class="col-md-3">
                <h3>Quick Book</h3>
            </div>-->
        </div>
      </footer>
      <div class="copy">
          <div class="wrapper">Euro Limo DC 2013</div>
      </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bxslider/jquery.bxslider.min.js"></script>
        
        <?php wp_footer(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
