$(document).ready(function() {

// Custom Animations on page load sections



// Force the page to scroll top after the reload
// $(this).scrollTop(0);

var atm_btn = $('#atm-btn-back-to-top');
// Redirects the page continously
// var res_href = $(location).attr('href', '?a=b');
var res_href = window.location;

if ( res_href == "http://localhost/wordpress/reservations/" ) {
	$('#sticky').addClass('atm-sticky');
}

	$(window).scroll(function() {

		// let scrollPos = Math.round(window.scrollY);

		// Code for sticky header element
		// console.log(res_href);
		// console.log($(this).scrollTop());

		if ( $(this).scrollTop() > 0 || res_href == "http://localhost/wordpress/reservations/" ) {
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

});