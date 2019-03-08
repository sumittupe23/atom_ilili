<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
  
 get_header();
?>
<div class="container pt-5 mt-5">
	<div class="row justify-content-center">
		<?php if ( have_posts() ) : the_post(); ?>
		<div class="col-md-10 text-center m-5">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<!-- <img class="img-fluid" src=<?php //get_the_post_thumbnail_url(); ?>> -->
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-10 m-5">
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '<div class="row justify-content-start"><div class="col-md-3"><span title="%title" class="atm-btn atm-btn-brand">' . __( 'Previous Post', 'atom' ) . '</span></div></div>',
					'next_text' => '<div class="row justify-content-end"><div class="col-md-3"><span title="%title" class="atm-btn atm-btn-brand">' . __( 'Next Post', 'atom' ) . '</span></div></div>',
				) );
			?>
		</div>
	</div>
</div>
<?php
endif;

get_footer(); ?>