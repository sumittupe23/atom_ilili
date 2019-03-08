baguetteBox.run('.tz-gallery', {
	animation: 'fadeIn',
	captions: function(element) {
        return element.getElementsByTagName('img')[0].alt;
    }
});

// People's page modal
$('*').on('click', function(ev){
	$( '#modal_main' ).on('click', function(even){ even.stopPropagation(); });

	var modal_img_id = this.id
	var mod_id = $( this ).parent().parent().parent().attr('id');

	var modal_id = '#' + mod_id;
	console.log(modal_id);

	$( modal_id ).on("click", function(e){

		var modal_img = $( modal_id ).find( '#atm_modal_img' ).attr("src");
		var modal_name = $( modal_id ).find( '#atm_modal_name' ).text();
		var modal_post = $( modal_id ).find( '#atm_modal_post' ).text();
		var modal_body = $( modal_id ).find( '#atm_modal_body' ).text();
		var modal_fb_link = $( modal_id ).find( '#atm_modal_fb_link' ).text();
		var modal_tw_link = $( modal_id ).find( '#atm_modal_tw_link' ).text();
		var modal_in_link = $( modal_id ).find( '#atm_modal_in_link' ).text();

		$( '#atm-modal-image' ).attr( "src", modal_img );
		$( '#atm-modal-name' ).text( modal_name );
		$( '#atm-modal-post' ).text( modal_post );
		$( '#atm-modal-body' ).text( modal_body );
		$( '#atm-modal-fb' ).attr( "href", "https://" + modal_fb_link );
		$( '#atm-modal-tw' ).attr( "href", "https://" + modal_tw_link );
		$( '#atm-modal-in' ).attr( "href", "https://" + modal_in_link );

	});

});

// Location Map Popovers
$(function () {
  $('#uaepopoverData').popover({
  	trigger: 'hover'
  });
  $('#canpopoverData').popover({
  	trigger: 'hover'
  });
  $('#indpopoverData').popover({
  	trigger: 'hover'
  });
  $('#popoverData').popover({
  	trigger: 'hover'
  });
});