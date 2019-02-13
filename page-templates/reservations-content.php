<?php
/**
Template Name: Reservations Page
**/
get_header();
?>

<!-- Reservations Container -->

<div class="atm-reserve container-fluid my-5 pt-5" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/reservations.jpg');">
    <div class="row">
        <div class="col-5 offset-7 text-left">
            <h1>Reservations</h1>
            <span>We're happy to have you join us at your favorite SK restaurant. Please keep in mind we can only hold tables for up to 15 minutes past your reservation time. Whatever your event or celebration, we are here to make your special day a truly memorable one!</span>
        </div>
    </div>
    <div class="row">
        <div class="col-5 offset-7">
            <?php echo do_shortcode('[contact-form-7 id="14302" title="Reservations Form"]'); ?>
        </div>
    </div>
</div>

<div class="atm-events container mb-5">
    <div class="row justify-content-center">
        <div class="col-4 text-center">
            <h1>UPCOMING EVENTS</h1><hr>
            <h4>Grand Launch</h4>
            <span>of Sura Vie by Master chef Sanjeev Kapoor <br>GMR mall, Belgavi</span> 
            <h6>April 15, 2019  |  5:00 pm onwards</h6>
            <h4>Cooking without oil</h4>
            <span>Masterclass by celebrity chef Anupa <br>Food Hall, Andheri, Mumbai</span>
            <h6>April 15, 2019  |  2:00 - 4:30 pm</h6>
        </div>
    </div>
</div>

<?php get_footer(); ?>