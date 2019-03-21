(function($) {
	"use strict"

	///////////////////////////
	// Preloader
	$(window).on('load', function() {
		$("#preloader").delay(600).fadeOut();
	});

	///////////////////////////
	// Scrollspy
	$('body').scrollspy({
		target: '#nav',
		offset: $(window).height() / 2
	});

	///////////////////////////
	// Smooth scroll
	$("#nav .main-nav a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(this.hash).offset().top
		}, 600);
	});

	$('#back-to-top').on('click', function(){
		$('body,html').animate({
			scrollTop: 0
		}, 600);
	});

	///////////////////////////
	// Btn nav collapse
	$('#nav .nav-collapse').on('click', function() {
		$('#nav').toggleClass('open');
	});

	///////////////////////////
	// Mobile dropdown
	$('.has-dropdown a').on('click', function() {
		$(this).parent().toggleClass('open-drop');
	});

	///////////////////////////
	// On Scroll
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();

		// Fixed nav
		wScroll > 1 ? $('#nav').addClass('fixed-nav') : $('#nav').removeClass('fixed-nav');

		// Back To Top Appear
		wScroll > 700 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
	});

	///////////////////////////
	// magnificPopup
	 $(document).ready(function() {
		$('.work').magnificPopup({
			delegate: '.lightbox',
			type: 'image'
		});
	});

	//////////////////////////
	// Slick Slider
	$(document).ready(function(){
  		 $('.product-circle-list').slick({
			swipeToSlide: true,
			touchMove: true,
			ltr: true,
			variableWidth: true,
			dots: false,
			pauseOnHover: true,
            infinite: true,
            slidesToShow:3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            centerMode: true,
            arrows:false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                        infinite: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }
            ]
        });
	});

	///////////////////////////
	// Owl Carousel
	$(document).ready(function() {
		$('#about-slider').owlCarousel({
			items:1,
			loop:true,
			margin:15,
			nav: true,
			navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			dots : true,
			autoplay : true,
			animateOut: 'fadeOut'
		});

		$('#testimonial-slider').owlCarousel({
			loop:true,
			margin:15,
			dots : true,
			nav: false,
			autoplay : true,
			responsive:{
				0: {
					items:1
				},
				992:{
					items:2
				}
			}
		});
	});

})(jQuery);
