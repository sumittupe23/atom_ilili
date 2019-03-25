<?php
/**
Template Name: People Page
**/
get_header();
?>

<section class="container-fluid revealable atm-header">
    <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/pplbanner.jpg">
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
      			<div class="pt-4 pt-md-0 col-md-6 align-self-center">
			  		<div class="container-fluid">
			  			<div class="row justify-content-center">
		      				<h2 id="atm-modal-name" class="atm-modal-name"></h2>
			  			</div>
			  			<div class="row justify-content-center">
			  				<span id="atm-modal-post" class="atm-modal-post"></span>
			  			</div>
			  			<!-- <div class="row justify-content-center">
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
			  			</div> -->
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
	<div class="row justify-content-center">
        <div class="atm-updates col-8 col-sm-6 col-lg-4">
            <h2>DIRECTORS</h2>
        </div>
    </div>

	<div class="row mt-5" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
		<div class="container p-5">
			<div class="row justify-content-center">
				<div id="modal_1" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/sanjeev_kapoor_pic.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name text-center">Sanjeev Kapoor</span>
						<span id="atm_modal_post" class="atm-dir-post text-center"></span>
						<div style="display: none;">
						
						<p id="atm_modal_body">Awarded Padma Shri by the President in 2017, Chef Sanjeev Kapoor is the most celebrated face of Indian cuisine today. He is Chef extraordinaire, runs a successful TV Channel FoodFood, hosted Khana Khazana cookery show on television for more than 17 years, author of 200 best-selling cookbooks, restaurateur and winner of several culinary awards in India and abroad. He has also cooked for many dignitaries, including the Honourable Prime Minister Shri Narendra Modi and has achieved the Guinness World Record by cooking 918 kg khichdi live at World Food India 2017, New Delhi.  His recipe portal www.sanjeevkapoor.com is a complete cookery manual with a compendium of more than 15,000 tried and tested recipes, videos, articles, tips and trivia and a wealth of information on the art and craft of cooking in both English and Hindi. Over 5.4 million fans follow him on Facebook and his YouTube channel ‘sanjeevkapoorkhazana’ is very popular with over 3.5 million subscribers. His business of world class kitchen gadgets, Wonderchef has enabled and continues to empower women, a cause close to his heart.</p>
						</div>
						<!-- <div class="row justify-content-center">
					        <div class="my-2 atm-modal-social">
					          <a class="atm-modal-icon-holder fb m-2" href="www.facebook.com" target="_blank">
					            <span class="atm-modal-icon fa fa-facebook"></span>
					          </a>
					          <a class="atm-modal-icon-holder tw m-2" href="www.twitter.com" target="_blank">
					            <span class="atm-modal-icon fa fa-twitter"></span>
					          </a>
					          <a class="atm-modal-icon-holder in m-2" href="www.instagram.com" target="_blank">
					            <span class="atm-modal-icon fa fa-instagram"></span>
					          </a>
					        </div>
			  			</div> -->
					</div>
				</div>
				<div id="modal_2" class="pt-3 pt-sm-4 pt-md-0 col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/anant_gawande_pic.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name text-center">Anant Gawande</span>
						<span id="atm_modal_post" class="atm-dir-post text-center"></span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Anant Ratnakar Gawande is the Director of SK Restaurants. He is a fellow member of the Institute of Chartered Accountants of India since 1989 and has over 24 years of experience in the finance industry with a specialisation in leasing and hiring purchase finance, investment banking, portfolio advisory services and general banking services. He has promoted Talwalkars Better Value Fitness Limited and Anfin Investments Private Limited and has been associated with Better Value Leasing and Finance Limited, Vans Information Limited, Brainworks Learning Systems Private Limited and Popular Institute of Art Private Limited in the past. He currently oversees the entire finance operations including budgets and controls of SK Restaurants.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5 justify-content-center">
				<div id="modal_3" class="col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/harsha_bhatkal_pic.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name text-center">Harsha Bhatkal</span>
						<span id="atm_modal_post" class="atm-dir-post text-center"></span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Harsha Ramdas Bhatkal is the Director of SK Restaurants. He holds a Master’s Degree in Business Administration from Jamnalal Bajaj Institute of Management Studies, Mumbai and has 25 years of experience in publishing and marketing industry. Following this, he worked as a business journalist for Update Magazine and then joined his family owned Popular Prakashan Private Limited as Sales Manager. He took over Value Added News Service, a fledgling business database service and went on to create Vans Information – one of the pioneers in electronic information services in India. He has won several awards, including the Paul Hamlyn scholarship for young Indian publishers and Award for Excellence in Publishing given by the Federation of Indian Publishers to young Indian publishers. He is responsible for brand strategy and overall marketing of SK Restaurants.</p>
						</div>
					</div>
				</div>
				<div id="modal_4" class="pt-3 pt-sm-4 pt-md-0 col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/ninad_karpe_pic.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name text-center">Ninad Karpe</span>
						<span id="atm_modal_post" class="atm-dir-post text-center"></span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Ninad Karpe is the Chairman, Western Region of the Confederation of Indian Industries (CII), a non-government, not-for-profit, industry-led and industry-managed organisation. Karpe is also the Director of Aptech Ltd. and has been the MD and CEO of Aptech Ltd. for many years. During his 7 year stint at Aptech, Karpe turned around the company and expanded its footprint to 42 emerging countries.  He has also served CA Technologies as MD covering India and SAARC countries for more than 13 years. Karpe serves as an independent director on the board of companies like IDBI Bank, BNP Paribas AMC and Savita Oil Technologies Ltd. Earlier in his career, Karpe worked as a consultant, advising companies seeking to invest in India, authored books on taxation and foreign investment in India. He frequently writes for magazines and contributes to management schools by presentations on marketing and business strategy.</p>
						</div>
					</div>
				</div>
				<div id="modal_5" class="pt-3 pt-sm-4 pt-md-0 col-md-3 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card atm-card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/vinayak_gawande_pic.jpg">
						</div>
						<span id="atm_modal_name" class="atm-dir-name text-center">Vinayak Gawande</span>
						<span id="atm_modal_post" class="atm-dir-post text-center"></span>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body">Vinayak Gawande is the Promoter Director of SK Restaurants. He has been the Chairman of Gawande Consultants Pvt Ltd since its inception in 1993 and has over 35 years of experience in Business Management. He currently oversees taxation, legal, compliance and governance related matters of SK Restaurants. He has promoted Talwalkars Better Value Fitness Limited which is the largest gym chain in India and Sri Lanka alongwith others like Better Value Leasing and Finance Ltd, a boutique NBFC, Radhika Hotels Private Limited, Owner of Hotel Vallerina, a 3 star hotel in Khandala and Talwalkars Club Pvt Ltd, a company dedicated to run leisure clubs in India.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Key People -->
