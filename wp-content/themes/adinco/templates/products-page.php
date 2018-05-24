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
<?php 
		$ID = $_GET['pid'];
		$args = array('p' => $ID, 'post_type' => 'my-product-post');
		
		$loop = new WP_Query($args);
		?>

<?php if(get_field('background_color', $ID)=="#000"){ ?>
<section class="productsection" style="background:<?php the_field('background_color', $ID); ?>;color:#fff;">
<?php } else { ?>			
	<section class="productsection" style="background:<?php the_field('background_color', $ID); ?>;color:#000;">
	<?php } ?>	
		
	
	
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php global $post; ?>
		

	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="row">
				<div class="col-md-3 product-image ">
					<img src="<?php the_field('main_product_image', $ID); ?>" alt=""/>
				</div>
				
				<div class="col-md-9 product-desc-box">
				
					
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="<?php echo get_site_url()?>/">Home</a></li>
					  <li class="breadcrumb-item"><a href="<?php echo get_site_url()?>/brands/">Brands</a></li>
					  <li class="breadcrumb-item active"><?php the_title(); ?></li>
					</ol>
				
					<div class="bxslider5">
						<div class="product-details">
							
							
							<div class="flex-container">
								<div class="col-md-8 col-xs-12 pdet" style="background:<?php the_field('slider-left-bg', $ID); ?>;">
									<h1 class="title gold"><?php  the_title(); ?></h1><?php the_field('description', $ID); ?>
								</div>
								<div class="col-md-4 col-xs-12 pserv" style="background:<?php the_field('slider-right-bg', $ID); ?>;">
								<br/>
								<h4 class="black"><b>Serving Suggestions</b></h4>
								<div class="divider"></div>
								<div class="black">
								<?php the_field('serving_suggestions', $ID); ?>
								</div>
								<div class="precipe"><?php the_field('experience_text', $ID); ?><a href="<?php echo get_site_url()?>/recipes/"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/recipe.png" alt=""></a></div>
								</div>
							</div>
							
						</div>
						
						<?php if (get_field('featured_video', $ID)) { ?>
							<div class="product-details">
								<a style=" position: relative;" class="youtube" href="http://www.youtube.com/embed/<?php the_field('featured_video', $ID); ?>?rel=0&amp;wmode=transparent">
								
								<img src="https://img.youtube.com/vi/<?php the_field('featured_video', $ID); ?>/maxresdefault.jpg" />
								
								<div class="overlay">
									<div class="overlay-text"><i class="far fa-play-circle"></i></div>
								  </div>
								  </a>
							</div>
						<?php } ?>
						
						
						
				
						<?php 
						$args = array('post_type'=> 'event-posts');              
						$the_query = new WP_Query( $args );
						
						if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
						if($for_product == $ID)
						{
							$flag = 1;
						}
						else
						{
							$flag = 0;
						}
						endwhile; endif;
						if($flag == 1)
						{
						?>
						<div class="product-details">
							<?php 
								
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
						<?php } ?>
						
						
						<?php $images = get_field('gallery', $ID); ?>

						<?php if( $images ): ?>
							<?php foreach( $images as $image ): ?>
							<div class="product-details">
								<img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"/>
							</div>
							<?php endforeach; ?>
						<?php endif; ?>
						
						
							
					
						
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
<section class="h-cta" style="background:url(<?php echo the_field('cta_background', $post->ID); ?>) no-repeat;" data-aos="zoom-in">
	<div class="subscribe">
		<h2><?php echo the_field('cta_text', $post->ID); ?></h2>
		<a class="btn ad-btn inline" href="#inline_content"> <div class="btnprt1">Sign Up</div><div class="btnprt2"> <i class="fas fa-angle-right"></i> </div></a>
	</div>
</section>

<?php get_footer(); ?>