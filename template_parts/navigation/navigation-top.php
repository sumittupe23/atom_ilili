<!-- Top Navigation Bar -->
<div class="atm-top-bar">
	<a href="#" target="_blank">
		<span>236 Fifth Ave, New York, NY 10001</span>
	</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="#" target="_blank">
		<span>(212) 683-2929</span>
	</a>
</div>
<!-- Main Menu Bar -->
<nav class="navbar navbar-expand-lg">
  <div id="sticky" class="container-fluid fixed-top px-5">
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
    	<?php if ( !has_custom_logo() ) { ?>
    		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo.png">
    	<?php } else { 
    		$custom_logo_id = get_theme_mod( 'custom-logo' );
    		$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
    		?>
    		<img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
    	<?php } ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarsExample07" class="atm-nav collapse navbar-collapse">
      	<ul class="navbar-nav mr-auto">
        	<li class="nav-item active">
				<a class="nav-link" href="<?php echo get_home_url(); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">Home <span class="sr-only">(current)
				</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Story </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Brands </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">People </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Partner </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Careers </a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown </a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
			</li>
      	</ul>
      	<form class="form-inline">
			<!-- <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search"> -->
			<button type="submit" class="atm-btn atm-btn-brand">Reservations</button>
		</form>
    </div>
  </div>
</nav>
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	  <div class="atm-carousel-item carousel-item active">
	    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_1.jpg" alt="Los Angeles" style="width:100%;">
	    <div class="container">
	      <div class="carousel-caption text-left">
	        <h1>Example headline.</h1>
	        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	        <p><a class="atm-btn atm-btn-brand" href="#" role="button">Sign up today</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="atm-carousel-item carousel-item">
	    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_2.jpg" alt="Los Angeles" style="width:100%;">
	    <div class="container">
	      <div class="carousel-caption">
	        <h1>Another example headline.</h1>
	        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	        <p><a class="atm-btn atm-btn-brand" href="#" role="button">Learn more</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="atm-carousel-item carousel-item">
	    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/banner_3.jpg" alt="Los Angeles" style="width:100%;">
	    <div class="container">
	      <div class="carousel-caption text-right">
	        <h1>One more for good measure.</h1>
	        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	        <p><a class="atm-btn atm-btn-brand" href="#" role="button">Browse gallery</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>

