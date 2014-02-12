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
				  'posts_per_page'=>-1);								 
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
                    <h3><?php the_field("first_title_home_text","option");?></h3>
                    <div class="caption">
                    <?php the_field("first_block_home_text","option");?>                
                    </div>

                </div>
                <div class="col-md-4">
                    <h3><?php the_field("second_title_home_text","option");?> </h3>
                    <div class="caption">
                     <?php the_field("second_block_home_text","option");?>               
                    </div>

                </div>
                <div class="col-md-4">
                    <h3><?php the_field("thirth_title_home_text","option");?> </h3>
                    <div class="caption">
        <?php the_field("thirth_block_home_text","option");?>                 
                    </div>
                </div>
            </div>
        <?php //echo $_SERVER['DOCUMENT_ROOT'];
        //$_SERVER['DOCUMENT_ROOT'];?>
            <div class="wrapper">
                
            <div class="services col-md-12 no-padding"><h3>Services</h3> 
				<?php
							$type = 'fleet_services';
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
<?php get_footer(); ?>
