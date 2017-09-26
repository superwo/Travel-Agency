(function ($, root, undefined) {

	$(function () {

		'use strict';

		$('.gallery .gallery-item a').fancybox({
			openEffect: 'fade'
		});

		$('ul.slider').bxSlider({
			pager: false
		});

	});

})(jQuery, this);
