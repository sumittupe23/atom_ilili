<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo get_bloginfo(' charset '); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="desciption" content="<?php echo get_bloginfo(' desciption '); ?>">
	<meta name="author" content="<?php echo get_bloginfo(' author '); ?>">

	<title><?php echo get_bloginfo(' name '); ?></title>

	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>

<?php 

	get_template_part( '/template_parts/navigation/navigation-top' ); 

?>

<div class="container-fluid p-0 m-0">