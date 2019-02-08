<!-- Navbar Bottom Copyright -->
<?php if ( is_active_sidebar( 'atm_footer_one' ) || is_active_sidebar( 'atm_footer_three' ) ) : ?>
<section class="atm-bottom-nav">
  <div class="row justify-content-center pt-5">
    <?php if ( is_active_sidebar( 'atm_footer_one' ) ) : {
      # code...
    } ?>
    <div class="col-sm-6 col-md-5 col-lg-3 pl-5 pl-lg-0">
      <!-- <div class="atm-bottom-nav-address"> -->
          <?php
            dynamic_sidebar( 'atm_footer_one' );
          ?>
      <!-- </div> -->
    </div>
    <?php endif; ?>

    <div class="col-sm-6 col-md-5 col-lg-3 pt-3 pt-sm-0">
      <div class="atm-bottom-nav-social">
        <h3>Connect </h3>
        <div class="atm-sticky-bot-nav">
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
      </div>
    </div>

    <?php if ( is_active_sidebar( 'atm_footer_three' ) ) : {
      # code...
    } ?>
    <div class="col-sm-6 col-md-5 col-lg-3 pt-3 pt-lg-0">
      <!-- <div class="atm-bottom-nav-news"> -->
        <!-- <h3>Newsletter & Offers </h3> -->
          <?php dynamic_sidebar( 'atm_footer_three' ); //echo do_shortcode('[contact-form-7 id="137" title="Newsletter"]'); ?>
      <!-- </div> -->
    </div>
  </div>
  <?php endif; ?>

</section>
<?php endif; ?>
<?php if ( is_active_sidebar( 'atm_footer_two' ) ) : ?>
<section class="atm-bottom-nav">
  <div class="row justify-content-md-center">
    <div class="col">
      <!-- <div class="atm-bottom-nav-copy"> -->
        <!-- <span>&copy; 2019 SK Restaurants Pvt. Ltd.</span> -->
        <?php
          dynamic_sidebar( 'atm_footer_two' );
        ?>
      <!-- </div> -->
    </div>
  </div>
</section>
<?php endif; ?>