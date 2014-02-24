<?php
/*
 * Template Name: pricing form
 *
 */
get_header();
$step = $_POST['step'];
?>
<section id="main-title">
    <div class="wrapper">
        <h1><?php the_title(); ?></h1>       
    </div>
</section>
<section id="main-section">
    <div class="wrap-main">
        <div class="wrapper">
            <div class="full-content">
                <?php
                // Start the Loop.
                while (have_posts()) : the_post();
                    //get_template_part( 'content', 'page' );
                    the_content();
                endwhile;
                ?>
                <div class="wrap-form">
                    <?php
                         require_once (get_template_directory() . '/include/pricing-form.php');

                    ?>
                </div>   
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
