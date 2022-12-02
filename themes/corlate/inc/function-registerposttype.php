<?php
/**
 * Register a custom post type called "Slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_corlate_slider_init() {
	$labels = array(
		'name'                  => _x( 'Sliders', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'slider', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New slider', 'corlate' ),
		'new_item'              => __( 'New slider', 'corlate' ),
		'edit_item'             => __( 'Edit slider', 'corlate' ),
		'view_item'             => __( 'View slider', 'corlate' ),
		'all_items'             => __( 'All Sliders', 'corlate' ),
		'search_items'          => __( 'Search Sliders', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Sliders:', 'corlate' ),
		'not_found'             => __( 'No Sliders found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
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

add_action( 'init', 'wpdocs_corlate_slider_init' );


/**
 * Register a custom post type called "Features".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_feature_init() {
	$labels = array(
		'name'                  => _x( 'Features', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'feature', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Features', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'feature', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New feature', 'corlate' ),
		'new_item'              => __( 'New feature', 'corlate' ),
		'edit_item'             => __( 'Edit feature', 'corlate' ),
		'view_item'             => __( 'View feature', 'corlate' ),
		'all_items'             => __( 'All Features', 'corlate' ),
		'search_items'          => __( 'Search Features', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Features:', 'corlate' ),
		'not_found'             => __( 'No Features found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Features found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'feature Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'feature archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into feature', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this feature', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Features list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Features list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Features list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
        'menu_icon'           => 'dashicons-screenoptions',
		'rewrite'            => array( 'slug' => 'feature' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'feature', $args );
}

add_action( 'init', 'wpdocs_codex_feature_init' );

/**
 * Register a custom post type called "Work".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_recent_work_init() {
	$labels = array(
		'name'                  => _x( 'Recent Works', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Work', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Recent Works', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Work', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Work', 'corlate' ),
		'new_item'              => __( 'New Work', 'corlate' ),
		'edit_item'             => __( 'Edit Work', 'corlate' ),
		'view_item'             => __( 'View Work', 'corlate' ),
		'all_items'             => __( 'All Recent Works', 'corlate' ),
		'search_items'          => __( 'Search Recent Works', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Recent Works:', 'corlate' ),
		'not_found'             => __( 'No Recent Works found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Recent Works found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Work Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Work archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Work', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Work', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Recent Works list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Recent Works list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Recent Works list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
        'menu_icon'           => 'dashicons-format-gallery',
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'work', $args );
}

add_action( 'init', 'wpdocs_codex_recent_work_init' );

//adding category for the recent work
function corlate_register_custom_taxonomy() {

	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'corlate' ),
		'singular_name'     => _x( 'Categories', 'taxonomy singular name', 'corlate' ),
		'search_items'      => __( 'Search Category', 'corlate' ),
		'all_items'         => __( 'All Category', 'corlate' ),
		'view_item'         => __( 'View Categories', 'corlate' ),
		'parent_item'       => __( 'Parent Categories', 'corlate' ),
		'parent_item_colon' => __( 'Parent Categories:', 'corlate' ),
		'edit_item'         => __( 'Edit Categories', 'corlate' ),
		'update_item'       => __( 'Update Categories', 'corlate' ),
		'add_new_item'      => __( 'Add New Categories', 'corlate' ),
		'new_item_name'     => __( 'New Categories Name', 'corlate' ),
		'not_found'         => __( 'No Category Found', 'corlate' ),
		'back_to_items'     => __( 'Back to Category', 'corlate' ),
		'menu_name'         => __( 'Categories', 'corlate' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfoliocat' ),
		'show_in_rest'      => true,
	);
	


	register_taxonomy( 'portfoliocat', 'work', $args );
}
add_action( 'init', 'corlate_register_custom_taxonomy');

/**
 * Register a custom post type called "Services".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_services_init() {
	$labels = array(
		'name'                  => _x( 'Our Service', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'service', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Our Service', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'service', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New service', 'corlate' ),
		'new_item'              => __( 'New service', 'corlate' ),
		'edit_item'             => __( 'Edit service', 'corlate' ),
		'view_item'             => __( 'View service', 'corlate' ),
		'all_items'             => __( 'All Our Service', 'corlate' ),
		'search_items'          => __( 'Search Our Service', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Our Service:', 'corlate' ),
		'not_found'             => __( 'No Our Service found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Our Service found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Our Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Our Service list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Our Service list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
        'menu_icon'           => 'dashicons-admin-site',
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'wpdocs_codex_services_init' );

/**
 * Register a custom post type called "Why us".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_why_us_init() {
	$labels = array(
		'name'                  => _x( 'Why us', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Why people', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Why us', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Why people', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Why people', 'corlate' ),
		'new_item'              => __( 'New Why people', 'corlate' ),
		'edit_item'             => __( 'Edit Why people', 'corlate' ),
		'view_item'             => __( 'View Why people', 'corlate' ),
		'all_items'             => __( 'All Why us', 'corlate' ),
		'search_items'          => __( 'Search Why us', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Why us:', 'corlate' ),
		'not_found'             => __( 'No Why us found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Why us found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Why people Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Why people archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Why people', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Why people', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Why us list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Why us list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Why us list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'whyus' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'whyus', $args );
}

add_action( 'init', 'wpdocs_codex_why_us_init' );

/**
 * Register a custom post type called "Our Client".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_our_client_init() {
	$labels = array(
		'name'                  => _x( 'Our Clients', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Our Client', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Our Clients', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Our Client', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Our Client', 'corlate' ),
		'new_item'              => __( 'New Our Client', 'corlate' ),
		'edit_item'             => __( 'Edit Our Client', 'corlate' ),
		'view_item'             => __( 'View Our Client', 'corlate' ),
		'all_items'             => __( 'All Our Clients', 'corlate' ),
		'search_items'          => __( 'Search Our Clients', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Our Clients:', 'corlate' ),
		'not_found'             => __( 'No Our Clients found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Our Clients found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Our Client Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Our Client archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Our Client', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Our Client', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Our Clients list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Our Clients list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Our Clients list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'           => 'dashicons-admin-users',
		'rewrite'            => array( 'slug' => 'our_client' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'our_client', $args );
}

add_action( 'init', 'wpdocs_codex_our_client_init' );

/**
 * Register a custom post type called "Pricing Table".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_pricing_table_init() {
	$labels = array(
		'name'                  => _x( 'Pricing Tables', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Pricing Table', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Pricing Tables', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Pricing Table', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Pricing Table', 'corlate' ),
		'new_item'              => __( 'New Pricing Table', 'corlate' ),
		'edit_item'             => __( 'Edit Pricing Table', 'corlate' ),
		'view_item'             => __( 'View Pricing Table', 'corlate' ),
		'all_items'             => __( 'All Pricing Tables', 'corlate' ),
		'search_items'          => __( 'Search Pricing Tables', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Pricing Tables:', 'corlate' ),
		'not_found'             => __( 'No Pricing Tables found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Pricing Tables found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Pricing Table Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Pricing Table archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Pricing Table', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Pricing Table', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Pricing Tables list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Pricing Tables list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Pricing Tables list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'           => 'dashicons-menu-alt3',
		'rewrite'            => array( 'slug' => 'pricing_table' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'pricing_table', $args );
}

add_action( 'init', 'wpdocs_codex_pricing_table_init' );

/**
 * Register a custom post type called "Tabs".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_tabs_init() {
	$labels = array(
		'name'                  => _x( 'Tabs', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'tab', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Tabs', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'tab', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New tab', 'corlate' ),
		'new_item'              => __( 'New tab', 'corlate' ),
		'edit_item'             => __( 'Edit tab', 'corlate' ),
		'view_item'             => __( 'View tab', 'corlate' ),
		'all_items'             => __( 'All Tabs', 'corlate' ),
		'search_items'          => __( 'Search Tabs', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Tabs:', 'corlate' ),
		'not_found'             => __( 'No Tabs found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Tabs found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'tab Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'tab archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into tab', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this tab', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Tabs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Tabs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Tabs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'           => 'dashicons-menu-alt3',
		'rewrite'            => array( 'slug' => 'tabs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'tabs', $args );
}

add_action( 'init', 'wpdocs_codex_tabs_init' );

/**
 * Register a custom post type called "Testimonial".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_testimonials_init() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Testimonial', 'corlate' ),
		'new_item'              => __( 'New Testimonial', 'corlate' ),
		'edit_item'             => __( 'Edit Testimonial', 'corlate' ),
		'view_item'             => __( 'View Testimonial', 'corlate' ),
		'all_items'             => __( 'All Testimonials', 'corlate' ),
		'search_items'          => __( 'Search Testimonials', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Testimonials:', 'corlate' ),
		'not_found'             => __( 'No Testimonials found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'           => 'dashicons-menu-alt3',
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'testimonials', $args );
}

add_action( 'init', 'wpdocs_codex_testimonials_init' );

/**
 * Register a custom post type called "Our Team".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_our_team_init() {
	$labels = array(
		'name'                  => _x( 'Our Teams', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Our Team', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Our Teams', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Our Team', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Our Team', 'corlate' ),
		'new_item'              => __( 'New Our Team', 'corlate' ),
		'edit_item'             => __( 'Edit Our Team', 'corlate' ),
		'view_item'             => __( 'View Our Team', 'corlate' ),
		'all_items'             => __( 'All Our Teams', 'corlate' ),
		'search_items'          => __( 'Search Our Teams', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Our Teams:', 'corlate' ),
		'not_found'             => __( 'No Our Teams found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Our Teams found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Our Team Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Our Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Our Team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Our Team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Our Teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Our Teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Our Teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'           => 'dashicons-groups',
		'rewrite'            => array( 'slug' => 'our_team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'our_team', $args );
}

add_action( 'init', 'wpdocs_codex_our_team_init' );