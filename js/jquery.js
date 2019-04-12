$(document).ready(function() {

var atm_btn = $('#atm-btn-back-to-top');
var res_href = window.location;

$('#atombord *').css("border", "1px solid #000");

$('#atm-blog-sec .row .atm-blog-img a > img').addClass('img-fluid');
$('#atm-team-test div div div div div a > img').addClass('img-fluid');
$('#atm-blog-sec .row div .atm-blog-content .addtoany_share_save_container').css("display", "none");
$('#atm-team-testim .addtoany_share_save_container').css("display", "none");

$('#ajaxsearchlite1').hover(function(){
	$('#ajaxsearchlite1 .probox .proinput').fadeToggle(500);
});

if ( res_href != "https://skrestaurants.com/staging/" ) {
	$('#sticky').addClass('atm-sticky');
}
	$(window).scroll(function() {

		if ( $(this).scrollTop() > 0 || res_href != "https://skrestaurants.com/staging/" || $(window).width() <= 576 ) {
			$('#sticky').addClass('atm-sticky');
			$('#sticky .navbar-brand > img').addClass('atm-sticky-logo');
			$("#sticky .atm-nav ul li > a").css("color", "#000");
			$("#sticky .atm-nav ul li div > a").css("color", "#000");
			$("div.asl_w .probox .promagnifier .innericon svg").css("fill", "#000");
			$("#ajaxsearchlite1 .probox .proinput, div.asl_w .probox .proinput").css("border-bottom", "1px solid #000");
			$("#atm-sch").css("display", "block");
		} else {
			$('#sticky').removeClass('atm-sticky');
			$('#sticky .navbar-brand > img').removeClass('atm-sticky-logo');
			$("#sticky .atm-nav ul li > a").css("color", "#fff");
			$("#sticky .atm-nav ul li div > a").css("color", "#fff");
			$("div.asl_w .probox .promagnifier .innericon svg").css("fill", "#fff");
			$("#ajaxsearchlite1 .probox .proinput, div.asl_w .probox .proinput").css("border-bottom", "1px solid #fff");
			$("#atm-sch").css("display", "none");
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