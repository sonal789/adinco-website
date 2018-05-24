<?php
/**
 * Template Name: Events Lists
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
 

<section class="h-events">

	
	
<style>
.bx-wrapper .bx-prev {
  left: 5px;
}

.bx-wrapper .bx-next {
  right: 5px;
 
}
</style>
	
	<div class="col-md-10 offset-md-1">
		<h1 class="title">Events</h1>
		<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
	</div>
		
	
			<ul class="bxslider6">
	
			<?php 
			query_posts( array( 'post_type' => 'event-posts') );
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			
				<li>
					
					<a href="<?php echo get_site_url()?>/events/event-details/?eid=<?php echo $post->ID; ?>&event=<?php the_title();?>">
						<img src="<?php the_field('event_background_image'); ?>" />
						<p class="text-center"><b><?php the_title(); ?></b></p>
					</a>
				</li>
			
				
			<?php endwhile; endif;  ?>
			
			</ul>
			


	

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