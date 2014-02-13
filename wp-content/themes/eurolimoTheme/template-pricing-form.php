<?php 
/*
* Template Name: pricing form
*
*/
get_header(); ?>
<section id="main-title">
    <div class="wrapper">
        <h1><?php the_title();?></h1>       
    </div>
</section>
<section id="main-section">
    <div class="wrap-main">
        <div class="wrapper">
            <div class="full-content">
            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();
                    //get_template_part( 'content', 'page' );
                the_content();
                endwhile;
            ?>
             <div class="wrap-form">
                 <form>
                 <h1>Choose Vehicle </h1>
                     <input type="radio" name="choose-vehicle"> Landrover
                     <input type="radio" name="choose-vehicle"> Mercedez Benz GL550
                     <h1>Trip Type</h1>
                     <input type="radio" name="trip-type"> Single Destination
                     <input type="radio" name="trip-type"> Multiple Destinations
                     <input type="radio" name="trip-type"> Hourly / As Directed
                     <input type="radio" name="trip-type"> Multi-Day
                     <h1>Starting Address</h1>
                     Pickup Address *
                     <input type="text" name="">
                     Pickup City *
                     <input type="text" name="">
                     Pickup State *
                     <select><option>-please select</option></select>
                     <h1>Destination</h1>
                     Destination Address *
                     <input type="text" name="">
                     Destination City *
                     <input type="text" name="">
                     Destination State *
                     <select><option>-please select</option></select>
                     <h1>Contact Info</h1>
                     First Name *
                     <input type="text" name="">
                     Last Name *
                     <input type="text" name="">
                     Email *
                     <input type="email" name="">
                     Phone number *
                     <input type="text" name="">
                     <h1>How did you hear about us?</h1>
                     <select><option>-please select</option></select>
                    If other, where:
                     <input type="text" name="">
                     <h1>Additional Comments</h1>
                     <textarea></textarea>
                     <input type="check" name="">Send me news and special offers.
                     <input type="submit" name="" value="sumit request">




                 </form>
             </div>   
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
 ?>
