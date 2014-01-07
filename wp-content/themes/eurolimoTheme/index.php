<?php get_header(); ?>

      <section id="main-slider">
          <div class="wrapper">
            <ul class="bxslider">              
				<?php
				$type = 'home-slider';
				$args=array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				   'orderby' => 'rand',
				  'order' => 'DESC',
				  'posts_per_page'=>3);								 
				$myposts = new WP_Query( $args );
				 if ( $myposts->have_posts() ) : 
					while ( $myposts->have_posts() ) : 
						$myposts->the_post();   
						$featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large',false);?>
								<li>
									<img src="<?php echo $featured['0'];?>" title="<?php the_title();?>" alt="<?php the_title();?>">
								</li>
                    <?php endwhile;?>                            
				<?php endif; ?>
                <?php wp_reset_query(); ?>
            </ul>          
          </div>
      </section>
      <section id="main-section">
      <div class="wrap-main">
          <div class="wrapper">
                <div class="col-md-4">
                    <h3>Who we are</h3>
                    <div class="caption">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered.</p>                
                    </div>

                </div>
                <div class="col-md-4">
                    <h3>Wath we do</h3>
                    <div class="caption">
                     <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p><p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>               
                    </div>

                </div>
                <div class="col-md-4">
                    <h3>we choose us</h3>
                    <div class="caption">
        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>                
                    </div>
                </div>
            </div>
        <?php echo $_SERVER['DOCUMENT_ROOT'];
        $_SERVER['DOCUMENT_ROOT'];?>
            <div class="wrapper">
                
            <div class="services col-md-12 no-padding"><h3>Services</h3> 
				<?php
							$type = 'services';
							$args=array(
							  'post_type' => $type,
							  'post_status' => 'publish',
							   'orderby' => 'rand',
							  'order' => 'DESC',
							  'posts_per_page'=>3);								 
							$myposts = new WP_Query( $args );
                             if ( $myposts->have_posts() ) : 
                                while ( $myposts->have_posts() ) : 
                                    $myposts->the_post();   
									$featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large',false);?>									                           
                            <div class="col-md-4">
                                <a href="<?php echo get_permalink( get_the_ID() );?>"><img src="<?php echo $featured['0'];?>" title="<?php the_title();?>"></a>
								<h3 class="service-title"><?php the_title();?></h3>
							</div>
                            <?php endwhile;?>                            
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>				
            </div>
            
			</div>
        </div>
      </section>
 <?php
get_footer();
 ?>
