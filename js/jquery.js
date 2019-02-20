$(document).ready(function() {

// Custom Animations on page load sections



// Force the page to scroll top after the reload
// $(this).scrollTop(0);

var atm_btn = $('#atm-btn-back-to-top');
// Redirects the page continously
// var res_href = $(location).attr('href', '?a=b');
var res_href = window.location;

if ( res_href == "http://localhost/wordpress/reservations/" || res_href == "http://localhost/wordpress/brands/" || res_href == "http://localhost/wordpress/story/" || res_href == "http://localhost/wordpress/partner/" ) {
	$('#sticky').addClass('atm-sticky');
}

	$(window).scroll(function() {

		// let scrollPos = Math.round(window.scrollY);

		// Code for sticky header element
		// console.log(res_href);
		// console.log($(this).scrollTop());
		
		// $( 'section' ).addClass( 'revealed' );

		if ( $(this).scrollTop() > 0 || res_href == "http://localhost/wordpress/reservations/" || res_href == "http://localhost/wordpress/brands/" || res_href == "http://localhost/wordpress/story/" || res_href == "http://localhost/wordpress/partner/" ) {
			$('#sticky').addClass('atm-sticky');
			// console.log($(this).height());
		} else {
			$('#sticky').removeClass('atm-sticky');
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
}

$window.on( 'scroll resize', check_if_in_view );
$window.trigger( 'scroll' );

});