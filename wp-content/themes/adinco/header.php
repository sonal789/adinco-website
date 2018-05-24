<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Adinco Distilleries</title>
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

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <div id="wptime-plugin-preloader"></div>
 

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery-confirm.css" rel="stylesheet" />
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-confirm.js"></script>
        <script>
			if (sessionStorage.getItem('AnnouncementOnce') !== 'true') {
				$(document).ready(function(){ 
					$.confirm({
						icon: 'fa fa-question',
						theme: 'supervan',
						closeIcon: false,
						animation: 'scale',
						type: 'orange',
						 columnClass: 'col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1',
						title: '<div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/adinco_logo_full.png" width="250px"/><br/><br/>Adinco Distilleries is committed to Responsible Drinking</div>',
						content: 'This website is meant to be enjoyed by people of legal drinking age.<br/>Are you of legal drinking age in your country ?',
						icon: 'fa fa-warning',
						animation: 'scale',
						closeAnimation: 'zoom',
						buttons: {
							confirm: {
								text: 'Yes',
								btnClass: 'btn-orange',	
								action: function () { 
									//$.alert('test');
									sessionStorage.setItem('AnnouncementOnce','true');
								}
								
							},
							cancel: {
								text: 'No',
								action: function () {
								
								$.alert('You may not enter this website');
								window.location = '<?php echo esc_url( home_url( '/' ) ); ?>/notlegalage/';
								sessionStorage.setItem('AnnouncementOnce','false');
								}
							}	
						}
						
					});
					
				});    
			
				
			}
			
        </script>

 


<header>
	<nav class="navbar">
			
				
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt=""/></a>
		
		
		
		<div class="main-menu">
			<a href="javascript:;" class="toggle right" id="menu-toggle2">
				<i class="fas fa-bars"></i>
			</a>
			
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu','items_wrap' => '<ul data-menu data-menu-toggle="#menu-toggle2" class="menu">%3$s</ul>' ) ); ?>
			
			<!--<ul class="menu" data-menu data-menu-toggle="#menu-toggle2">
				<li><a href="#">About</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Brands</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact Us</a></li>	-->
			</ul> 
		</div>
	
		
      </nav>
</header>