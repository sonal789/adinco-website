<?php
/**
 * Template Name: Event Details Page
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

<section class="eventsection no-padding" style="background:#000;">
		
	
	
	
	<!--<div class="row">
		<div class="col-md-10 offset-md-1 ">
			<div class="row">
				<div class="col-md-6 efeaturedimg">
					<img src="<?php the_field('event_background_image', $ID);?>" alt="<?php the_title(); ?>" />
				</div>
				<div class="col-md-6">
					<h1 class="title"><?php the_title(); ?></h1>
					<div class="title-separator"><img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/title-bg.png" alt=""></div>
					
					<?php $prod = get_field('for_product', $ID); ?>
					<i>Featuring <?php echo get_the_title($prod);?></i>
					<?php 
					$eventdate = get_field('event_date', $ID);
					echo date("d F Y", strtotime($eventdate));
					?>
					<p><?php the_field('event_details', $ID);?></p>
				</div>
				<div class="col-md-12">
				
					


				
					
				</div>
				
			</div>
		</div>
	</div>-->
	<?php 
		$ID = $_GET['eid'];
		$args = array('p' => $ID, 'post_type' => 'event-posts');
		
		$loop = new WP_Query($args);
		?>
		
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php global $post; ?>
	<div class="grid">	
		<div class="grid-item ">
			<div class="sblock-t text-left">
				<div class="gtext">
				<div class="gdate"><?php 
					$eventdate = get_field('event_date', $ID);
					echo date("d F Y", strtotime($eventdate));
					?></div>
				<h1 class="title gold"><?php the_title(); ?></h1>
				<?php global $wp_query;
					$post->ID = get_field('for_product', $ID);
					//echo
					?>
				<div class="gbrand gdate">Featuring Brand- <?php echo get_the_title($post->ID);?></div>
			
				<div class="gdesc"><?php the_field('event_details', $ID);?></div>
				</div>
			</div>
			<div class="sblock-b"><img src="<?php the_field('grid2', $ID); ?>" ></div>
		</div>	
		<div class="grid-item2">
			<div class="bblock"><img src="<?php the_field('event_background_image', $ID); ?>" ></div>
		</div>
		<div class="grid-item">
			<div class="sblock-t"><img src="<?php  the_field('grid4', $ID); ?>" ></div>
			<div class="sblock-b"><img src="<?php the_field('grid5', $ID); ?>" ></div>
		</div>
		<div class="grid-item">
			<div class="sblock-t"><img src="<?php the_field('grid6', $ID); ?>" ></div>
			<div class="sblock-b"><img src="<?php the_field('grid7', $ID); ?>" ></div>
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