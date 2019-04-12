<?php echo do_shortcode( "[atm_slider id='8' /]" ); ?>

<!-- About Section -->

<section class="container-fluid revealable atm-header atm-d-hide">
    <img style="width: 100%" class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/homebannerwebmobile_sanjeev_kapoor.png">
</section>

<section class="py-5 container revealable">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-10 atm-about-section-top">
			<h3>
				Sanjeev Kapoor Restaurants identifies itself in being an avant garde. The story started more than two decades ago with a clear ideology of serving classy food at affordable prices. This ideology has become a religion today with a spread that has crossed many geographies around the globe and with variations which only a food magician and designer of the caliber of Master Chef Sanjeev Kapoor can deliver.<br><br>

				Welcome to SK Restaurants, your own extension to your food identity. A place where the 'eating out' concept is translated into a real experience.
			</h3>
		</div>
	</div>
</section>

<section id="restro_counts" class="atm-c-tout-overlay atm-c-tout-overlay--dimmed revealable" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/restro_counts.jpg');" role="img" aria-label="Ambassadors of Hospitality">
    
    <div class="container">
	    <div class="row justify-content-center">
	    	<div class="col-md-3">
	    		<div class="atm-restro-count">
	    			<h1>9</h1>
	    			<h4>Countries</h4>
	    		</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="atm-restro-count">
	    			<h1>53</h1>
	    			<h4>Cities</h4>
	    		</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="atm-restro-count">
	    			<h1>80</h1>
	    			<h4>Restaurants</h4>
	    		</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="atm-restro-count">
	    			<h1>8</h1>
	    			<h4>Brands</h4>
	    		</div>
	    	</div>
	    </div>
	</div>
	
</section>

<!-- Body Sections -->

<section class="my-5 container atm-pursuit-section revealable">
    <div class="row justify-content-center no-gutters">
        <div class="order-2 order-sm-1 mt-5 col-10 col-sm-8 col-md-6 text-center">
                <h2 class="h2">Pursuit of Perfection</h2>
                <p class="mb-4">Multiple successful ventures have not kept Master Chef Sanjeev Kapoor away from indulging in his passion as a creator of culinary works of art. With a plethora of restaurants serving innovative and exciting Indian cuisine as well as other popular cuisines from the world, both in India and abroad, SK Restaurants aims to take the vision of Master Chef Sanjeev Kapoor to new heights.</p>
				<div class="m-4">
					<?php echo do_shortcode("[slide-anything id='44']"); ?>
				</div>
				<a href="https://skrestaurants.com/staging/brands/" class="text-center atm-c-btn atm-c-btn-brand-alt">Know More</a>
        </div>
        <div class="order-1 order-sm-2 col-10 col-sm-8 pt-5 pt-md-0 col-md-5">
        	<img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/chef.png">
        </div>
    </div>
</section>

<section class="mb-5 container-fluid revealable">
	<div class="atm-updates">
		<div class="row justify-content-center">
			<div class="col-8 col-sm-4 col-md-3">
				<h2 class="atm-underline">Updates</h2>
			</div>
		</div>
	</div>
</section>

<section id="atm-team-test" class="pb-5 mb-5 container revealable">
	<div class="row atm-team-testim">
		<?php
		query_posts(array('cat'=>7, 'order'=>'DSC', 'posts_per_page'=>3));
			if (have_posts()) :
				while (have_posts()) :
					the_post();
		?>
		<div id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-6 col-md-4">
			<div class="card" style="background-color: transparent; border: 1px solid rgb(192, 150, 61);">
                <div class="card-body text-center">
	                <div class="row justify-content-center">
	                	<div class="atm-img col-12">
	                		<a href=<?php the_permalink(); ?>><?php the_post_thumbnail(); ?></a>
                		</div>
	                </div>
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title"><?php the_title(); ?></h4>
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
