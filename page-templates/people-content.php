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

<section class="container p-5 revealable" style="padding: 80px 0 0 0;">
	<h1 class="text-center">OUR DIRECTORS</h1><hr class="custom_hr">
	<div class="row mt-5" style="background-color: rgba(255,255,255,1); box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.32);">
		<div class="container p-5">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<div class="card atm-card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample.jpg">
						</div>
						<span class="atm-dir-name">Camila Engelbert</span>
						<span class="atm-dir-post">Senior Producer</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card atm-card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample_.jpg">
						</div>
						<span class="atm-dir-name">Christopher Da Silva</span>
						<span class="atm-dir-post">User Experience Director</span>
					</div>
				</div>
			</div>
			<div class="row pt-5 justify-content-center">
				<div class="col-md-3">
					<div class="card atm-card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample_.jpg">
						</div>
						<span class="atm-dir-name">Christopher Da Silva</span>
						<span class="atm-dir-post">User Experience Director</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card atm-card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample.jpg">
						</div>
						<span class="atm-dir-name">Camila Engelbert</span>
						<span class="atm-dir-post">Senior Producer</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card atm-card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/director_sample_.jpg">
						</div>
						<span class="atm-dir-name">Christopher Da Silva</span>
						<span class="atm-dir-post">User Experience Director</span>
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
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_one.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span class="atm-key-name">MICHAEL TUSK</span>
							<span class="atm-key-post">Chef and Owner</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_two.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span class="atm-key-name">NEIL STETZ</span>
							<span class="atm-key-post">CHEF DE CUISINE</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_three.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span class="atm-key-name">YANNICK DUMONCEAU</span>
							<span class="atm-key-post">PASTRY CHEF</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5 justify-content-center">
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_four.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span class="atm-key-name">MATT CERN</span>
							<span class="atm-key-post">GENERAL MANAGER</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_five.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span class="atm-key-name">KEI TERAUCHI</span>
							<span class="atm-key-post">ASSISTANT GENERAL MANAGER</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-image">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/key_people_six.jpg">
						</div>
						<div class="atm-key-header card-header text-center p-4">
							<span class="atm-key-name">CAMERON TYLER</span>
							<span class="atm-key-post">LEAD SOMMELIER</span>
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