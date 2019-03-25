<?php get_header(); ?>
<div class="container-fluid" style="position: relative; top: -32px; background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/page_not_found.jpg'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100vh; overflow-y:auto;">
    <div class="row">
        <div class="pt-5 mt-5 col-md-12">
            <div class="pt-5 mt-5 error-template">
                <!-- <h1>
                    Oops!</h1>
                <h2><?php //_e( 'Page Not Found', 'atom' ) ?></h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div> -->
                <div class="pt-5 mt-5 error-actions">
                    <a href="<?php echo get_home_url(); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="mailto:webservices@skrestaurants.com" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>
