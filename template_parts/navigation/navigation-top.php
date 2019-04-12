<?php 
// This script will run for long and will exceed more than 100 seconds.
// To make a fix, you need to send a header or data earlier than your "long-running process".
// sending a header to fix the error is currently impossible in PHP versions at the moment.
// sending a data.
str_pad('', 4096, "\n"); // send 4kb of new line to browser, just make sure that this new line will not affect your code.
// if you have output compression, make sure your data will reach >4KB.
?>
<!-- Main Menu Bar -->
<?php if ( is_404() == false ) : ?>

<nav class="navbar navbar-expand-lg">
	<div id="sticky" class="container-fluid fixed-top py-2 py-sm-0 px-5">
	<a class="navbar-brand atm-d-hide" href="<?php echo get_home_url(); ?>">
		<img width="164" height="60" style="width: 164px; height: 60px;" title="<?php echo get_bloginfo( 'name' ); ?>" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/skrpl_mobile_logo.png">
	</a>
	
	<a class="navbar-brand atm-m-hide" href="<?php echo get_home_url(); ?>">
		<?php if ( !has_custom_logo() ) { ?>
			<img class="img-fluid" title="<?php echo get_bloginfo( 'name' ); ?>" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo.png">
		<?php } else { 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<img class="img-fluid" src="<?php echo $image[0]; ?>" title="<?php echo get_bloginfo( 'name' ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
		<?php } ?>
	</a>
	
	<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	  <i class="fa fa-bars"></i> -->
	<!-- </button> -->

	  <?php
	  $menu_name = 'top';
	  $locations = get_nav_menu_locations();
	  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
	  ?>

    <div class="atm-nav collapse navbar-collapse atm-m-hide">

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
				<a class="nav-link" href="<?php echo $link; ?>" title="<?php echo $title ?>"><?php echo $title; ?></a></li>
				
				<?php elseif( $link == "https://skrestaurants.com/staging/reservations/" ) : ?>
					<a href="<?php echo $link; ?>"><button type="submit" class="atm-btn atm-btn-brand"><?php echo $title; ?></button></a>
				<?php endif; ?>	
				
					<!-- Nested Menus not working -->
		<?php $count++; endforeach; ?>
			<!-- <li class="nav-item">
				<a class="nav-link" target="_blank" href="https://www.facebook.com/login.php?next=https://skrestaurants.com/staging%2Fsharer.php&display=popup"><i class="fa fa-share-alt"></i></a>
			</li> -->
			
			<?php //if ( is_active_sidebar( 'atm_social_share_top_menu' ) ) :
              	//dynamic_sidebar( 'atm_social_share_top_menu' );
             //endif; ?>
			
			<li id="atm-sch" class="nav-item" style="position: relative; top: -8px;">
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			</li>
      	</ul>
    </div>
    <span class="atm-d-hide" style="font-size:1.5rem;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>
</nav>

<div id="atmMobNav" class="atm-overlay">
  <?php
	  $menu_bot_name = 'bottom';
	  $bot_locations = get_nav_menu_locations();
	  $bot_menu = wp_get_nav_menu_object( $bot_locations[ $menu_bot_name ] );
	  $bot_menuitems = wp_get_nav_menu_items( $bot_menu->term_id, array( 'order' => 'DESC' ) );
  ?>
  <a href="javascript:void(0)" class="atmnavmobclosebtn" onclick="closeNav()">&times;</a>
  <div class="atm-overlay-content">
  	<?php
    $count = 0;
    foreach( $menuitems as $item ):
        $tlink = $item->url;
        $ttitle = $item->title;
    ?>
		<a href="<?php echo $tlink; ?>"><?php echo $ttitle; ?></a>

	<?php $count++; endforeach; ?>

	<?php
    $ct = 0;
    foreach( $bot_menuitems as $bot_item ):
        $blink = $bot_item->url;
        $btitle = $bot_item->title;
    ?>
		<a href="<?php echo $blink; ?>"><?php echo $btitle; ?></a>

	<?php $ct++; endforeach; ?>

		<div class="py-3 px-5 container">
			<hr style="border-color: #000;">
		</div>
			<a class="atm-modal-icon-holder fb m-2" href="https://www.facebook.com/SKRestaurants/" target="_blank" rel="noopener noreferrer">
				<span class="atm-modal-icon fa fa-facebook"></span>
			</a>
			<a class="atm-modal-icon-holder tw m-2" href="https://twitter.com/skrestaurants" target="_blank" rel="noopener noreferrer">
				<span class="atm-modal-icon fa fa-twitter"></span>
			</a>
			<a class="atm-modal-icon-holder in m-2" href="https://www.instagram.com/skrestaurants/" target="_blank" rel="noopener noreferrer">
				<span class="atm-modal-icon fa fa-instagram"></span>
			</a>
			<a class="atm-modal-icon-holder in m-2" href="https://www.linkedin.com/in/sanjeev-kapoor-restaurants-309618b7/" target="_blank" rel="noopener noreferrer">
				<span class="atm-modal-icon fa fa-linkedin"></span>
			</a>

  </div>
</div>

<?php endif; ?>
