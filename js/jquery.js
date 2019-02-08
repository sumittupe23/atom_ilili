$(document).ready(function() {
	// Force the page to scroll top after the reload
	// $(this).scrollTop(0);

var atm_btn = $('#atm-btn-back-to-top');

	$(window).scroll(function() {

		// let scrollPos = Math.round(window.scrollY);

		// Code for sticky header element
		console.log(sticky)
		console.log($(this).scrollTop())

		if ( $(this).scrollTop() > 0 ) {
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