<?php
/**
Template Name: Reservations Page
**/
get_header();
?>

<!-- Reservations Container -->

<div class="atm-reserve container-fluid revealable atm-reserve-header" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/reservationsfoodpicture.jpg');">
    <div class="row">
        <div class="col-sm-10 offset-sm-2 offset-md-7 col-md-5 text-justify">
            <h1>Reservations</h1>
            <span>We're happy to have you join us at your favourite SK Restaurant. Kindly fill in the details below and wait for a response from our side. We shall soon get back to you with a confirmation.</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-2 offset-md-7 col-md-5 text-justify">
            <?php echo do_shortcode('[contact-form-7 id="14302" title="Reservations Form"]'); ?>
        </div>
    </div>
</div>

<div class="atm-events container mb-5 revealable">
    <div class="row justify-content-center">
        <div class="atm-updates col-8 col-md-6 col-xl-5">
            <h2>UPCOMING EVENTS</h2>
        </div>
    </div>

    <div class="mb-5 mb-xl-0 row justify-content-center">
        <div class="mb-5 mb-xl-0 col-8 col-md-6 text-center">
            <h4>Grand Launch</h4>
            <span>of Sura Vie by Master chef Sanjeev Kapoor <br>GMR mall, Belgavi</span> 
            <h6>April 15, 2019  |  5:00 pm onwards</h6>
            <h4>Cooking without oil</h4>
            <span>Masterclass by celebrity chef Anupa <br>Food Hall, Andheri, Mumbai</span>
            <h6 class="mb-5 mb-lg-0">April 15, 2019  |  2:00 - 4:30 pm</h6>
        </div>
    </div>
</div>

<?php get_footer(); ?>