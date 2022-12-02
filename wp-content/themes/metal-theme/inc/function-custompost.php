<?php
/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function metal_theme_slider_init() {
	$labels = array(
		'name'                  => _x( 'Sliders', 'Post type general name', 'metal-theme' ),
		'singular_name'         => _x( 'slider', 'Post type singular name', 'metal-theme' ),
		'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'metal-theme' ),
		'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'metal-theme' ),
		'add_new'               => __( 'Add New', 'metal-theme' ),
		'add_new_item'          => __( 'Add New slider', 'metal-theme' ),
		'new_item'              => __( 'New slider', 'metal-theme' ),
		'edit_item'             => __( 'Edit slider', 'metal-theme' ),
		'view_item'             => __( 'View slider', 'metal-theme' ),
		'all_items'             => __( 'All Sliders', 'metal-theme' ),
		'search_items'          => __( 'Search Sliders', 'metal-theme' ),
		'parent_item_colon'     => __( 'Parent Sliders:', 'metal-theme' ),
		'not_found'             => __( 'No Sliders found.', 'metal-theme' ),
		'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'metal-theme' ),
		'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'metal-theme' ),
		'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'metal-theme' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'metal-theme' ),
		'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'metal-theme' ),
		'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'metal-theme' ),
		'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'metal-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
        'menu_icon'           => 'dashicons-align-wide',
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'metal_theme_slider_init' );

/**
 * Register a custom post type called "Product Slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function metal_theme_product_slider() {
	$labels = array(
		'name'                  => _x( 'Product Sliders', 'Post type general name', 'metal-theme' ),
		'singular_name'         => _x( 'Product Slider', 'Post type singular name', 'metal-theme' ),
		'menu_name'             => _x( 'Product Sliders', 'Admin Menu text', 'metal-theme' ),
		'name_admin_bar'        => _x( 'Product Slider', 'Add New on Toolbar', 'metal-theme' ),
		'add_new'               => __( 'Add New', 'metal-theme' ),
		'add_new_item'          => __( 'Add New Product Slider', 'metal-theme' ),
		'new_item'              => __( 'New Product Slider', 'metal-theme' ),
		'edit_item'             => __( 'Edit Product Slider', 'metal-theme' ),
		'view_item'             => __( 'View Product Slider', 'metal-theme' ),
		'all_items'             => __( 'All Product Sliders', 'metal-theme' ),
		'search_items'          => __( 'Search Product Sliders', 'metal-theme' ),
		'parent_item_colon'     => __( 'Parent Product Sliders:', 'metal-theme' ),
		'not_found'             => __( 'No Product Sliders found.', 'metal-theme' ),
		'not_found_in_trash'    => __( 'No Product Sliders found in Trash.', 'metal-theme' ),
		'featured_image'        => _x( 'Product Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'metal-theme' ),
		'archives'              => _x( 'Product Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'metal-theme' ),
		'insert_into_item'      => _x( 'Insert into Product Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'metal-theme' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Product Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'metal-theme' ),
		'filter_items_list'     => _x( 'Filter Product Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'metal-theme' ),
		'items_list_navigation' => _x( 'Product Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'metal-theme' ),
		'items_list'            => _x( 'Product Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'metal-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'           => 'dashicons-align-wide',
		'rewrite'            => array( 'slug' => 'product_slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'product_slider', $args );
}

add_action( 'init', 'metal_theme_product_slider' );
function create_metal_theme_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Category Products', 'taxonomy general name', 'metal-theme' ),
		'singular_name'     => _x( 'Category Product', 'taxonomy singular name', 'metal-theme' ),
		'search_items'      => __( 'Search Category Products', 'metal-theme' ),
		'all_items'         => __( 'All Category Products', 'metal-theme' ),
		'parent_item'       => __( 'Parent Category Product', 'metal-theme' ),
		'parent_item_colon' => __( 'Parent Category Product:', 'metal-theme' ),
		'edit_item'         => __( 'Edit Category Product', 'metal-theme' ),
		'update_item'       => __( 'Update Category Product', 'metal-theme' ),
		'add_new_item'      => __( 'Add New Category Product', 'metal-theme' ),
		'new_item_name'     => __( 'New Category Product Name', 'metal-theme' ),
		'menu_name'         => __( 'Category Product', 'metal-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'category_product' ),
	);

	register_taxonomy( 'category_product','product_slider',$args);
}
add_action( 'init', 'create_metal_theme_taxonomies');