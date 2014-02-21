<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form').validate({
            rules: {
                'choose-vehicle': {required: true},
                'trip-type': {required: true},
                'aickup-address': {required: true},
                'pickup-city': {required: true},
                'pickup-state': {required: true},
                'destination-address': {required: true},
                'destination-city': {required: true},
                'destination-state': {required: true},
                'first-name': {required: true},
                'last-name': {required: true},
                'email': {required: true,email:true},
                'phone-number': {required: true,number:true}
            }
        });
    });

</script>
<form action="" method="post" id="ss-form">
    <h1>Choose Vehicle </h1>
    <div class="input_radio">
        <?php
        $type = 'flet';
        $args = array(
            'post_type' => $type,
            'post_status' => 'publish',
            'orderby' => 'rand',
            'order' => 'DESC',
            'posts_per_page' => -1);
        $myposts = new WP_Query($args);
        if ($myposts->have_posts()) :
            while ($myposts->have_posts()) :
                $myposts->the_post();
                $featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium', false);
                ?>                                            

        <div class="input_radio_float">
            <span class="block_radio" style="background-image:url(<?php echo $featured['0']; ?>);"></span>                         
            <input type="radio" name="choose-vehicle" value="<?php the_field('thumbnail_headline_text'); ?>"> 
            <span class="imput_name"><?php the_field('thumbnail_headline_text'); ?></span>
        </div>                
            <?php endwhile; ?>                            
        <?php endif; ?>
        <?php wp_reset_query(); ?>

    </div>
    <h1>Trip Type</h1>
    <ul class="trip_type">
        <li><input type="radio" name="trip-type" value="Single Destination"> Single Destination</li>
        <li><input type="radio" name="trip-type" value="Multiple Destinations"> Multiple Destinations</li>
        <li><input type="radio" name="trip-type" value="Hourly / As Directed"> Hourly / As Directed</li>
        <li><input type="radio" name="trip-type" value="Multi-Day"> Multi-Day</li>
    </ul>
    <h1>Starting Address</h1>
    <ul class="block_imputs">
        <li>
            Pickup Address *<br>
            <input type="text" name="pickup-address" class="imput_address">
        </li>
        <li>                         
            Pickup City * <br>
            <input type="text" name="pickup-city" class="imput_address">
        </li>
        <li>
            Pickup State * <br>
            <select name="pickup-state">
                <option>-please select</option>
                <option value="Pickup State">Pickup State</option>
            </select>
        </li>
    </ul>   
    <h1>Destination</h1>
    <ul class="block_imputs">
        <li>
            Destination Address * <br>
            <input type="text" name="destination-address" class="imput_address">
        </li>
        <li>                         
            Destination City *<br>
            <input type="text" name="destination-city" class="imput_address">
        </li>
        <li>
            Destination State *<br>
            <select name="destination-state">
                <option>-please select</option>
                <option value="Destination State">Destination State</option>
            </select>
        </li>
    </ul>   

    <h1>Contact Info</h1>
    <ul class="block_dates_imputs">
        <li>
            First Name *<br>
            <input type="text" name="first-name">
        </li>
        <li>                         
            Last Name *<br>
            <input type="text" name="last-name">
        </li>
        <li>
            Email *<br>
            <input type="text" name="email">
        </li>
        <li>
            Phone number * <br>
            <input type="text" name="phone-number" class="cfone" >
        </li>
    </ul>   

    <h1>How did you hear about us?</h1>

    <ul class="block_dates_imputs">
        <li>
            If other, where: <br>
            <select name="if-other-where">
                <option>-please select</option>
                <option value="If other, where: ">If other, where: </option>
            </select>
        </li>
        <li>                         
            <br>
            <input type="text" name="if-other-where2">
        </li>
    </ul>
    <h1>Additional Comments</h1>
    <ul class="block_dates_end">
        <li>
            <textarea name="additional-comments"></textarea>
        </li>
        <li>                         
            <input type="checkbox" name="Send-me-news">  Send me news and special offers.  
        </li>
        <li>
            <input type="submit"  value="sumit" class="submit">
            <input type="hidden" name="step" value="send">
            <label class="notice">* Required</label>
        </li>
    </ul>
</form>