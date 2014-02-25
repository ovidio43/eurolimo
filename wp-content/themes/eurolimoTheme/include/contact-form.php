<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form').validate({
            rules: {
                'first-name': {required: true},
                'email': {required: true, email: true}
            },
            messages: {
                'choose-vehicle': "Please select one option.",
                'trip-type': "Please select one option."
            }
        });
    });

</script>
<form action="/contact-us/#send-ok" method="post" id="ss-form"> 

    <ul class="block_dates_imputs">
        <li>
            Name <span class="required-ast">*</span><br>
            <input type="text" name="first-name">
        </li>
        <li>
            Email <span class="required-ast">*</span><br>
            <input type="text" name="email">
        </li>
        <li>
            Phone <br>
            <input type="text" name="phone-number" class="cfone" >
        </li>
    </ul>   
    <ul class="block_dates_end">
        <li>
        Your Message <br>
            <textarea name="additional-comments"></textarea>
        </li>
        <li>
            <input type="submit"  value="Send" class="submit">
            <input type="hidden" name="step" value="send">
        </li>        
    </ul>
    <label class="notice"><span class="required-ast">*</span> Required</label>
    <?php 
        if ($step == 'send') {
             require_once (get_template_directory() . '/include/send-contact-form.php');
        }
    ?>        
    

</form>