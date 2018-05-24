<?php
/**
 * Template Name: Recipes Lists
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

	
	
		<div class="container">
	
		<h1 class="title"><?php  the_title(); ?></h1>
			<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
	
			<ul class="bxslider7">
	
			<?php 
			query_posts( array( 'post_type' => 'recipes') );
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			
			
				
				<li>
						<?php if(get_field('video')){ ?>
						<div class="row recipe-box">
							
							<div class="col-md-12 recipe-det">
								<h1 class="title"><?php the_title(); ?></h1>
								<div style="position:relative;">
								<a class="youtube" href="http://www.youtube.com/embed/<?php the_field('video', $ID); ?>?rel=0&amp;wmode=transparent">
								
									<img src="https://img.youtube.com/vi/<?php the_field('video', $ID); ?>/maxresdefault.jpg" style="width:100%;height:auto;max-height:350px" />
								
									<div class="overlay">
										<div class="overlay-text"><i class="far fa-play-circle"></i></div>
									</div>
								</a>
								</div>
							</div>
						</div>
						<?php } else { ?>
						<div class="row recipe-box">
							
							<div class="col-md-3 text-center">
								<img src="<?php the_field('image1'); ?>" class="img-wh" />
							</div>
							<div class="col-md-9 recipe-det">
								<h1 class="title"><?php the_title(); ?></h1>
								<div class="row">
									<div class="col-md-5">
										<p><?php the_field('description'); ?></p>
									</div>
									<div class="col-md-7">
										<p><?php the_field('description_right'); ?></p>
									</div>
								</div>
								<?php global $wp_query;
								$post->ID = get_field('product');
								//echo
								?>
								<p class="prd-link float-right">Know More about <a href="<?php echo get_site_url()?>/products/?pid=<?php echo $post->ID; ?>&product=<?php get_the_title($post->ID);?>" class=""><b><?php echo get_the_title($post->ID);?></b></a></p>
							</div>
						</div>
					
						<?php } ?>
						
					
				</li>
				

			
				
			<?php endwhile; endif;  ?>
			
			</ul>
			

		</div>
	

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