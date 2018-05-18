<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage adinco
 * @since 
 */
 
get_header(); ?>

 
 <section class="h-slider no-padding">
	
			
				
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	
		<?php
			$args = array(
				'post_type' => 'my-slider-post',
				'orderby' => 'menu_order',
				'order' => 'DESC'
			);
			$the_query = new WP_Query ( $args );
		?>
		
		
		<!-- Indicators -->
				<ol class="carousel-indicators">

					<!-- the Loop -->
					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li data-target="#myCarousel"
						    data-slide-to="<?php echo $the_query->current_post; ?>"
						    class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
					<?php endwhile; endif; ?>

				</ol>

				<!-- rewind loop back to zero without losing data-->
				<?php rewind_posts(); ?>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
						$the_query->the_post(); ?>

						<?php
						$thumbnail_id   = get_post_thumbnail_id();
						$thumbnail_url  = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
						$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attatchment_image_alt', true );
						?>
						
						<div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>" style="background: url(<?php echo $thumbnail_url[0]; ?>) no-repeat; background-size:cover;background-attachment:fixed;">
          
							<div class="container">
							  <div class="carousel-caption text-right">
								<h1><?php the_title(); ?></h1>
							  </div>
							</div>
						</div>

						
					<?php endwhile;
					endif; ?>

				</div>
				
				<!-- Controls -->
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

				
      </div>
	  
</section>

<section class="h-about">
	
		<div class="row">
			<div class="col-md-5 offset-md-1 text-right">
				<?php global $wp_query;
					$post->ID = 7;
					?>
				<img class="distillery-img" src="<?php echo the_field('about_image', $post->ID); ?>" alt="About Adinco Distillaries" />
				
			</div>
			<div class="col-md-5">
				<h1 class="title">Our Uniqueness</h1>
				<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
				<?php the_field('about_text' , $post->ID ); ?> 
				<a class="btn ad-btn" href="#"> <div class="btnprt1">Know More</div><div class="btnprt2"> <i class="fas fa-angle-right"></i> </div></a>
			</div>
		</div>
		
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/barley-leaf.png"  class="barley"/>
		
	
</section>



<section class="h-events no-padding">
	
	<div class="grid1">	
		<?php
			$args = array(
				'post_type' => 'event-posts',
				'orderby' => 'menu_order',
				'order' => 'DESC'
			);
			$i = 0;
			$the_query = new WP_Query ( $args );
			
			if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			if($i==1){ break; }
			if(get_field('show_on_home_page',$post->ID)!=''){ 
		?>
		<div class="grid1-item2">
			<div class="bblock1">
				<img src="<?php the_field('event_background_image',$post->ID); ?>" />
				<div class="overlay">
					<div class="overlay-text">
						<h2>DON'T MISS OUR UPCOMING EVENT</h2>
						<h1 class="title gold"><?php the_title(); ?></h1>
						<?php global $wp_query;
						$prod = get_field('for_product', $ID);
						//echo
						?>
						<div class="gbrand gdate">Featuring Brand- <?php echo get_the_title($prod);?></div>
						<div class='countdown' data-date="<?php the_field('event_date',$post->ID); ?>"></div>
						<div class="e-date gdate">	
							<?php 
								$eventdate = get_field('event_date',$post->ID);
								echo date("d F Y", strtotime($eventdate));
								
							?>
						</div>
						<div><?php the_field('event_details',$post->ID); ?></div>
					</div>
			  </div>
			</div>
		</div>
		<?php $i++ ;}  endwhile;
			endif;  ?>
		<div class="grid1-item">
			<div class="sblock1-t gold-block">
				<div class="bxslider1 eventslider" style="position:relative;">
					<div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wine-glass.png" title="Funky roots"></div>
					<div style="width:100%;" class="slide-text">
					
						<div class="rottext">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ante metus, lacinia sed orci id, venenatis commodo sapien. 
						</div>
					
					</div>
				</div>
				
			</div>
			<div class="sblock1-b red-block">
				<div class="bxslider2 eventslider">
					<div style="width:100%;" class="slide-text">
					
						<div class="rottext">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ante metus, lacinia sed orci id, venenatis commodo sapien. 
						</div>
					
					</div>
					<div class="red-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wine-glass.png" title="Funky roots"></div>
				</div>
			</div>
		</div>
		<div class="grid1-item">
			<div class="sblock1-t red-block">
				<div class="bxslider3 eventslider">
					<div style="width:100%;" class="slide-text">
					
						<div class="rottext">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ante metus, lacinia sed orci id, venenatis commodo sapien. 
						</div>
					
					</div>
					<div ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/whiskey-glass.png" title="Funky roots"></div>
				</div>
			</div>
			<div class="sblock1-b gold-block">
				<div class="bxslider4 eventslider">
					<div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/whiskey-glass.png" title="Funky roots"></div>
					<div style="width:100%;" class="slide-text">
					
						<div class="rottext">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ante metus, lacinia sed orci id, venenatis commodo sapien. 
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	



<section class="h-brands text-center">

		<div class="container1">
	
		<h1 class="title">Our Brands</h1>
		<div class="automargin title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
		
		<ul class="bxslider brandsslider">
			
			<?php 

			$args = array(
				'post_type'=> 'my-product-post',
				'order'    => 'DESC'
				);              

			$the_query = new WP_Query( $args );
			
			if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			
				
				if(get_field('featured',$post->ID)!=''){ 
			?>
			
			<li>
				<a href="#">
				<img src="<?php echo the_field('product_image'); ?>" />
				<p><?php the_title(); ?></p>
				</a>
			</li>
			
				<?php } endwhile;
			endif;  ?>
		</ul>
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

<section class="h-locate no-padding">

	<div class="row no-gutters">
		<div class="col-md-8 no-padding">
			<section id="cd-google-map" class="no-padding">
				<div id="google-container"></div>
				<div id="cd-zoom-in"></div>
				<div id="cd-zoom-out"></div>
				<address>86-90 Paul Street, London, EC2A 4NE</address> 
			</section>
		</div>
		<div class="col-md-4  h-contact no-padding">
			<div class="contactinfo">
				<h3>Visit Us</h3>
				<p>
					<?php echo the_field('address', $post->ID); ?>
				</p>
				
				<h3>Contact Us</h3>
				<p>
					<?php echo the_field('contact_numbers', $post->ID); ?><br/>

					<?php echo the_field('email_id', $post->ID); ?>
				</p>
				
				<h3>Follow Us</h3>
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
	
</section>
 
<?php get_footer(); ?>