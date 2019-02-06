<?php get_header(); ?>

	<?php 

	if ( is_front_page() ) {
		get_template_part( 'page-templates/content' );
	}

	?>

<?php get_footer(); ?>