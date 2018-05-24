<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Adinco 
 * @since 1.0
 * @version 1.0
 */

 ?>
 
 <!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Adinco Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=BenchNine|Open+Sans+Condensed:300,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" type="text/css">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" rel="stylesheet" />

	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/demo.css" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colorbox.css" rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/aos.css" rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/litetooltip.css" rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css" rel="stylesheet" />
	
	

	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body class="sec404">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 


<section class="section404 no-padding " >
<div class="overlay-text">
<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt=""/></a>
<h1 class="gold">This is not the page you are looking for?</h1>
<br/>
<a class="btn ad-btn" href="<?php echo get_site_url()?>"> <div class="btnprt1">TAKE ME TO HOME PAGE</div></a>
</div>

</section>

<?php get_footer();