<section class="mb-lg-5 container p-5 revealable">
	<div class="row justify-content-center">
        <div class="atm-updates col-8 col-sm-6 col-lg-4">
            <h2>Core Team</h2>
        </div>
    </div>
	
	<div class="row mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div id="modal_6" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/rajeev_sir.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">Rajeev Matta</span>
							<span id="atm_modal_post" class="atm-key-post">CEO</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body"></p>
						</div>
					</div>
				</div>
				<div id="modal_7" class="pt-3 pt-sm-4 pt-md-0 col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/pradipto.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">Pradipto Das</span>
							<span id="atm_modal_post" class="atm-key-post">HEAD CHEF</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body"></p>
						</div>
					</div>
				</div>
				<div id="modal_8" class="pt-3 pt-sm-4 pt-md-0 col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/arpan.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">Arrppan Desaai</span>
							<span id="atm_modal_post" class="atm-key-post">Project Head</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body"></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5 justify-content-center">
				<div id="modal_9" class="col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/satyaki.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">Satyaki Mukherjee</span>
							<span id="atm_modal_post" class="atm-key-post">Business Development Head</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body"></p>
						</div>
					</div>
				</div>
				<div id="modal_10" class="pt-3 pt-sm-4 pt-md-0 col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/anshuma.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">Anshuma Sharma</span>
							<span id="atm_modal_post" class="atm-key-post">Franchisee Head</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body"></p>
						</div>
					</div>
				</div>
				<div id="modal_11" class="pt-3 pt-sm-4 pt-md-0 col-md-4 image-modal" data-toggle="modal" data-target="#myModal">
					<div class="card">
						<div class="card-image">
							<img id="atm_modal_img" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/pawan.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span id="atm_modal_name" class="atm-key-name">Pawan Gupta</span>
							<span id="atm_modal_post" class="atm-key-post">Finance Head</span>
						</div>
						<div style="display: none;">
						<span id="atm_modal_fb_link">www.facebook.com/</span>
						<span id="atm_modal_tw_link">www.twitter.com/</span>
						<span id="atm_modal_in_link">www.instagram.com/</span>
						<p id="atm_modal_body"></p>
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