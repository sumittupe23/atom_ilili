<?php
/**
Template Name: Careers Page
**/
get_header();
?>

<section class="container-fluid atm-career-banner revealable atm-banner-header" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/career_banner.jpg');">
</section>

<section class="pb-5 atm-with-us container-fluid revealable">
	<div class="row justify-content-center">
        <div class="atm-updates col-8 col-lg-5 col-xl-4">
            <h2>WHY WORK WITH US?</h2>
        </div>
    </div>

	<div class="row justify-content-center text-center">
		<div class="col-9 col-md-6 col-lg-3 p-3 p-md-5">
			<div class="row justify-content-center p-5">
				<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/industry_top_names.png">	
			</div>
			<span>Top names in the industry as leaders</span>
		</div>
		<div class="col-9 col-md-6 col-lg-3 p-3 p-md-5">
			<div class="row justify-content-center p-5">
				<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/career_growth.png">
			</div>
			<span>Well-tailored career growth plan</span>
		</div>
		<div class="col-9 col-md-6 col-lg-3 p-3 p-md-5">
			<div class="row justify-content-center p-5">
				<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/master_culinary_art.png">
			</div>
			<span>One of the best place to master culinary art</span>
		</div>
	</div>
</section>

<section class="atm-with-us container revealable">
	<div class="row justify-content-center">
        <div class="atm-updates col-sm-5 col-lg-3">
            <h2>JOIN US</h2>
        </div>
    </div>

	<div class="pt-5 text-center">
		<h4>At Sanjeev Kapoor Restaurants, we are always looking for young, passionate and zealous professionals who eat, breathe and live food, and share the same passion as Chef Sanjeev Kapoor.  
		<br>Come, work with us for a fruitful and satisfying career in the hospitality industry.</h4>
	</div>
</section>

<section class="mb-5 container revealable">
	<div class="mb-5 mb-xl-0 row justify-content-center my-5">
		<div class="col-md-10 col-lg-6 p-5">
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
							<div id="collapse56" class="collapse" role="tabpanel" aria-labelledby="heading56" data-parent="#accordionEx5">
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
		<div class="mb-5 mb-xl-0 col-10 col-lg-6 p-3 p-lg-5" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
			<h1 class="text-center">APPLY NOW</h1>
			<div class="mb-5 mb-xl-0 container">
				<?php echo do_shortcode('[contact-form-7 id="34" title="Career Form New"]'); ?>
			</div>
		</div> 
	</div>
</section>

<?php
get_footer();
?>