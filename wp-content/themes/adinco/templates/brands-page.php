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
	
			
	<div class="inner-banner">
		
	</div>
	
	<div class="product-menu">
			<div class="toolbar mb2 mt2">
				<a class="fil-cat" href="" data-rel="all">All</a>
			<?php 

				$categories = get_categories();
				foreach($categories as $category) 
				{
					if($category->name !='Uncategorized')
					{
						//echo '<li><a style="display:block;text-align:center;" href="' . get_site_url(). '/products/?pid='.$category->term_id.'&product='.$category->name.'">' . $category->name. '</a></li>';
						echo '<a class=" fil-cat" data-rel="'.$category->name.'">'.$category->name.'</a>';
					}
				}
			?>
				
				  
				</div> 
		
	</div>
	  
</section>

<section class="product-portfolio">

	<div class="container">

	<?php 
		 // The Arguments
        $args = array(
            'post_type' => 'my-product-post', 
        );  

        // The Query
        $the_query = new WP_Query( $args ); 
		
		$i=0;
	?>
	
	<div class="row" id="portfolio">
	
		
		<?php 
			query_posts( array( 'post_type' => 'my-product-post', 'taxonomy' => 'category') );
			
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			
			<?php  $category = get_the_category( $post->ID ); ?>
				

				
						
						<div class=" col-md-3 tileme tile brnbtl scale-anm text-center <?php  echo $category[0]->cat_name; ?> all text-center">
							
							<div class="overlay-text1">
							<a href="<?php echo get_site_url()?>/products/?pid=<?php echo $post->ID; ?>&product=<?php the_title();?>">
								<img  class="" src="<?php the_field('product_image'); ?>" alt="<?php the_title(); ?>"/>
							</a>
							<a class="ttitle" href="<?php echo get_site_url()?>/products/?pid=<?php echo $post->ID; ?>&product=<?php the_title();?>"><?php the_title();?></a>
							
							</div>
							
							
						</div>
						
						
					
					
				
				
			<?php endwhile; endif;  ?>
			
			
 
 
	</div>
	
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