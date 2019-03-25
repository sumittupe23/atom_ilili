$(document).ready(function() {

// Add class to wp_post_image class
$(".wp-post-image").addClass("img-fluid");

var atm_btn = $('#atm-btn-back-to-top');
var res_href = window.location;

if ( res_href != "https://skrestaurants.com/staging/" ) {
	$('#sticky').addClass('atm-sticky');
}
	$(window).scroll(function() {

		if ( $(this).scrollTop() > 0 || res_href != "https://skrestaurants.com/staging/" ) {
			$('#sticky').addClass('atm-sticky');
			$('#sticky .navbar-brand > img').addClass('atm-sticky-logo');
			$("#sticky .atm-nav ul li > a").css("color", "#000");
			$("#sticky .atm-nav ul li div > a").css("color", "#000");
		} else {
			$('#sticky').removeClass('atm-sticky');
			$('#sticky .navbar-brand > img').removeClass('atm-sticky-logo');
			$("#sticky .atm-nav ul li > a").css("color", "#fff");
			$("#sticky .atm-nav ul li div > a").css("color", "#fff");
		}

		if ( $(window).scrollTop() > 300 ) {
		    atm_btn.addClass('show');
		  } else {
		    atm_btn.removeClass('show');
		  }
	});

	atm_btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate( {scrollTop: 0 }, 1000 );
	});

var $revealable = $('.revealable');
var $slideup = $('.atmslideup');
var $slidedown = $('.atmslidedown');
var $window = $(window);

function check_if_in_view() {
	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var window_bottom_position = ( window_top_position + window_height );

	$.each( $revealable, function(){
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = ( element_top_position + element_height );

		// Check to see if current container is within viewport
		if ( (element_bottom_position >= window_top_position) && ( element_top_position <= window_bottom_position ) ) {
			$element.addClass( 'revealed' );
		} else {
			$element.removeClass( 'revealed' );
		}
	});
	$.each( $slideup, function(){
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = ( element_top_position + element_height );

		// Check to see if current container is within viewport
		if ( (element_bottom_position >= window_top_position) && ( element_top_position <= window_bottom_position ) ) {
			$element.addClass( 'atmslideupon' );
		} else {
			$element.removeClass( 'atmslideupon' );
		}
	} );
	$.each( $slidedown, function(){
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = ( element_top_position + element_height );

		// Check to see if current container is within viewport
		if ( (element_bottom_position >= window_top_position) && ( element_top_position <= window_bottom_position ) ) {
			$element.addClass( 'atmslidedownon' );
		} else {
			$element.removeClass( 'atmslidedownon' );
		}
	} );
}

$window.on( 'scroll resize', check_if_in_view );
$window.trigger( 'scroll' );

});