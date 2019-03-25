<?php
/**
Template Name: Story Page
**/
get_header();
?>

<!-- About Section -->

<section class="container-fluid revealable atm-header">
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
        <div class="atm-updates col-8 col-sm-5 col-md-3">
            <h2>The finest</h2>
        </div>
    </div>
    <div class="pt-3 row justify-content-center">
        <div class="col-8 text-justify atm-about-section-top">
            <h3>Being the brainchild of Master Chef Sanjeev Kapoor, it is quite obvious that SK Restaurants stands for and delivers the best – be it food, ambience, hospitality, etc. So, it goes without saying that each of our brands is designed according to the segment they fall under with utmost perfection and finesse. The best of interiors, state-of-art kitchens with latest technologies, freshest of ingredients and highest standards in service are pretty much the hallmark of each chain.</h3>
        </div>
    </div>
    <?php echo do_shortcode("[atm_tools id='85' /]"); ?>
</section>

<!-- the world on a plate -->
<section class="mb-lg-5 container-fluid revealable atm-location-map">
    <div class="row justify-content-center">
        <div class="atm-updates col-8 col-lg-6 col-xl-5">
            <h2>the world on a plate</h2>
        </div>
    </div>
    <div class="pt-3 row justify-content-center">
        <div class="col-8 text-justify atm-about-section-top">
            <h3>With 82 restuarants in 50 cities  SK Restaurants offers Every dish at SKR has it's own story from the traditional Indian recipes to modern updates that tell the history of our team, of our cooks and chefs who have left their mark on our kitchen.</h3>
        </div>
    </div>

    <div class="row justify-content-center py-5 no-gutters">
        <div class="atm-loc-map col-md-8 pb-4">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-1 atmslideup">
                        <div class="pt-5 container-fluid no-gutters">
                            <div class="pb-3 row justify-content-center">
                                <span>10</span><span>Countries</span>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12" style="padding: 0;">
                                    <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/fork.png" alt="Fork">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 atmslidedown">
                        <div class="container-fluid">
                            <div class="row justify-content-start no-gutters">
                                <div class="col-12">
                                    
                                    <div id="image_map">
                                        <map name="map_example">
                                            <area href="www.google.com" alt="Google" title="Google" target="_blank" shape="circle" coords="1,1,NaN">
                                        </map>
                                        
                                        <img class="img-fluid atm-location-plate" src="<?php echo get_bloginfo('template_directory'); ?>/assets/worldmap_plate.png" alt="SKRPL Location Map" usemap="#map_example">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 atmslideup">
                        <div class="pt-5 container-fluid no-gutters">
                            <div class="pb-3 row justify-content-center">
                                <span>83</span><span>Restaurants</span>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12" style="padding: 0;">
                                    <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/assets/spoon.png" alt="Spoon">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>