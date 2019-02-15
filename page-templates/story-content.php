<?php
/**
Template Name: Story Page
**/
echo do_shortcode( '[atm_slider/]' );
get_header();
?>

<!-- About Section -->

<section class="container">
	<div class="atm-about-section-top">
		<h3>
			ilili means “tell me” in colloquial Lebanese and this is exactly what we want you to do. Each passing of our shared plates and the breaking of freshly baked Levantine pita opens up a new conversation.
		</h3>
	</div>
</section>
<section class="atm-c-tout-overlay atm-c-tout-overlay--dimmed" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/about_us.jpg'); height: 359px;" role="img" aria-label="Ambassadors of Hospitality">
	    <div class="container">
	    <h2 class="h1">Ambassadors of Hospitality</h2>
	    <a href="#" class="atm-btn atm-btn-brand-alt">About Us</a>
	</div>
</section>

<!-- Gallery Section -->

<div class="mt-5 container gallery-container">
	<div class="row justify-content-center">
		<div class="col"><h2>Gallery</h2></div>
	</div><hr>

	<div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/about_us.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/about_us.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/banner.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_3.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_3.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/restro_counts.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/restro_counts.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/shaam_savera.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/shaam_savera.jpg" alt="Park">
                </a>
            </div>
       </div>

	</div>

</div>
<!-- Body Sections -->

<section class="atm-c-split atm-c-split--vcenter atm-c-split--alternate">
	<div class="atm-c-split__col ">
		<div class="atm-c-split__col-inner">
			<div class="atm-c-split__content atm-content">
				<h2 class="h2 atm-c-split__heading">Our menu is never done</h2>
				<p>Every dish at ilili has it's own story from the traditional recipes direct from Lebanon, to modern updates that tell the history of our team, of our cooks and chefs who have left their mark on our kitchen, and our serving staff and managers who have been ambassadors of hospitality. Our menu is never done - we find inspiration all around, in new ingredients, new approaches, and fresh takes on old standards.</p>
				<a href="#" class="atm-c-btn atm-c-btn-brand-alt">View Menus</a>
			</div>
		</div>
	</div>		

	<div class="atm-c-split__col atm-c-split__col--empty">
		<div class="atm-c-split__col-inner">
				<div class="atm-c-split__image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/section_3.jpg');"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>