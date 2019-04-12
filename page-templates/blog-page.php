<?php
/**
Template Name: Blog Page
**/
get_header();
?>

<section id="atm-blog-sec" class="atm-blog-sect py-5 my-5 container revealable">
	<?php
		query_posts(array('cat'=>8, 'order'=>'DSC', 'posts_per_page'=>3));
			if (have_posts()) :
				while (have_posts()) :
					the_post();
		?>
	<div id="post-<?php the_ID(); ?>" class="pt-5 row justify-content-center justify-content-md-between">
		<div class="atm-blog-img col-10 col-sm-6 col-md-4">
			<a href=<?php the_permalink(); ?>><?php the_post_thumbnail(); ?></a>
		</div>
		<div class="col-10 pt-5 pt-md-0 col-md-7">
			<h3><?php the_title(); ?></h3>
			<strong><span><?php the_post_thumbnail_caption(); ?></span></strong>
			<div class="pt-4 atm-blog-content">
				<?php 
					the_excerpt();
				?>
			</div>
		    <h6><a class="atm-c-btn atm-c-btn-brand-alt" href=<?php the_permalink(); ?>>Read More</a></h6>
		</div>
	</div>
	<?php
		endwhile;
	endif;
	wp_reset_query();
	?>
</section>

<?php
get_footer();
?>