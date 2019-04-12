<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
  
 get_header();
?>
<div class="container pt-5 mt-5 revealable">
	<div class="row justify-content-center">
		<?php
		 if ( have_posts() ) : the_post(); ?>
		<div class="col-md-10 m-md-5">
			<h1 class="atm-h1"><?php the_title(); ?></h1>
			<div class="p-3 p-md-5">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php
endif;

get_footer(); ?>