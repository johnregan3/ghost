(function($) {
	$(document).ready(function() {
		new WOW().init();

		//Rotator
		$('.bxslider').bxSlider({
			auto: false,
			mode: 'fade',
			adaptiveHeight: true,
			nextText: '',
			prevText: '',
			speed: 500, //Rotator speed, in milliseconds
		});


		//Account for Archive Loop posts with no images
		$('.entry.excerpt').each(function() {
			if( $('.entry-image img', this).length < 1 ) {
				$('.entry-image', this).hide();
				$('.entry-header', this).css({
					'float': 'none',
					'width' : '100%',
					'padding-right' : 0
				});
			}
		});

	});
})(jQuery);