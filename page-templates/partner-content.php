<?php
/**
Template Name: Partner Page
**/
get_header();
?>

<!-- Banner Image -->

<section class="container-fluid revealable atm-header">
	<img style="width: 100%" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/partners_banner.png">
</section>

<!-- Become a partner -->

<section class="container revealable">
	<div class="pt-5 row justify-content-center">
        <div class="atm-updates col-8 col-lg-6 col-xl-5">
            <h2 class="atm-underline">become a partner</h2>
        </div>
    </div>

	<div class="row justify-content-center my-5">
		<div class="col-md-10">
			<span>SK Restaurants is dedicated to building leading brands across multiple restaurant formats that target diverse market segments, with brands reflecting the commitment to operational efficiency and enhanced hospitality. Our goal is to drive consistent growth via franchise and joint venture partners globally.
			<br><br>If you’ve got the same zeal, vision and capability, then you got to be here with us!</span><br><br>
			<div class="text-center">
				<span>For more information
			<br><br>franchise@skrestaurants.com  | +91 22 26735014/15
			<br><br>Satyaki Mukherjee | +91 9029065029</span>
			</div>
		</div>
	</div>
</section>

<!-- Franchise Form Sections -->

<section class="container revealable">
	<div class="row justify-content-center my-3 my-md-5">
		<div class="col-md-6 pt-3 pt-md-5 px-2 px-md-5">
			<h1 class="text-center">PARTNER SUPPORT</h1>
			
			<div class="container">

				  <!-- Content -->
				  <div class="pt-5">
					<div class="row d-flex justify-content-center">
					  <div class="col-md-10">
					  	<?php
						query_posts(array('cat'=>13, 'order'=>'ASC', 'posts_per_page'=>'20'));
							if (have_posts()) :
								while (have_posts()) :
									the_post();
						?>

						<!--Accordion wrapper-->
						<div class="accordion md-accordion accordion-5" id="accordionEx<?php the_ID(); ?>" role="tablist" aria-multiselectable="true">

						  <!-- Accordion card -->
						  <div id="<?php the_ID(); ?>" class="card mb-2 atm-accord-card" style="border-bottom: 2px solid #e2e2e2;">

							<!-- Card header -->
							<div class="card-header p-0 z-depth-1" role="tab" id="heading<?php the_ID(); ?>">
							  <a data-toggle="collapse" data-parent="#accordionEx<?php the_ID(); ?>" href="#collapse<?php the_ID(); ?>" aria-expanded="true"
								aria-controls="collapse<?php the_ID(); ?>">
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<img style="width: 24px; margin: 5px 10px;" src="<?php echo $url; ?>">
								<span class="text-dark">
								  <?php the_title(); ?>
								</span>
								<span class="atm-plus"></span>
							  </a>
							</div>

							<!-- Card body -->
							<div id="collapse<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordionEx<?php the_ID(); ?>">
							  <div class="rgba-black-light text-dark z-depth-1">
								<div class="p-3 p-md-4 mb-0">
									<?php the_content(); ?>
								</div>
							  </div>
							</div>
						  </div>
						  <!-- Accordion card -->
							
						</div>
						<!--/.Accordion wrapper-->
						<?php
							endwhile;
						endif;
						wp_reset_query();
						?>

					  </div>
					</div>
				  </div>
				  <!-- Content -->
				
			</div>
		</div>
		
		<div class="mb-2 mb-sm-5 mb-xl-0 col-10 col-lg-6 pt-5">
		<h1 class="text-center">CONNECT WITH US!</h1>
			<div class="container" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
				<?php echo do_shortcode('[contact-form-7 id="31" title="Franchise Form New"]'); ?>
			</div>
		</div> 
	</div>
</section>

<section class="container">
	<div class="py-5 row justify-content-center">
	    <div class="atm-updates col-8 col-lg-6 col-xl-5">
	        <h2 class="atm-underline">partner testimonials</h2>
	    </div>
	</div>
</section>

<section id="franchi_carousel" class="pb-5 mb-5 carousel slide mb-5 container revealable" data-ride="carousel">
	
    <div class="carousel-inner">

	    <div class="row justify-content-center no-gutters carousel-item active">
	    	<div class="container">
	    		<div class="row justify-content-center">
			    	<div class="col-md-3 text-center">
			    		<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/testimonial_fr.jpg">
			    	</div>
			    	<div class="pt-5 pt-md-0 col-md-8 text-justify">
			    		<span>My personal equation with Master Chef Sanjeev Kapoor is older than our professional association. So, when we decided to enter the realm of F & B in UAE, he was the first one to come to mind and what better brand than The Yellow Chilli for this association. It’s been almost two years now and we have already opened 5 and all set to match this figure in next two years. We are overwhelmed with the tremendous support we are getting from SK Restaurants on every front. Food is a no brainer. This group knows what is good Indian food and serve it with that emotional touch. Happy to be associated and looking now to expanding our horizons with the group even beyond UAE.</span><br><br>

			    		<b>
			    			<span>Mr. Praveen Bhatnagar</span><br>
			    			<span>Managing Director, JSB Investments LLC, UAE</span>
			    		</b>

			    	</div>
			    </div>
		    </div>
	    </div>

	    <div class="row justify-content-center no-gutters carousel-item">
	    	<div class="container">
	    		<div class="row justify-content-center">
			    	<div class="col-md-3 text-center">
			    		<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/testimonial2_fr.jpg">
			    	</div>
			    	<div class="pt-5 pt-md-0 col-md-8 text-justify">
			    		<span>This is my first foray into the F & B domain. I wanted to kick start this with a premium, Indian, fine dining space in Riyadh, in a building which houses the world’s top seven restaurants as destination outlets. After much research, we zeroed in on Signature by Sanjeev Kapoor. They had the best food to offer, exactly what people in Riyadh will cherish. After associating with SK Restaurants, we got to know about their The Yellow Chilli chain. The brand which stands for casual, mid segment market serving Indian cuisine. We knew it can do wonders and so we signed a master franchise agreement to do 30 outlets in KSA. We are happy with our association; today it is more personal than professional. They deliver and we are ready to take off.</span><br><br>

			    		<b>
			    			<span>Mr. Ibrahim Abdullah Alhedaithy</span><br>
			    			<span>Chairman, ESNA Holdings KSA, SAUDI ARABIA</span>
			    		</b>

			    	</div>
			    </div>
			</div>
	    </div>

	</div>

    <a class="carousel-control-prev atm-career-carousel-prev" href="#franchi_carousel" role="button" data-slide="prev">
	  <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
	  <i class="fa fa-3x fa-angle-left"></i>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next atm-career-carousel-next" href="#franchi_carousel" role="button" data-slide="next">
	  <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
	  <i class="fa fa-3x fa-angle-right"></i>
	  <span class="sr-only">Next</span>
	</a>

</section>

<?php
get_footer();
?>