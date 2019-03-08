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
                <p>Just after establishing his own company Khana Khazana India Pvt Ltd in 1995, the idea of opening a restaurant is what was next on the mind of Master Chef Sanjeev Kapoor. With his super entrepreneurship skills, he finally opened his first restaurant, Khazana in Dubai which became a runaway success right from the word go! This was 1998, and since then it has been no looking back with Signature, The Yellow Chilli, Hong Kong, Sura Vie, Grain Of Salt and the latest, India Green.</p>
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
                <h2 class="h2 atm-c-split__heading">A Menu, as vivid and unique as each season…</h2>
                <p>Since the beginning, Master Chef Sanjeev Kapoor has been working on making Indian Cuisine, the numero uno in the world. He believes in keeping his food simple where taste is paramount, yet presenting it in the most innovative ways to suit the modern day palates. Keeping this philosophy in mind, all our brands also work on the same principles. Also, our menus are constantly worked on by the skillful team of chefs to keep moving with the times. We have a seasonal menu every two months and our menu changes every year. The inspiration is derived from all around – ingredients, approaches, situations, fresh takes on old standards and much more.</p>
            </div>
        </div>
    </div>      

    <div class="atm-c-split__col atm-c-split__col--empty">
        <div class="atm-c-split__col-inner">
                <div class="atm-c-split__image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/food_story_page.jpeg');"></div>
        </div>
    </div>
</section>

<!-- impeccable hospitality -->

<section class="container-fluid revealable">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="text-center">The finest</h1><hr>
            <span>Being the brainchild of Master Chef Sanjeev Kapoor, it is quite obvious that SK Restaurants stands for and delivers the best – be it food, ambience, hospitality, etc. So, it goes without saying that each of our brands is designed according to the segment they fall under with utmost perfection and finesse. The best of interiors, state-of-art kitchens with latest technologies, freshest of ingredients and highest standards in service are pretty much the hallmark of each chain.</span>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-3">
            <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/hospitality_one.jpg" alt="">
        </div>
        <div class="col-md-3">
            <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/hospitality_two.jpg" alt="">
        </div>
        <div class="col-md-3">
            <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/hospitality_three.jpg" alt="">
        </div>
    </div>
</section>

<!-- the world on a plate -->
<section class="container-fluid revealable">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="text-center">the world on a plate</h1><hr>
            <span>With 82 restuarants in 50 cities  SK Restaurants offers Every dish at SKR has it's own story from the traditional Indian recipes to modern updates that tell the history of our team, of our cooks and chefs who have left their mark on our kitchen.</span>
        </div>
    </div>

    <div class="row justify-content-center py-5">
        <div class="col-md-8">
            <div class="atm-loc-map row justify-content-between">
            <!--<div class="col-md-2 revealable">
                    <img class="img-fluid" src="<?php //echo get_bloginfo('template_directory'); ?>/assets/fork.png" alt="">
                </div>data-content="The Yellow Chilli &#010; Hong Kong"
                <div class="col-md-2 revealable">
                    <img class="img-fluid" src="<?php //echo get_bloginfo('template_directory'); ?>/assets/spoon.png" alt="">
                </div> -->
                <span id="uaepopoverData" class="beacon" style="position:absolute; top:51%; left:57%; cursor: url('<?php echo get_bloginfo('template_directory'); ?>/assets/chef_caricature_cursor.png'), auto;" animation="true" data-content="<center>The Yellow Chilli <br> Hong Kong</center>" rel="popover" data-placement="top" data-html="true"></span>                
                <span id="canpopoverData" class="beacon" style="position:absolute; top:40%; left:32%; cursor: url('<?php echo get_bloginfo('template_directory'); ?>/assets/chef_caricature_cursor.png'), auto;" animation="true" data-content="<center>The Yellow Chilli <br> Hong Kong</center>" rel="popover" data-placement="top" data-html="true"></span>
                <span id="indpopoverData" class="beacon" style="position:absolute; top:52%; left:61%; cursor: url('<?php echo get_bloginfo('template_directory'); ?>/assets/chef_caricature_cursor.png'), auto;" animation="true" data-content="<center>The Yellow Chilli <br> Suravie <br> Grain of Salt</center>" rel="popover" data-placement="top" data-html="true"></span>
                <span id="popoverData" class="beacon" style="position:absolute; top:45%; left:32%; cursor: url('<?php echo get_bloginfo('template_directory'); ?>/assets/chef_caricature_cursor.png'), auto;" animation="true" data-content="<center>The Yellow Chilli</center>" rel="popover" data-placement="top" data-html="true"></span>
                <img class="img-fluid" style="height: 780px;" src="<?php echo get_bloginfo('template_directory'); ?>/assets/locationmap.jpg" alt="SKRPL Location Map">
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<?php echo do_shortcode("[atm_tools id='14349' /]"); ?>

<?php get_footer(); ?>