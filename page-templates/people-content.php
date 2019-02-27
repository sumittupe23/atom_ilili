<?php
/**
Template Name: People Page
**/
get_header();
?>

<section class="container-fluid revealable" style="padding: 80px 0 0 0;">
    <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/storybanner.jpg">
</section>
<!-- Directors -->
<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content atm-modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container-fluid">
          	<div class="row justify-content-end">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
          	</div>
          	<div id="modal_main" class="row justify-content-between p-3">
      			<div class="col-md-6 align-self-center">
      				<img id="atm-modal-image" class="img-fluid" src="">
      				<!-- <?php //echo get_bloginfo('template_directory'); ?>/assets/director_sample.jpg -->
      			</div>
      			<div class="col-md-6 align-self-center">
			  		<div class="container-fluid">
			  			<div class="row justify-content-center">
		      				<h2 id="atm-modal-name" class="atm-modal-name"></h2>
			  			</div>
			  			<div class="row justify-content-center">
			  				<span id="atm-modal-post" class="atm-modal-post"></span>
			  			</div>
			  			<div class="row justify-content-center">
					        <div class="my-2 atm-modal-social">
					          <a id="atm-modal-fb" class="atm-modal-icon-holder fb m-2" href="#" target="_blank">
					            <span class="atm-modal-icon fa fa-facebook"></span>
					          </a>
					          <a id="atm-modal-tw" class="atm-modal-icon-holder tw m-2" href="#" target="_blank">
					            <span class="atm-modal-icon fa fa-twitter"></span>
					          </a>
					          <a id="atm-modal-in" class="atm-modal-icon-holder in m-2" href="#" target="_blank">
					            <span class="atm-modal-icon fa fa-instagram"></span>
					          </a>
					        </div>
			  			</div>
			  			<div class="row">
			  				<div class="m-3 atm-modal-body">
				  				<p id="atm-modal-body"></p>
							</div>
			  			</div>
			  		</div>
      			</div>
          	</div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<section class="container p-5 revealable" style="padding: 80px 0 0 0;">
	<h1 class="text-center">OUR DIRECTORS</h1><hr class="custom_hr">
	<div class="row mt-5" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
		<div class="container p-5">
			<div class="row justify-content-center">
				<div id="modal_1" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name">Camila Engelbert</span>
						<span id="atm_modal_post" class="atm-dir-post">Senior Producer</span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com</span>
						<span id="atm_modal_tw_link">www.twitter.com</span>
						<span id="atm_modal_in_link">www.instagram.com</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.<br>
							A native of New Jersey, Tusk graduated from Tulane University with a degree in Art History and attended the Culinary Institute of America in Hyde Park, New York. After completing his studies, Tusk left for Europe to gain experience in Michelin-starred restaurants throughout France and Italy. His experience in Italy’s Barbaresco region resonated most profoundly and was the catalyst for his sustained interest in Northern Italian regional cuisine.</p>
						</div>
					</div>
				</div>
				<div id="modal_2" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample_.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name">Christopher Da Silva</span>
						<span id="atm_modal_post" class="atm-dir-post">User Experience Director</span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.<br>
							A native of New Jersey, Tusk graduated from Tulane University with a degree in Art History and attended the Culinary Institute of America in Hyde Park, New York. After completing his studies, Tusk left for Europe to gain experience in Michelin-starred restaurants throughout France and Italy. His experience in Italy’s Barbaresco region resonated most profoundly and was the catalyst for his sustained interest in Northern Italian regional cuisine.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5 justify-content-center">
				<div id="modal_3" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample_.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name">Christopher Da Silva</span>
						<span id="atm_modal_post" class="atm-dir-post">User Experience Director</span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.<br>
							A native of New Jersey, Tusk graduated from Tulane University with a degree in Art History and attended the Culinary Institute of America in Hyde Park, New York. After completing his studies, Tusk left for Europe to gain experience in Michelin-starred restaurants throughout France and Italy. His experience in Italy’s Barbaresco region resonated most profoundly and was the catalyst for his sustained interest in Northern Italian regional cuisine.</p>
						</div>
					</div>
				</div>
				<div id="modal_4" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name">Camila Engelbert</span>
						<span id="atm_modal_post" class="atm-dir-post">Senior Producer</span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.<br>
							A native of New Jersey, Tusk graduated from Tulane University with a degree in Art History and attended the Culinary Institute of America in Hyde Park, New York. After completing his studies, Tusk left for Europe to gain experience in Michelin-starred restaurants throughout France and Italy. His experience in Italy’s Barbaresco region resonated most profoundly and was the catalyst for his sustained interest in Northern Italian regional cuisine.</p>
						</div>
					</div>
				</div>
				<div id="modal_5" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample_.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name">Christopher Da Silva</span>
						<span id="atm_modal_post" class="atm-dir-post">User Experience Director</span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.<br>
							A native of New Jersey, Tusk graduated from Tulane University with a degree in Art History and attended the Culinary Institute of America in Hyde Park, New York. After completing his studies, Tusk left for Europe to gain experience in Michelin-starred restaurants throughout France and Italy. His experience in Italy’s Barbaresco region resonated most profoundly and was the catalyst for his sustained interest in Northern Italian regional cuisine.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Key People -->
<section class="container p-5 revealable">
	<h1 class="text-center">KEY PEOPLE</h1><hr class="custom_hr">
	<div class="row mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div id="modal_6" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_one.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">MICHAEL TUSK</span>
							<span id="atm_modal_post" class="atm-key-post">Chef and Owner</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.</p>
						</div>
					</div>
				</div>
				<div id="modal_7" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_two.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">NEIL STETZ</span>
							<span id="atm_modal_post" class="atm-key-post">CHEF DE CUISINE</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.</p>
						</div>
					</div>
				</div>
				<div id="modal_8" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_three.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">YANNICK DUMONCEAU</span>
							<span id="atm_modal_post" class="atm-key-post">PASTRY CHEF</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5 justify-content-center">
				<div id="modal_9" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_four.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">MATT CERN</span>
							<span id="atm_modal_post" class="atm-key-post">GENERAL MANAGER</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.</p>
						</div>
					</div>
				</div>
				<div id="modal_10" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_five.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">KEI TERAUCHI</span>
							<span id="atm_modal_post" class="atm-key-post">ASSISTANT GENERAL MANAGER</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.</p>
						</div>
					</div>
				</div>
				<div id="modal_11" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_six.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">CAMERON TYLER</span>
							<span id="atm_modal_post" class="atm-key-post">LEAD SOMMELIER</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Michael Tusk is the Chef and Owner, along with his wife Lindsay, of two of San Francisco’s most critically acclaimed restaurants, Quince and Cotogna. His approach to Italian and French regional cuisine is refined and modern, taking inspiration from the seasonal bounty of Northern California and his close relationships with local purveyors.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
get_footer();
?>