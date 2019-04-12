<nav id="atm-bottom-footer" class="navbar navbar-expand-lg">
  <!-- Sticky bottom nav bar -->
  <div id="sticky-bottom" class="container-fluid fixed-bottom atm-sticky-bot-nav text-center justify-content-center">
    <div class="atm-md-footer">
      <a class="atm-icon fb" href="https://www.facebook.com/SKRestaurants/" target="_blank">
        <span class="fa fa-facebook"></span>
      </a>
      <a class="atm-icon tw" href="https://twitter.com/skrestaurants" target="_blank">
        <span class="fa fa-twitter"></span>
      </a>
      <a class="atm-icon in" href="https://www.instagram.com/skrestaurants/" target="_blank">
        <span class="fa fa-instagram"></span>
      </a>
      <a class="atm-icon li" href="https://www.linkedin.com/in/sanjeev-kapoor-restaurants-309618b7/" target="_blank">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>

      <!-- <div class="atm-bottom-nav-copy"> -->
      <span class="px-3 atm-bottom-nav-copyright">SK Restaurants Pvt. Ltd. &trade;</span>
      
    </div>

    <?php
    $menu_name = 'bottom';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
    ?>

    <div id="navbarsExample08" class="atm-bot-nav">
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
                  <a class="nav-link" href="<?php echo $link; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a>
                </li>
              <?php endif; ?>
          <?php $count++; endforeach; ?>
          </ul>
      </div>
  </div>

  <!-- Navbar Bottom Copyright -->
  <?php if ( is_active_sidebar( 'atm_footer_one' ) || is_active_sidebar( 'atm_footer_two' ) || is_active_sidebar( 'atm_footer_three' ) ) : ?>

<?php if ( is_home() ) : ?>
<section class="mb-4 p-3 atm-bottom-d-nav atm-m-hide">
    <div class="row justify-content-center">
      <h1>Say Hello.</h1>
    </div>

    <div class="row justify-content-center no-gutters">

      <div class="col-3 col-xl-2" style="border-right: 2px solid rgb(192, 150, 61);">
        <div class="row justify-content-center text-center no-gutters">
          <div class="pb-3 col-8">
            <i class="fa fa-phone fa-3x"></i><br>
            <span>(+91) 22 26735014</span><br>
            <span>(+91) 22 26735015</span>
          </div>
        </div>

      </div>

      <div class="col-4 col-xl-3" style="border-right: 2px solid rgb(192, 150, 61);">
        <div class="row justify-content-center text-center no-gutters">
          <div class="pb-3 col-10">
            <a href="https://www.google.com/maps/place/SK+Brands+Pvt+Ltd/@19.1362299,72.8322181,17z/data=!4m8!1m2!2m1!1sc+18+dalia+estate+andheri+link+road+andheri+w+mumbai+400053+india!3m4!1s0x0:0x611fb8b787438c5e!8m2!3d19.1361512!4d72.8332192" target="_blank">  
              <i class="fa fa-map-marker fa-3x"></i><br>
              <span>C-18, Dalia Estate, Andheri Link Road,</span><br>
              <span>Andheri (W), Mumbai - 400053, India</span>
            </a>
          </div>
        </div>
      </div>

      <div class="col-3 col-xl-2">
        <div class="row justify-content-center text-center no-gutters">
          <div class="pb-3 col-8">
            <a href="mailto:info@skrestaurants.com">
              <i class="fa fa-envelope fa-3x"></i><br>
              <span>info@skrestaurants.com</span>
            </a>
          </div>
        </div>
      </div>

    </div>

    <?php if ( is_active_sidebar( 'atm_footer_three' ) ) : ?>
      <div class="mt-5 row justify-content-center">

        <?php 
          dynamic_sidebar( 'atm_footer_three' ); 
        ?>

      </div>
    <?php endif; ?>  

    <?php if ( is_active_sidebar( 'atm_footer_two' ) ) : ?>
      <div class="mt-5 row justify-content-center">

        <?php 
          dynamic_sidebar( 'atm_footer_two' ); 
        ?>

      </div>
    <?php endif; ?>
    
</section>
<?php endif; ?>
  
  <section class="atm-bottom-nav atm-d-hide">
    <div class="row justify-content-center py-5">

    <?php if ( is_active_sidebar( 'atm_footer_one' ) ) : ?>

      <div class="col-sm-8 col-md-7 col-lg-3 px-3">
        
        <?php
          dynamic_sidebar( 'atm_footer_one' );
        ?>
        
    </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'atm_footer_two' ) ) : ?>
    <div class="pt-4 pt-sm-0 col-sm-8 col-md-7 col-lg-3 px-3">

        <?php 
          dynamic_sidebar( 'atm_footer_two' ); 
        ?>
        
    </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'atm_footer_three' ) ) : ?>
    <div class="pt-4 pt-sm-0 col-sm-8 col-md-7 col-lg-3 px-3">

        <?php 
          dynamic_sidebar( 'atm_footer_three' ); 
        ?>

    </div>
    <?php endif; ?>

    </div>
    
  </section>
  <?php endif; ?>

</nav>