(function ($) {

	"use strict";

	$(document).ready(function() {

		//modal on load
		$(window).load(function() {
			$('.home .modal').fadeIn(400);
		});

		$('.home .modal .close').click(function(event) {
			$(this).parent().parent().fadeOut(500);
		});

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");

		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// You can put your own code in here
		//portfolio carousel
		$('.owl-folio').owlCarousel({
		    loop:true,
		    margin:0,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items:3,
		            nav:true,
		            loop:false
		        }
		    }
		});

		//home slider
		$('.hero-slider').owlCarousel({
		    loop:true,
		    margin:0,
		    responsiveClass:true,
		    items: 1,
		    nav:true,
		    autoplay:true,
		    autoplayTimeout:5000,
		    autoplayHoverPause:true,
		});

		//Carousel for employeees

		/*
		$('.owl-employees').owlCarousel({
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items:4,
		            nav:true,
		            loop:false
		        }
		    }
		});
		*/

	});

}(jQuery));
