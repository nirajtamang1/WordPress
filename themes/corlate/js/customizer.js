/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
$(".navbar-nav .current-menu-item").addClass('active'); 
$(".menu-item-has-children").addClass('dropdown');
$('.menu-item-has-children a:first').attr({ 'class' : 'dropdown-toggle', 
'data-toggle' : 'dropdown'});
$(".sub-menu").addClass('dropdown-menu');
// adding active class for the slider
$(".carousel-inner .item").first().addClass("active");
$(".panel-default .panel-heading").first().addClass("active");
$(".panel-default .collapse").first().addClass("in");
$(".pull-left .nav-tabs li:nth-child(2)").addClass("active");
$(".tab-content .tab-pane:nth-child(2)").addClass("active in");
$(".archieve ul").addClass('blog_archieve');
$(".page-numbers").addClass('pagination pagination-lg');

}( jQuery ) );
