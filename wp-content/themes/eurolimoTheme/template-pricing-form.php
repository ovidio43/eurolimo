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
                     <div class="input_radio">
                            <div class="input_radio_float">
                               <span class="block_radio"></span>                         
                               <input type="radio" name="choose-vehicle"> 
                               <span class="imput_name">Landrover</span>
                            </div>
                            <div class="input_radio_float">
                                <span class="block_radio_one"> </span>                    
                                <input type="radio" name="choose-vehicle"> 
                                <span class="imput_name">Mercedez Benz GL550</span>
                            </div>
                     </div>
                     <h1>Trip Type</h1>
                     <ul class="trip_type">
                         <li><input type="radio" name="trip-type"> Single Destination</li>
                         <li><input type="radio" name="trip-type"> Multiple Destinations</li>
                         <li><input type="radio" name="trip-type"> Hourly / As Directed</li>
                         <li><input type="radio" name="trip-type"> Multi-Day</li>
                     </ul>
                     <h1>Starting Address</h1>
                     <ul class="block_imputs">
                        <li>
                             Pickup Address *<br>
                             <input type="text" name="" class="imput_address">
                        </li>
                        <li>                         
                             Pickup City * <br>
                             <input type="text" name="" class="imput_address">
                        </li>
                        <li>
                             Pickup State * <br>
                             <select><option>-please select</option></select>
                        </li>
                      </ul>   
                     <h1>Destination</h1>
                     <ul class="block_imputs">
                        <li>
                             Destination Address * <br>
                             <input type="text" name="" class="imput_address">
                        </li>
                        <li>                         
                             Destination City *<br>
                             <input type="text" name="" class="imput_address">
                        </li>
                        <li>
                             Destination State *<br>
                            <select><option>-please select</option></select>
                        </li>
                      </ul>   

                     <h1>Contact Info</h1>
                     <ul class="block_dates_imputs">
                        <li>
                             First Name *<br>
                             <input type="text" name="">
                        </li>
                        <li>                         
                             Last Name *<br>
                             <input type="text" name="">
                        </li>
                        <li>
                             Email *<br>
                            <input type="email" name="">
                        </li>
                        <li>
                            Phone number * <br>
                            <input type="text" name="" class="cfone" >
                        </li>
                      </ul>   

                     <h1>How did you hear about us?</h1>

                     <ul class="block_dates_imputs">
                        <li>
                             If other, where: <br>
                             <select><option>-please select</option></select>
                        </li>
                        <li>                         
                            <br>
                            <input type="text" name="">
                        </li>
                    </ul>
                     <h1>Additional Comments</h1>
                      <ul class="block_dates_end">
                            <li>
                                 <textarea></textarea>
                            </li>
                            <li>                         
                              <input type="checkbox" name="">  Send me news and special offers.  
                            </li>
                            <li>
                                <input type="submit" name="" value="sumit request" class="submit">
                            </li>
                    </ul>
                 </form>
             </div>   
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
 ?>
