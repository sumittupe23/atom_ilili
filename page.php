<?php 
/**
* This template is used to display all the pages
* @package Wordpress
* @subpackage Atom
* @since 1.0
* @version 1.0
**/
get_header(); ?>

	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'templates-parts/content', 'page' );
					endwhile;

					the_content();
				?>

			</main>
		</div>
	</div>

<?php get_footer(); ?>