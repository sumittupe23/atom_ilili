<?php
/**
Template Name: Careers Page
**/
get_header();
?>

<section class="container-fluid atm-career-banner revealable" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/career_banner.jpg');">
	<div class="py-5 row justify-content-end">
		<div class="col-md-4">
			<h3>DO WHAT YOU LOVE.</h3>
			<h2>LOVE WHAT YOU DO!</h2>
			<div class="pt-5 form-group">
				<div class="input-container">
					<ul>
					  <li>
					    <input type="radio" id="f-option" name="selector">
					    <label for="f-option">Experience Professionals</label>
					    <div class="check"></div>
					  </li>
					  
					  <li>
					    <input type="radio" id="s-option" name="selector">
					    <label for="s-option">Students and recent Graduates</label>
					    <div class="check"><div class="inside"></div></div>
					  </li>
					</ul>
				</div>

				<div class="search">
			      <input type="text" class="searchTerm" placeholder="What are you looking for?">
			      <button type="submit" class="searchButton">
			        <i class="fa fa-search"></i>
			     </button>
			   </div>
			</div>
		</div>
	</div>
</section>

<section class="pb-5 atm-with-us container-fluid revealable">
	<div class="text-center">
		<h1>WHY WORK WITH US?</h1><hr>
		<!-- <h4>Find a job you love, create the future you want, explore your unique passion, and empower billions.</h4> -->
	</div>
	<div class="row justify-content-center text-center">
		<div class="col-md-3">
			<!-- <h3>For the love of food</h3> -->
			<div class="row justify-content-center p-5">
				<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/love_of_food.png">	
			</div>
			<span>For the love of food</span>
		</div>
		<div class="col-md-3">
			<!-- <h3>For excellence</h3> -->
			<div class="row justify-content-center p-5">
				<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/for_excellence.png">
			</div>
			<span>For excellence</span>
		</div>
		<div class="col-md-3">
			<!-- <h3>For a progressive well being</h3> -->
			<div class="row justify-content-center p-5">
				<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/well_being.png">
			</div>
			<span>For a progressive well being</span>
		</div>
	</div>
</section>

<section class="pb-5 atm-life-skr container-fluid revealable">
	<div class="text-center">
		<h1>LIFE AT SKR</h1><hr>
	</div>
	<div id="about_carousel" class="carousel my-5 revealable" data-ride="carousel" data-interval="false">
		<div class="atm-about-carousel mt-5">
			<ol class="carousel-indicators mb-auto atm-about-carousel-indicator">
			  <li class="" data-target="#about_carousel" data-slide-to="0" class="active" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/life_at_skr.jpg'); background-size: cover;"></li>
			  <li class="" data-target="#about_carousel" data-slide-to="1" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/banner_1.jpg'); background-size: cover;"></li>
			  <li class="" data-target="#about_carousel" data-slide-to="2" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg'); background-size: cover;"></li>
			</ol>
		</div>
		<div class="carousel-inner">
			<div class="container-fluid">
			  <div class="atm-carousel-item carousel-item active">
			    <div class="row justify-content-center">
			    	<div class="col-xl-5 align-self-center">
			    		<span>With a plethora of restaurants serving innovative and exciting Indian cuisine as well as other popular cuisines from the world, both in India and abroad, SK Restaurants aims to take the vision of Chef Sanjeev Kapoor to new heights.</span>
			    	</div>
			    	<div class="col-5">
			    		<div class="card">
			    			<img class="card-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/life_at_skr.jpg" alt="" style="width:100%;">
			    		</div>
			    	</div>
			    </div>
			  </div>
			  <div class="atm-carousel-item carousel-item">
			  	<div class="row justify-content-center">
			    	<div class="col-5 align-self-center">
			    		<span>Multiple successful ventures have not kept Master Chef Sanjeev Kapoor away from indulging in his passion as a creator of culinary works of art.</span>
			    	</div>
			    	<div class="col-5">
			    		<div class="card">
			    			<img class="card-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_1.jpg" alt="" style="width:100%;">
			    		</div>
			    	</div>
			    </div>
			   </div>
			  <div class="atm-carousel-item carousel-item">
			  	<div class="row justify-content-center">
			    	<div class="col-5 align-self-center">
			    		<span>With a plethora of restaurants serving innovative and exciting Indian cuisine as well as other popular cuisines from the world, both in India and abroad, SK Restaurants aims to take the vision of Chef Sanjeev Kapoor to new heights.</span>
			    	</div>
			    	<div class="col-5">
			    		<div class="card">
			    			<img class="card-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg" alt="" style="width:100%;">
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</section>

<section class="atm-with-us container revealable">
	<div class="text-center">
		<h1>JOIN US</h1><hr>
		<h4>At Sanjeev Kapoor Restaurants, we are always looking for young, passionate and zealous professionals who eat, breathe and live food, and share the same passion as Chef Sanjeev Kapoor.  
		<br>Come, work with us for a fruitful and satisfying career in the hospitality industry.</h4>
	</div>
</section>

<section class="container revealable">
	<div class="row justify-content-center my-5">
		<div class="col-md-6 p-5">
			<div class="container">

				  <!-- Content -->
				<div class="row d-flex justify-content-center">
				  <div class="col-md-10">

					<!--Accordion wrapper-->
					<div class="accordion md-accordion accordion-5" id="accordionEx5" role="tablist" aria-multiselectable="true">

						  <!-- Accordion card -->
						  <div class="card mb-2 atm-accord-card">

							<!-- Card header -->
							<div class="card-header p-0 z-depth-1" role="tab" id="heading56">
							  <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse56" aria-expanded="true"
								aria-controls="collapse56">
								<span class="white-text">
								  Requirement Sample 1<br>Location
								</span>
							  </a>
							</div>

							<!-- Card body -->
							<div id="collapse56" class="collapse show" role="tabpanel" aria-labelledby="heading56" data-parent="#accordionEx5">
							  <div class="rgba-black-light white-text z-depth-1">
								<p class="p-md-4 mb-0">
									Location: Mumbai<br>
									Experience: 5 Years<br><br>

									As a part of the site selection process, an SKR Franchise Business Support Manager will help the franchisee assess and select an appropriate site.
								</p>
							  </div>
							</div>
						  </div>
						  <!-- Accordion card -->

						  <!-- Accordion card -->
						  <div class="card mb-2 atm-accord-card">

							<!-- Card header -->
							<div class="card-header p-0 z-depth-1" role="tab" id="heading57">
							  <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse57" aria-expanded="true"
								aria-controls="collapse57">
								<span class="white-text">
								  Requirement Sample 2<br>Location
								</span>
							  </a>
							</div>

							<!-- Card body -->
							<div id="collapse57" class="collapse" role="tabpanel" aria-labelledby="heading57" data-parent="#accordionEx5">
							  <div class="rgba-black-light white-text z-depth-1">
								<p class="p-md-4 mb-0">
									Location: Mumbai<br>
									Experience: 5 Years<br><br>

									As a part of the site selection process, an SKR Franchise Business Support Manager will help the franchisee assess and select an appropriate site.
								</p>
							  </div>
							</div>
						  </div>
						  <!-- Accordion card -->

						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-6 p-5" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
		<h1 class="text-center">APPLY NOW</h1>
			<div class="container">
				<?php echo do_shortcode('[contact-form-7 id="14345" title="Career Form New"]'); ?>
			</div>
		</div> 
	</div>
</section>

<?php
get_footer();
?>