<?php get_header(); ?>
<section id="main-title">
    <div class="wrapper">
        <h1><?php the_title();?></h1>       
    </div>
</section>
<section id="main-section">
    <div class="wrap-main">
        <div class="wrapper">
            <div class="left-content">
            <?php
                // Start the Loop.
				
				
                while ( have_posts() ) : the_post();
                    //get_template_part( 'content', 'page' );
					
					$getid = get_post_type( get_the_ID());
					
					if(	$getid=="flet"){
					
							$images = get_field('image_gallery');
							
							if( $images ): 
			?>
							<div class="wrapper">
								<ul class="bxslider">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />											
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<?php endif; ?>
			<?php	} ?>					
            <?php the_content();
				  endwhile;
            ?>                
            </div>
            
            <?php get_sidebar();?>
        </div>
    </div>
</section>	
<?php get_footer(); ?>
