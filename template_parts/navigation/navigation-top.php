<?php 
// This script will run for long and will exceed more than 100 seconds.
// To make a fix, you need to send a header or data earlier than your "long-running process".
// sending a header to fix the error is currently impossible in PHP versions at the moment.
// sending a data.
str_pad('', 4096, "\n"); // send 4kb of new line to browser, just make sure that this new line will not affect your code.
// if you have output compression, make sure your data will reach >4KB.
?>
<!-- Main Menu Bar -->
<?php if ( is_404() == false || is_page( 14581 ) == false ) : ?>
<nav class="navbar navbar-expand-lg">
	<div id="sticky" class="container-fluid fixed-top px-5">
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
		<?php if ( !has_custom_logo() ) { ?>
			<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo.png">
		<?php } else { 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<img class="img-fluid" src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
		<?php } ?>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	  <i class="fa fa-bars"></i>
	</button>

	  <?php
	  $menu_name = 'top';
	  $locations = get_nav_menu_locations();
	  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
	  ?>

    <div id="navbarsExample07" class="atm-nav collapse navbar-collapse">
      	<ul class="navbar-nav mr-auto">
      		<?php
		    $count = 0;
		    $submenu = false;
		    foreach( $menuitems as $item ):
		        $link = $item->url;
		        $title = $item->title;
		        // item does not have a parent so menu_item_parent equals 0 (false)
		        if ( !$item->menu_item_parent && $link != "https://skrestaurants.com/staging/reservations/" ):
		        // save this id for later comparison with sub-menu items
		        $parent_id = $item->ID;
		    ?>
      		<li class="nav-item">
				<a class="nav-link" href="<?php echo $link; ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><?php echo $title; ?></a></li>
				
				<?php elseif( $link == "https://skrestaurants.com/staging/reservations/" ) : ?>
					<a href="<?php echo $link; ?>"><button type="submit" class="atm-btn atm-btn-brand"><?php echo $title; ?></button></a>
				<?php endif; ?>	
				
					<!-- Nested Menus not working -->
		<?php $count++; endforeach; ?>
			<!-- <li class="nav-item">
				<a class="nav-link" target="_blank" href="https://www.facebook.com/login.php?next=https://skrestaurants.com/staging%2Fsharer.php&display=popup"><i class="fa fa-share-alt"></i></a>
			</li> -->
			
			<?php if ( is_active_sidebar( 'atm_social_share_top_menu' ) ) :
              	dynamic_sidebar( 'atm_social_share_top_menu' );
             endif; ?>
			
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-search"></i></a>
			</li>
      	</ul>
    </div>
  </div>
</nav>
<?php endif; ?>
