<?php
/**
Template Name: Gallery Page
**/
get_header();
?>
<section class="py-5 my-5 container-fluid revealable">
	<div class="atm-updates">
		<div class="row justify-content-center">
			<div class="col-8 col-sm-4 col-md-3"><h2><?php echo get_the_title(); ?></h2></div>
		</div>
		<div class="mt-5 row justify-content-center">
			<div class="container">
				<?php echo do_shortcode('[visual_portfolio id="328"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>