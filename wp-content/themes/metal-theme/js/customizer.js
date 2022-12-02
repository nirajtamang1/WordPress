/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
 ( function( $ ) {
	$("#menu-item-19 a").addClass('active'); 
	// adding active class for the slider
	$(".carousel-inner .carousel-item").first().addClass("active");
	$(".carousel-inner .productdetail").first().addClass("active");
	$(".contact form").addClass("main_form");
	$(".news form").addClass("form_news");	
	}( jQuery ) );
	