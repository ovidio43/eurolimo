<div class="sidebar services">
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
                            <div style="position:relative;">
                                <a href="<?php echo get_permalink( get_the_ID() );?>"><img src="<?php echo $featured['0'];?>" title="<?php the_title();?>"></a>
								<h3 class="service-title"><?php the_title();?></h3>
							</div>
                    <?php endwhile;?>                            
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>	
</div>