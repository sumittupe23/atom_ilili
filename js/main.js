// Mobile main navigation menu
function openNav() {
  document.getElementById("atmMobNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("atmMobNav").style.height = "0%";
}

// Add video inside the post

$('#post-470 .card .card-body .row .atm-img a').append('<iframe src="https://www.youtube.com/embed/CvTRvZdpB_I" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="308" height="305" frameborder="0"></iframe>');

// Navigation Bar Collapse
$(".navbar-toggler").click(function(event) {
    $(".navbar-collapse").toggle('in');
});

// Accordion careers openings collapse
$.each([ 676, 678, 680, 683, 685, 687, 689, 691, 693, 701, 704, 707, 710, 713, 716, 719, 722, 725, 728 ], function( index, value ) {
	var heading = "#heading" + value;
	var collapse = "#collapse" + value;
	$(heading).click(function(event){
		$(collapse).toggle('hide');
		$(heading + " a span:last-child").toggleClass('atm-plus atm-minus');
	});
});

// Accordian partner support collapse


// Image Gallery
baguetteBox.run('.tz-gallery', {
	animation: 'fadeIn',
	captions: function(element) {
        return element.getElementsByTagName('img')[0].alt;
    }
});
