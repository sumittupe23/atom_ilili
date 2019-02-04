<nav class="navbar navbar-expand-lg">
  <!-- Sticky bottom nav bar -->
  <div id="sticky-bottom" class="container-fluid fixed-bottom atm-sticky-bot-nav">
    <div class="">
      <a class="atm-icon fb" href="#" target="_blank">
        <span class="fa fa-facebook"></span>
      </a>
      <a class="atm-icon tw" href="#" target="_blank">
        <span class="fa fa-twitter"></span>
      </a>
      <a class="atm-icon in" href="#" target="_blank">
        <span class="fa fa-instagram"></span>
      </a>
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
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo $link; ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><?php echo $title; ?> <span class="sr-only">(current)
                  </span></a>
                </li>
              <?php endif; ?>
          <?php $count++; endforeach; ?>
          </ul>
      </div>
  </div>

  <!-- Navbar Bottom Copyright -->
  <div class="atm-bottom-nav">
    <div class="atm-bottom-nav-inner">
      <a href="#" target="_blank">
        © Copyright 2018 International Hospitality Investments, LLC. All rights reserved. ilili Restaurant's Logo is a registered trademark, of International Hospitality Investments, LLC.<br>
        powered by BentoBox
      </a>
    </div>
  </div>
</nav>