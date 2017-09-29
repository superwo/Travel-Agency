(function ($, root, undefined) {

	$(function () {

		'use strict';

		$('header nav ul').slicknav();

		$('.gallery .gallery-item a').fancybox({
			openEffect: 'fade'
		});

		$('ul.slider').bxSlider({
			pager: false
		});

	});

})(jQuery, this);
