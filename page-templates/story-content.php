<?php
/**
Template Name: Story Page
**/
get_header();
?>

<!-- About Section -->

<section class="container-fluid revealable" style="padding: 80px 0 0 0;">
    <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/storybanner.jpg">
</section>
<section class="atm-c-split atm-c-split--vcenter atm-c-split--alternate revealable">
    <div class="atm-c-split__col ">
        <div class="atm-c-split__col-inner">
            <div class="atm-c-split__content atm-content">
                <h2 class="h2 atm-c-split__heading">the first restaurant</h2>
                <p>Way back in 1988, Masterchef Sanjeev Kapoor opened his first ever restaurant in Dubai and then in the in the year 2011, an opportunity to do something new and different with Indian food laid the genesis of Signature. The idea behind the restaurants is to give the guests a feel of travelling across India with all five senses and a plate. Our goal at SKR is to celebrate life and share our passion for food.</p>
            </div>
        </div>
    </div>      

    <div class="atm-c-split__col atm-c-split__col--empty">
        <div class="atm-c-split__col-inner">
                <div class="atm-c-split__image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/sanjeev_kappor_story_page.jpg');"></div>
        </div>
    </div>
</section>

<section class="atm-c-split atm-c-split--vcenter revealable">
    <div class="atm-c-split__col ">
        <div class="atm-c-split__col-inner">
            <div class="atm-c-split__content atm-content">
                <h2 class="h2 atm-c-split__heading">Our menu is never done</h2>
                <p>The menus in our restaurants are filled with exciting classic and exotic recipes, many of them modern and simpliefied adaptations of traditional Indian dishes. Every dish at SKR has it's own story from the traditional Indian recipes to modern updates that tell the history of our team, of our cooks and chefs who have left their mark on our kitchen, and our serving staff and managers who have been ambassadors of hospitality. Our menu is never done - we find inspiration all around, in new ingredients, new approaches, and fresh takes on old standards.</p>
            </div>
        </div>
    </div>      

    <div class="atm-c-split__col atm-c-split__col--empty">
        <div class="atm-c-split__col-inner">
                <div class="atm-c-split__image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/food_story_page.jpeg');"></div>
        </div>
    </div>
</section>

<!-- Gallery Section -->

<div class="mt-5 container gallery-container revealable">
    <div class="row justify-content-center">
        <div class="col"><h2>Gallery</h2></div>
    </div><hr>

    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/about_us.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/about_us.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/banner.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_3.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_3.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/restro_counts.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/restro_counts.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('template_directory'); ?>/assets/shaam_savera.jpg">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/shaam_savera.jpg" alt="Park">
                </a>
            </div>
       </div>

    </div>

</div>
<?php get_footer(); ?>