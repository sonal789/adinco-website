<?php
/**
 * Template Name: Products Page
 *
 * @package WordPress
 * @subpackage adinco
 * @since 
 */
 
get_header(); 
?>


<section class="h-slider no-padding">
	
			
	<div class="inner-banner">
		
	</div>
	
</section>

<section class="productsection" style="color:#fff;">
		
	
		<?php 
		$ID = $_GET['pid'];
		$args = array('p' => $ID, 'post_type' => 'my-product-post');
		
		$loop = new WP_Query($args);
		?>
	
	
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php global $post; ?>
		

	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="row">
				<div class="col-md-3 product-image text-right">
					<img src="<?php the_field('main_product_image', $ID); ?>" alt=""/>
				</div>
				
				<div class="col-md-9 product-desc-box">
				
					
				
					<div class="bxslider5">
						<div class="product-details">
							
							
							<div class="flex-container">
								<div class="pdet"><h1 class="title gold"><?php  the_title(); ?></h1><?php the_field('description', $ID); ?></div>
								<div class="pserv">
								<br/>
								<h4 class="black"><b>Serving Suggestions</b></h4>
								<div class="divider"></div>
								<div class="black">
								<?php the_field('serving_suggestions', $ID); ?>
								</div>
								<div class="precipe"><a href="#"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/recipe.png" alt=""></a></div>
								</div>
							</div>
							
						</div>
						
						<?php if (get_field('featured_video', $ID)) { ?>
							<div class="product-details">
								<a class="youtube" href="http://www.youtube.com/embed/<?php the_field('featured_video', $ID); ?>?rel=0&amp;wmode=transparent">
								
								<img src="https://img.youtube.com/vi/<?php the_field('featured_video', $ID); ?>/maxresdefault.jpg" />
								
								<div class="overlay">
									<div class="overlay-text"><i class="far fa-play-circle"></i></div>
								  </div>
								  </a>
							</div>
						<?php } ?>
						
						
						
				
						
						<div class="product-details">
							<?php 
								$args = array('post_type'=> 'event-posts');              
								$the_query = new WP_Query( $args );
								$i = 0;
								if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
								
								$for_product = get_field('for_product');
								if($i == 3){ break; }
								if($for_product == $ID)
								{
							?>
									<a class="p-eimg" href="<?php echo get_site_url()?>/events/event-details/?eid=<?php echo $post->ID; ?>&event=<?php the_title();?>">
										<img src="<?php the_field('event_background_image'); ?>" style="border:1px solid #fff;" />
									</a>
								
							<?php
									$i++;
								}
								endwhile; endif;
							?>	
						</div>
						
						
					
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php endwhile; ?>
	
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