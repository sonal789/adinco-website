<?php 

/**/
function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}

add_action( 'customize_register', 'm1_customize_register' );




// Custom Slider Type
function create_my_slider() {
	register_post_type( 'my-slider-post',
			array(
			'labels' => array(
					'name' => __( 'Slider' ),
					'singular_name' => __( 'Slider' ),
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array(
					'title',
					'thumbnail'
			)
	));
}

add_action( 'init', 'create_my_slider' );


// My Products
function create_my_products() {
	register_post_type( 'my-product-post',
			array(
			'labels' => array(
					'name' => __( 'Products' ),
					'singular_name' => __( 'Products' ),
			),
			'public' => true,
			'taxonomies'          => array( 'category' ),
			'has_archive' => false,
			'supports' => array(
					'title',
					
			)
	));
}


 
 function get_the_category_custompost( $id = false, $tcat = 'category' ) {
    $categories = get_the_terms( $id, $tcat );
    if ( ! $categories )
        $categories = array();

    $categories = array_values( $categories );

    foreach ( array_keys( $categories ) as $key ) {
        _make_cat_compat( $categories[$key] );
    }

    return apply_filters( 'get_the_categories', $categories );
}
 

add_action( 'init', 'create_my_products' );

// My Events
function create_my_events() {
	register_post_type( 'event-posts',
			array(
			'labels' => array(
					'name' => __( 'Adinco Events' ),
					'singular_name' => __( 'Adinco Events' ),
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array(
					'title',
					
			)
	));
}

add_action( 'init', 'create_my_events' );


// My Events
function create_recipes() {
	register_post_type( 'recipes',
			array(
			'labels' => array(
					'name' => __( 'Recipes' ),
					'singular_name' => __( 'Recipes' ),
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array(
					'title',
					
			)
	));
}

add_action( 'init', 'create_recipes' );

?>