<?php
/**
 * Template Name: About Page
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
	
		<div class="row">
			
			<div class="col-md-12">
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
				
				<div class="row">
					<div class="col-md-5 text-right"><img class="distillery-img" src="<?php echo the_field('about_image', 7); ?>" alt="About Adinco Distillaries" />
				</div>
					<div class="col-md-6 col-sm-7 col-xs-12 text-left">

						<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );

							endwhile; endif; 
						?>

					</div>
					</div>
				
				
				
			</div>
		</div>
		
		<!--<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/barley-leaf.png"  class="barley"/>-->
		
	
</section>
	
<?php global $wp_query;
					$post->ID = 7;
					?>
<section class="h-cta" style="background:url(<?php echo the_field('cta_background', $post->ID); ?>) no-repeat;" data-aos="zoom-in">
	<div class="subscribe">
		<h2><?php echo the_field('cta_text', $post->ID); ?></h2>
		<a class="btn ad-btn inline" href="#inline_content"> <div class="btnprt1">Sign Up</div><div class="btnprt2"> <i class="fas fa-angle-right"></i> </div></a>
	</div>
</section>

 
<?php get_footer(); ?>