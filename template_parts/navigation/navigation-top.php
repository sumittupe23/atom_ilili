<!-- Main Menu Bar -->
<?php if ( is_404() == false ) : ?>
<nav class="navbar navbar-expand-lg">
	<div id="sticky" class="container-fluid fixed-top px-5">
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
		<?php if ( !has_custom_logo() ) { ?>
			<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo.png">
		<?php } else { 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
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
		        if ( !$item->menu_item_parent && $link != "http://localhost/wordpress/reservations/" ):
		        // save this id for later comparison with sub-menu items
		        $parent_id = $item->ID;
		    ?>
      		<li class="nav-item">
				<a class="nav-link" href="<?php echo $link; ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><?php echo $title; ?></a></li>
				
				<?php elseif( $link == "http://localhost/wordpress/reservations/" ) : ?>
					<a href="<?php echo $link; ?>"><button type="submit" class="atm-btn atm-btn-brand"><?php echo $title; ?></button></a>
				<?php endif; ?>	
				
					<!-- Nested Menus not working -->
		<?php $count++; endforeach; ?>
      	</ul>
    </div>
  </div>
</nav>
<?php endif; ?>
