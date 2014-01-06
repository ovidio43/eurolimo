// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }

    $('.bxslider').bxSlider({
      auto: true
    });
	
	$('.bxslider_testimonial').bxSlider({
      auto: false,
	  nextSelector: '#slider-next',
	  prevSelector: '#slider-prev',
	  nextText: 'Onward',
	  prevText: 'Go back',
	  minSlides: 4,
	  maxSlides: 4,
	  slideWidth: 240,
	  slideMargin:0
    });
    
}());

// Place any jQuery/helper plugins in here.
