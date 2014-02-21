jQuery(document).ready(function() {
    jQuery('.selected').on('click', function() {
        jQuery('.block_radio').removeClass('selected-on');
        jQuery(this).children().addClass('selected-on');
    });
    jQuery('.radio-selected').on('click', function() {
        jQuery('.block_radio').removeClass('selected-on');
        jQuery(this).siblings('.selected').children().addClass('selected-on');
    });
});
