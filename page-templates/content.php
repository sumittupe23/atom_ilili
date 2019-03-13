<?php echo do_shortcode( "[atm_slider id='14328' /]" ); ?>

<!-- About Section -->

<section class="p-5 container revealable">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-10 atm-about-section-top">
			<h3>
				SK Restaurants is well placed and positioned in Indian and international markets to tap opportunities. It enjoys a robust foundation that supports growth across the business, catalysing revenues and margins, and is optimistic of driving growth in the coming years, through innovation. The Company aims at creating world class culinary experience for its customers through gourmet offerings.
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
	    			<h1>81</h1>
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

<section class="atm-c-split atm-c-split--vcenter atm-c-split--alternate revealable">
	<div class="atm-c-split__col ">
		<div class="atm-c-split__col-inner">
			<div class="atm-c-split__content atm-content">
				<h2 class="h2 atm-c-split__heading">Pursuit of Perfection</h2>
				<p>Multiple successful ventures have not kept Master Chef Sanjeev Kapoor away from indulging in his passion as a creator of culinary works of art. With a plethora of restaurants serving innovative and exciting Indian cuisine as well as other popular cuisines from the world, both in India and abroad, SK Restaurants aims to take the vision of Master Chef Sanjeev Kapoor to new heights.</p>
				<?php echo do_shortcode("[slide-anything id='13505']"); ?>
				<a href="https://skrestaurants.com/staging/brands/" class="atm-c-btn atm-c-btn-brand-alt">Know More</a>
			</div>
		</div>
	</div>		

	<div class="atm-c-split__col atm-c-split__col--empty">
		<div class="atm-c-split__col-inner">
				<div class="atm-c-split__image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/shaam_savera_.jpg');"></div>
		</div>
	</div>
</section>

<section class="mb-5 container-fluid revealable">
	<div class="atm-updates">
		<div class="row justify-content-center">
			<div class="col-8 col-sm-4 col-md-3"><h2>Updates</h2></div>
		</div>
		<div class="mt-5 row justify-content-center">
			<?php
			query_posts('cat=1');
				if (have_posts()) :
					while (have_posts()) :
						the_post();
			?>
			<div id="post-<?php the_ID(); ?>" class="col-md-5 col-lg-4">
				<div class="card atm-card">	
					<div class="atm-img-top">
					  	<!-- <img class="card-img-top img-fluid" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail(); ?>"> -->
					  	<?php the_post_thumbnail(); ?>
				  	</div>
					<div class="atm-card-body card-body text-center">
					  	<h3><?php the_title(); ?></h3>
					    <h6><a href=<?php the_permalink(); ?>>Read More</a></h6>
					  </div>
					</div>
				</div>
			<?php
				endwhile;
			endif;
			wp_reset_query();
			?>
		</div>
	</div>
	
</section>