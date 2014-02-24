<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form').validate({
            rules: {
                'choose-vehicle': {required: true},
                'trip-type': {required: true},
                'pickup-address': {required: true},
                'destination-address': {required: true},
                'first-name': {required: true},
                'last-name': {required: true},
                'email': {required: true, email: true},
                'phone-number': {required: true, number: true}
            },
            messages: {
                'choose-vehicle': "Please select one option.",
                'trip-type': "Please select one option."
            }
        });
    });

</script>
<form action="/pricing/#send-ok" method="post" id="ss-form">
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
                    <label class="selected" for="radio<?php echo get_the_ID(); ?>">
                        <span class="block_radio" style="background-image:url(<?php echo $featured['0']; ?>);"></span>
                    </label>
                    <input class="radio-selected" type="radio" id="radio<?php echo get_the_ID(); ?>" name="choose-vehicle" value="<?php the_field('thumbnail_headline_text'); ?>"> 
                    <span class="imput_name"><?php the_field('thumbnail_headline_text'); ?></span>
                </div>                
            <?php endwhile; ?>                            
        <?php endif; ?>
        <?php wp_reset_query(); ?>

    </div>
    <script type="text/javascript">
     
    </script>
    <h1>Trip Type</h1>
    <ul class="trip_type">
        <li><input type="radio" name="trip-type" value="Single Destination" id="op1"> <label for="op1"> Single Destination</label></li>
        <li><input type="radio" name="trip-type" value="Multiple Destinations" id="op2"><label for="op2"> Multiple Destinations</label></li>
        <li><input type="radio" name="trip-type" value="Hourly / As Directed" id="op3"><label for="op3"> Hourly / As Directed</label></li>
        <li><input type="radio" name="trip-type" value="Multi-Day" id="op4"><label for="op4"> Multi-Day</label></li>
    </ul>
    <h1>Starting address</h1>
    <ul class="block_imputs">
        <li>
            Pickup address <span class="required-ast">*</span><br>
            <input type="text" name="pickup-address" class="imput_address">
        </li>         
    </ul>   
    <h1>Destination address</h1>
    <ul class="block_imputs">
        <li>
            Destination address <span class="required-ast">*</span> <br>
            <input type="text" name="destination-address" class="imput_address">
        </li>      
    </ul>   

    <h1>Contact Info</h1>
    <ul class="block_dates_imputs">
        <li>
            First Name <span class="required-ast">*</span><br>
            <input type="text" name="first-name">
        </li>
        <li>                         
            Last Name <span class="required-ast">*</span><br>
            <input type="text" name="last-name">
        </li>
        <li>
            Email <span class="required-ast">*</span><br>
            <input type="text" name="email">
        </li>
        <li>
            Phone number <span class="required-ast">*</span> <br>
            <input type="text" name="phone-number" class="cfone" >
        </li>
    </ul>   

    <h1>How did you hear about us?</h1>

    <ul class="block_dates_imputs">      
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
            <input type="checkbox" name="Send-me-news" checked="">  Send me news and special offers.  
        </li>
        <li>
            <input type="submit"  value="Send" class="submit">
            <input type="hidden" name="step" value="send">

        </li>        
    </ul>
    <label class="notice"><span class="required-ast">*</span> Required</label>
    

    <?php 
        if ($step == 'send') {
             require_once (get_template_directory() . '/include/send-pricing-form.php');
        }
    ?>        
    

</form>