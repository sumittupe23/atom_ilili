<nav class="navbar navbar-expand-lg">
  <!-- Sticky bottom nav bar -->
  <div id="sticky-bottom" class="container-fluid fixed-bottom atm-sticky-bot-nav">
    <div class="">
      <a class="atm-icon fb" href="https://www.facebook.com/SKRestaurants/" target="_blank">
        <span class="fa fa-facebook"></span>
      </a>
      <a class="atm-icon tw" href="https://twitter.com/skrestaurants" target="_blank">
        <span class="fa fa-twitter"></span>
      </a>
      <a class="atm-icon in" href="https://www.instagram.com/skrestaurants/" target="_blank">
        <span class="fa fa-instagram"></span>
      </a>

      <!-- <div class="atm-bottom-nav-copy"> -->
      <span class="px-3" style="font-size: 0.85rem; color: #fff;">&copy; 2019 SK Restaurants Pvt. Ltd.</span>
      
    </div>

    <?php
    $menu_name = 'bottom';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
    ?>

    <div id="navbarsExample07" class="atm-bot-nav collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <?php
            $count = 0;
            $submenu = false;
            foreach( $menuitems as $item ):
                $link = $item->url;
                $title = $item->title;
                // item does not have a parent so menu_item_parent equals 0 (false)
                if ( !$item->menu_item_parent ):
                // save this id for later comparison with sub-menu items
                $parent_id = $item->ID;
            ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $link; ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><?php echo $title; ?></a>
                </li>
              <?php endif; ?>
          <?php $count++; endforeach; ?>
          </ul>
      </div>
  </div>

  <!-- Navbar Bottom Copyright -->
<?php if ( is_home() ) : ?>
  <?php if ( is_active_sidebar( 'atm_footer_one' ) || is_active_sidebar( 'atm_footer_three' ) ) : ?>
  <section class="atm-bottom-nav">
    <div class="row justify-content-center py-5">
      <?php if ( is_active_sidebar( 'atm_footer_one' ) ) : {
        # code...
      } ?>
      <div class="col-sm-8 col-md-7 col-lg-3 pl-5 pl-lg-0">
        <!-- <div class="atm-bottom-nav-address"> -->
            <?php
              dynamic_sidebar( 'atm_footer_one' );
            ?>
        <!-- </div> -->
      </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'atm_footer_three' ) && is_active_sidebar( 'atm_footer_two') ) : {
        # code...
      } ?>
      <div class="col-sm-8 col-md-7 col-lg-5 pt-3 pt-lg-0">
        
        <div class="row justify-content-center pb-3">
          <div class="col-10 col-sm-12">
            <?php dynamic_sidebar( 'atm_footer_two' ); ?>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-12">
            <?php dynamic_sidebar( 'atm_footer_three' ); ?>
          </div>
        </div>
        
      </div>
    </div>
    <?php endif; ?>

  </section>
  <?php endif; ?>
<?php endif; ?>

</nav>