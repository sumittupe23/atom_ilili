<?php
/**
Template Name: Gallery Page
**/
get_header();
?>
<section class="py-5 my-5 container-fluid revealable">
	<div class="pt-5 atm-updates">
		
		<div class="mt-5 row justify-content-center">
			<div class="container">
				<?php echo do_shortcode('[visual_portfolio id="328"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>