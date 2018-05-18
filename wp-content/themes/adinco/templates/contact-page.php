<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage adinco
 * @since 
 */
 
get_header(); ?>

 
<section class="h-slider no-padding">
	
			
	<div class="inner-banner">
		
	</div>
	
</section>
 

<section class="h-about">

	<div class="container1">
	<div class="row">
		<div class="col-md-4">
			<h1 class="title">Write to Us</h1>
			<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div>
		<div class="offset-md-1 col-md-6">
			<h1 class="title">Contact Us</h1>
			<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
			<div class="contactinfo text-left no-padding">
				<?php $post->ID = 7; ?>
				<h3><b>Our Office</b></h3>
				<p>
					<?php echo the_field('address', $post->ID); ?>
				</p>
				
				<h3><b>Get in touch</b></h3>
				<p>
					<?php echo the_field('contact_numbers', $post->ID); ?><br/>

					<?php echo the_field('email_id', $post->ID); ?>
				</p>
				
				<h3><b>Follow Us</b></h3>
				<p>
					<ul class="socials">
						<li><a class="facebook" href="<?php echo the_field('facebook', $post->ID); ?>"><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="twitter" href="<?php echo the_field('twitter', $post->ID); ?>"><i class="fab fa-twitter"></i></a></li>
						<li><a class="google" href="<?php echo the_field('googleplus', $post->ID); ?>"><i class="fab fa-google-plus-g"></i></a></li>
						<li><a class="youtube" href="<?php echo the_field('youtube', $post->ID); ?>"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</p>
			</div>
		</div>
	</div>
	
	</div>
		
	
</section>
	
<?php global $wp_query;
					$post->ID = 7;
					?>
<section class="h-cta" style="background:url(<?php echo the_field('cta_background', $post->ID); ?>) no-repeat;">
	<div class="subscribe">
		<h2><?php echo the_field('cta_text', $post->ID); ?></h2>
		<a class="btn ad-btn" href="#"> <div class="btnprt1">Sign Up</div><div class="btnprt2"> <i class="fas fa-angle-right"></i> </div></a>
	</div>
</section>

 
<?php get_footer(); ?>