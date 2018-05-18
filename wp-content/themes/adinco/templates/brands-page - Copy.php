<?php
/**
 * Template Name: Brands Page
 *
 * @package WordPress
 * @subpackage adinco
 * @since 
 */
 
get_header(); 
?>


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

<div class="row">
 <?php 
	$categories = get_categories();
	foreach($categories as $category) 
	{

		if($category->name !='Uncategorized')
		{
		?> 
		<div class="col-md-4 text-center">
		<?php	
			$category = get_category($category->term_id);
			$cat_id = $category->cat_ID;
			
			// Get the image ID for the category
			$image_id = get_term_meta ( $cat_id, 'category-image-id', true );
			echo wp_get_attachment_image ( $image_id, 'large' );
		
			echo '<a style="display:block;text-align:center;" href="' . get_site_url(). '/products/?pid='.$category->term_id.'&product='.$category->name.'">' . $category->name. '</a>';
		?>
		</div>
		<?php
		}
		
	}
	
	
 ?>
 </div>
 
<?php get_footer(); ?>