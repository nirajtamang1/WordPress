<?php

/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
// custom post type for slider
function wpdocs_pluton_slider_init()
{
	$labels = array(
		'name'                  => _x('Sliders', 'Post type general name', 'pluton'),
		'singular_name'         => _x('slider', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Sliders', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('slider', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New slider', 'pluton'),
		'new_item'              => __('New slider', 'pluton'),
		'edit_item'             => __('Edit slider', 'pluton'),
		'view_item'             => __('View slider', 'pluton'),
		'all_items'             => __('All Sliders', 'pluton'),
		'search_items'          => __('Search Sliders', 'pluton'),
		'parent_item_colon'     => __('Parent Sliders:', 'pluton'),
		'not_found'             => __('No Sliders found.', 'pluton'),
		'not_found_in_trash'    => __('No Sliders found in Trash.', 'pluton'),
		'featured_image'        => _x('slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'slider'),
		'menu_icon'   => 'dashicons-align-wide',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('slider', $args);
}

add_action('init', 'wpdocs_pluton_slider_init');

// custom post type for services
function wpdocs_pluton_service_init()
{
	$labels = array(
		'name'                  => _x('Services', 'Post type general name', 'pluton'),
		'singular_name'         => _x('service', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Services', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('service', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New service', 'pluton'),
		'new_item'              => __('New service', 'pluton'),
		'edit_item'             => __('Edit service', 'pluton'),
		'view_item'             => __('View service', 'pluton'),
		'all_items'             => __('All Services', 'pluton'),
		'search_items'          => __('Search Services', 'pluton'),
		'parent_item_colon'     => __('Parent Services:', 'pluton'),
		'not_found'             => __('No Services found.', 'pluton'),
		'not_found_in_trash'    => __('No Services found in Trash.', 'pluton'),
		'featured_image'        => _x('service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'service'),
		'menu_icon'   => 'dashicons-admin-site-alt',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('service', $args);
}

add_action('init', 'wpdocs_pluton_service_init');


// custom post type for services
function wpdocs_pluton_portfolio_init()
{
	$labels = array(
		'name'                  => _x('Portfolios', 'Post type general name', 'pluton'),
		'singular_name'         => _x('portfolio', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Portfolios', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('portfolio', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New portfolio', 'pluton'),
		'new_item'              => __('New portfolio', 'pluton'),
		'edit_item'             => __('Edit portfolio', 'pluton'),
		'view_item'             => __('View portfolio', 'pluton'),
		'all_items'             => __('All Portfolios', 'pluton'),
		'search_items'          => __('Search Portfolios', 'pluton'),
		'parent_item_colon'     => __('Parent Portfolios:', 'pluton'),
		'not_found'             => __('No Portfolios found.', 'pluton'),
		'not_found_in_trash'    => __('No Portfolios found in Trash.', 'pluton'),
		'featured_image'        => _x('portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'portfolio'),
		'menu_icon'   => 'dashicons-columns',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('portfolio', $args);
}

add_action('init', 'wpdocs_pluton_portfolio_init');

function register_custom_taxonomy_portfolio()
{

	$labels = array(
		'name'              => _x('categories', 'taxonomy general name', 'pluton'),
		'singular_name'     => _x('category', 'taxonomy singular name', 'pluton'),
		'search_items'      => __('Search categories', 'pluton'),
		'all_items'         => __('All categories', 'pluton'),
		'view_item'         => __('View category', 'pluton'),
		'parent_item'       => __('Parent category', 'pluton'),
		'parent_item_colon' => __('Parent category:', 'pluton'),
		'edit_item'         => __('Edit category', 'pluton'),
		'update_item'       => __('Update category', 'pluton'),
		'add_new_item'      => __('Add New category', 'pluton'),
		'new_item_name'     => __('New category Name', 'pluton'),
		'not_found'         => __('No categories Found', 'pluton'),
		'back_to_items'     => __('Back to categories', 'pluton'),
		'menu_name'         => __('category', 'pluton'),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'category'),
		'show_in_rest'      => true,
	);


	register_taxonomy('category', 'portfolio', $args);
}
add_action('init', 'register_custom_taxonomy_portfolio');

// custom post type for services
function wpdocs_pluton_about_init()
{
	$labels = array(
		'name'                  => _x('Abouts', 'Post type general name', 'pluton'),
		'singular_name'         => _x('About', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Abouts', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('About', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New About', 'pluton'),
		'new_item'              => __('New About', 'pluton'),
		'edit_item'             => __('Edit About', 'pluton'),
		'view_item'             => __('View About', 'pluton'),
		'all_items'             => __('All Abouts', 'pluton'),
		'search_items'          => __('Search Abouts', 'pluton'),
		'parent_item_colon'     => __('Parent Abouts:', 'pluton'),
		'not_found'             => __('No Abouts found.', 'pluton'),
		'not_found_in_trash'    => __('No Abouts found in Trash.', 'pluton'),
		'featured_image'        => _x('About Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('About archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into About', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this About', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Abouts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Abouts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Abouts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'About'),
		'menu_icon'   => 'dashicons-columns',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('About', $args);
}

add_action('init', 'wpdocs_pluton_about_init');

// custom post type for client
function wpdocs_pluton_client_init()
{
	$labels = array(
		'name'                  => _x('Clients', 'Post type general name', 'pluton'),
		'singular_name'         => _x('client', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Clients', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('client', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New client', 'pluton'),
		'new_item'              => __('New client', 'pluton'),
		'edit_item'             => __('Edit client', 'pluton'),
		'view_item'             => __('View client', 'pluton'),
		'all_items'             => __('All Clients', 'pluton'),
		'search_items'          => __('Search Clients', 'pluton'),
		'parent_item_colon'     => __('Parent Clients:', 'pluton'),
		'not_found'             => __('No Clients found.', 'pluton'),
		'not_found_in_trash'    => __('No Clients found in Trash.', 'pluton'),
		'featured_image'        => _x('client Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('client archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into client', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this client', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Clients list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Clients list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Clients list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'client'),
		'menu_icon'   => 'dashicons-columns',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('client', $args);
}

add_action('init', 'wpdocs_pluton_client_init');

// custom post type for client
function wpdocs_pluton_client_logo_init()
{
	$labels = array(
		'name'                  => _x('Client_logos', 'Post type general name', 'pluton'),
		'singular_name'         => _x('client_logo', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Client_logos', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('client_logo', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New client_logo', 'pluton'),
		'new_item'              => __('New client_logo', 'pluton'),
		'edit_item'             => __('Edit client_logo', 'pluton'),
		'view_item'             => __('View client_logo', 'pluton'),
		'all_items'             => __('All Client_logos', 'pluton'),
		'search_items'          => __('Search Client_logos', 'pluton'),
		'parent_item_colon'     => __('Parent Client_logos:', 'pluton'),
		'not_found'             => __('No Client_logos found.', 'pluton'),
		'not_found_in_trash'    => __('No Client_logos found in Trash.', 'pluton'),
		'featured_image'        => _x('client_logo Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('client_logo archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into client_logo', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this client_logo', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Client_logos list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Client_logos list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Client_logos list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'client_logo'),
		'menu_icon'   => 'dashicons-columns',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('client_logo', $args);
}

add_action('init', 'wpdocs_pluton_client_logo_init');


// custom post type for client
function wpdocs_pluton_price_init()
{
	$labels = array(
		'name'                  => _x('Prices', 'Post type general name', 'pluton'),
		'singular_name'         => _x('price', 'Post type singular name', 'pluton'),
		'menu_name'             => _x('Prices', 'Admin Menu text', 'pluton'),
		'name_admin_bar'        => _x('price', 'Add New on Toolbar', 'pluton'),
		'add_new'               => __('Add New', 'pluton'),
		'add_new_item'          => __('Add New price', 'pluton'),
		'new_item'              => __('New price', 'pluton'),
		'edit_item'             => __('Edit price', 'pluton'),
		'view_item'             => __('View price', 'pluton'),
		'all_items'             => __('All Prices', 'pluton'),
		'search_items'          => __('Search Prices', 'pluton'),
		'parent_item_colon'     => __('Parent Prices:', 'pluton'),
		'not_found'             => __('No Prices found.', 'pluton'),
		'not_found_in_trash'    => __('No Prices found in Trash.', 'pluton'),
		'featured_image'        => _x('price Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton'),
		'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton'),
		'archives'              => _x('price archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton'),
		'insert_into_item'      => _x('Insert into price', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton'),
		'uploaded_to_this_item' => _x('Uploaded to this price', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton'),
		'filter_items_list'     => _x('Filter Prices list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton'),
		'items_list_navigation' => _x('Prices list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton'),
		'items_list'            => _x('Prices list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'price'),
		'menu_icon'   => 'dashicons-columns',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
	);

	register_post_type('price', $args);
}

add_action('init', 'wpdocs_pluton_price_init');