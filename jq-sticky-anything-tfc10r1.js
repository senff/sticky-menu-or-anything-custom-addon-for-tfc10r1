/**
* @preserve Sticky Anything tfc10r1 1.0 | @senff | GPL2 Licensed
*/

(function($) {
  $(document).ready(function($) {
    checkScroll = setInterval(function(){scrollHorizontal()},10);
  });

	function scrollHorizontal() {
		if ($('.sticky-element-original:not(.sticky-element-active)').length > 0 ) {
	  		scrolledHor = $(window).scrollLeft();
	  		moveElement = 'translate(-'+scrolledHor+'px, 0)';
	  		$('.sticky-element-original:not(.sticky-element-active)').css('transform',moveElement);
	  	}
	}

}(jQuery));
