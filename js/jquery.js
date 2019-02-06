$(document).ready(function() {
	// Force the page to scroll top after the reload
	$(this).scrollTop(0);

	// Code for sticky header element
	$(window).scroll(function(){
		if ( $(this).scrollTop() > 0 ) {
			$('#sticky').addClass('atm-sticky');
			// console.log($(this).height());
		} else {
			$('#sticky').removeClass('atm-sticky');
		}
	});	
});
