<?php
/**
Template Name: Careers Page
**/
get_header();
?>

<!-- Banner Image -->

<section class="container-fluid revealable atm-ppl-header atm-m-hide">
	<img style="width: 100%" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/careers_banner.png">
</section>

<section class="container-fluid revealable atm-ppl-header atm-d-hide">
	<img style="width: 100%" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/careersweb2.png">
</section>

<section class="py-5 atm-with-us container-fluid revealable">
	<div class="row justify-content-center">
        <div class="atm-updates col-8 col-lg-5 col-xl-4">
            <h2 class="atm-underline">WHY WORK WITH US?</h2>
        </div>
    </div>

	<div class="row justify-content-center text-center">
		<div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3 p-3 p-md-5">
			<div class="row justify-content-center p-5">
				<div class="col-6">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/industry_top_names.png">	
				</div>
			</div>
			<div class="col-12 col-sm-10 offset-sm-1">
				<span>Top names in the industry as leaders</span>
			</div>
		</div>
		<div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3 p-3 p-md-5">
			<div class="row justify-content-center p-5">
				<div class="col-6">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/career_growth.png">
				</div>
			</div>
			<div class="col-12 col-sm-10 offset-sm-1">
				<span>Well-tailored career growth plan</span>
			</div>
		</div>
		<div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3 p-3 p-md-5">
			<div class="row justify-content-center p-5">
				<div class="col-6">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/master_culinary_art.png">
				</div>
			</div>
			<div class="col-12">
				<span>One of the best place to master culinary art</span>
			</div>
		</div>
	</div>
</section>

<section class="container revealable">
	<div class="row justify-content-center">
        <div class="atm-updates col-sm-5 col-lg-3">
            <h2 class="atm-underline">JOIN US</h2>
        </div>
    </div>

	<div class="pt-3 row justify-content-center no-gutters">
        <div class="col-10 text-justify atm-about-section-top">
			<h3>At Sanjeev Kapoor Restaurants, we are always looking for young, passionate and zealous professionals who eat, breathe and live food, and share the same passion as Chef Sanjeev Kapoor. Come, work with us for a fruitful and satisfying career in the hospitality industry.</h3>
		</div>
	</div>
</section>

<section class="mb-5 container revealable">
	<div class="row justify-content-center my-5">
		<div class="col-md-10 col-lg-6 p-5">
			<div class="container">

				  <!-- Content -->
				<div class="row d-flex justify-content-center">
				  <div class="col-md-10">
				  	<?php
					query_posts(array('cat'=>12, 'order'=>'DSC'));
						if (have_posts()) :
							while (have_posts()) :
								the_post();
					?>

					<!--Accordion wrapper-->
					<div class="accordion md-accordion accordion-5" id="accordionEx<?php the_ID(); ?>" role="tablist" aria-multiselectable="true">

						  <!-- Accordion card -->
						  <div id="post-<?php the_ID(); ?>" class="card mb-2 atm-accord-card" style="border-bottom: 2px solid #e2e2e2;">

							<!-- Card header -->
							<div class="card-header p-0 z-depth-1" role="tab" id="heading<?php the_ID(); ?>">
							  <a data-toggle="collapse" data-parent="#accordionEx<?php the_ID(); ?>" href="#collapse<?php the_ID(); ?>" aria-expanded="true"
								aria-controls="collapse<?php the_ID(); ?>">
								<span class="text-dark" style="line-height: 2;">
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
						<?php
							endwhile;
						endif;
						wp_reset_query();
						?>
					</div>
				</div>
			</div>

		</div>
		<div class="mb-5 mb-xl-0 col-10 col-lg-6">
			<h1 class="text-center">APPLY NOW</h1>
			<div class="mb-5 py-5 mb-xl-0 container" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
				<?php echo do_shortcode('[contact-form-7 id="34" title="Career Form New"]'); ?>
			</div>
		</div> 
	</div>
</section>


<section class="container revealable">
	<div class="pt-5 row justify-content-center">
        <div class="atm-updates col-8 col-lg-5 col-xl-4">
            <h2 class="atm-underline">Life at SKR</h2>
        </div>
    </div>
</section>

<section id="atm-team-test" class="pb-5 mb-5 container revealable">
	<div class="row atm-team-testim">
		<?php
		query_posts(array('cat'=>11, 'order'=>'ASC', 'posts_per_page'=>3));
			if (have_posts()) :
				while (have_posts()) :
					the_post();
		?>
		<div id="post-<?php the_ID(); ?>" class="mt-5 col-xs-12 col-sm-6 col-md-4">
			<div class="card" style="background-color: transparent; border: 1px solid rgb(192, 150, 61);">
                <div style="margin: 1rem 1rem 0 1rem; text-align: center;">
	                <div class="row justify-content-center">
	                	<div class="col-8 col-md-6">
	                		<a href=<?php the_permalink(); ?>><?php the_post_thumbnail(); ?></a>
                		</div>
	                </div>
	                <h4 class="pt-3 card-title"><?php the_title(); ?></h4>
                    <h6><?php the_post_thumbnail_caption(); ?></h6>
                	<hr style="border-top: 1px solid rgb(192, 150, 61);">
                </div>
                <div style="margin: 0 1rem 1rem 1rem; text-align: center;">
                	<div class="card-text">
                    	<p><?php 
							the_excerpt();
						?></p>
						<h6><a class="atm-c-btn atm-c-btn-brand-alt" href=<?php the_permalink(); ?>>Read More</a></h6>
                    </div>
                </div>
            </div>
		</div>
		<?php
			endwhile;
		endif;
		wp_reset_query();
		?>
	</div>
</section>

<?php
get_footer();
?>