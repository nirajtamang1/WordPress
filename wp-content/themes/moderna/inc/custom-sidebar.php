<?php
function moderna_custom_post_sidebar() {
    $labels = array(
        'name'                  => _x( 'sidebar', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'slider', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'sidebar', 'Admin Menu text', 'moderna' ),
        'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add Newslider', 'moderna' ),
        'new_item'              => __( 'New slider', 'moderna' ),
        'edit_item'             => __( 'Edit slider', 'moderna' ),
        'view_item'             => __( 'View slider', 'moderna' ),
        'all_items'             => __( 'All sidebar', 'moderna' ),
        'search_items'          => __( 'Search sidebar', 'moderna' ),
        'parent_item_colon'     => __( 'Parent sidebar:', 'moderna' ),
        'not_found'             => __( 'No sidebar found.', 'moderna' ),
        'not_found_in_trash'    => __( 'No sidebar found in Trash.', 'moderna' ),
        'featured_image'        => _x( 'Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'moderna' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'archives'              => _x( 'moderna archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'moderna' ),
        'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'moderna' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'moderna' ),
        'filter_items_list'     => _x( 'Filter sidebar list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'moderna' ),
        'items_list_navigation' => _x( 'sidebar list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'moderna' ),
        'items_list'            => _x( 'sidebar list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'moderna' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'slider custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'excerpt','thumbnail' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'slider', $args );
}
add_action( 'init', 'moderna_custom_post_sidebar' );

function moderna_custom_post_cardpart() {
    $labels = array(
        'name'                  => _x( 'card', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'card part', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'cardpart', 'Admin card text', 'moderna' ),
        'name_admin_bar'        => _x( 'cardpart', 'Add New on Toolbar', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add Newcardpart', 'moderna' ),
        'new_item'              => __( 'New cardpart', 'moderna' ),
        'edit_item'             => __( 'Edit cardpart', 'moderna' ),
        'view_item'             => __( 'View cardpart', 'moderna' ),
        'all_items'             => __( 'All cardpart', 'moderna' ),
        'search_items'          => __( 'Search cardpart', 'moderna' ),
        'parent_item_colon'     => __( 'Parent cardpart:', 'moderna' ),
        'not_found'             => __( 'No cardpart found.', 'moderna' ),
        'not_found_in_trash'    => __( 'No cardpart found in Trash.', 'moderna' ),
        'featured_image'        => _x( 'Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'moderna' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'archives'              => _x( 'moderna archives', 'The post type archive label used in nav cards. Default “Post Archives”. Added in 4.4', 'moderna' ),
        'insert_into_item'      => _x( 'Insert into cardpart', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'moderna' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this cardpart', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'moderna' ),
        'filter_items_list'     => _x( 'Filter cardpart list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'moderna' ),
        'items_list_navigation' => _x( 'cardpart list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'moderna' ),
        'items_list'            => _x( 'cardpart list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'moderna' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'cardpart custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'menupart' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'excerpt','thumbnail','author' ),
     
        'show_in_rest'       => true
    );
      
    register_post_type( 'card part', $args );
}
add_action( 'init', 'moderna_custom_post_cardpart' );

function wpdocs_create_category_cardpart() {
    register_taxonomy( 'Cardcategory', 'cardpart', array(
        'label'        => __( 'Cardcategory', 'moderna' ),
        
        'hierarchical' => false,
    ) );
}
add_action( 'init', 'wpdocs_create_category_cardpart', 0 );


function moderna_custom_post_gallerycard() {
    $labels = array(
        'name'                  => _x( 'gallery card', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'gallerycard', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'gallery', 'Admin gallery text', 'moderna' ),
        'name_admin_bar'        => _x( 'gallery', 'Add New on Toolbar', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add Newgallery', 'moderna' ),
        'new_item'              => __( 'New gallery', 'moderna' ),
        'edit_item'             => __( 'Edit gallery', 'moderna' ),
        'view_item'             => __( 'View gallery', 'moderna' ),
        'all_items'             => __( 'All gallery', 'moderna' ),
        'search_items'          => __( 'Search gallery', 'moderna' ),
        'parent_item_colon'     => __( 'Parent gallery:', 'moderna' ),
        'not_found'             => __( 'No gallery found.', 'moderna' ),
        'not_found_in_trash'    => __( 'No gallery found in Trash.', 'moderna' ),
        'featured_image'        => _x( 'Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'moderna' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'moderna' ),
        'archives'              => _x( 'moderna archives', 'The post type archive label used in nav gallerys. Default “Post Archives”. Added in 4.4', 'moderna' ),
        'insert_into_item'      => _x( 'Insert into gallery', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'moderna' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this gallery', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'moderna' ),
        'filter_items_list'     => _x( 'Filter gallery list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'moderna' ),
        'items_list_navigation' => _x( 'gallery list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'moderna' ),
        'items_list'            => _x( 'gallery list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'moderna' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'gallery custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallerycard' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title','editor', 'excerpt','thumbnail','author' ),
       
        'show_in_rest'       => true
    );
      
    register_post_type( 'gallerycard', $args );
}
add_action( 'init', 'moderna_custom_post_gallerycard' );

function wpdocs_create_gallery_portfolio() {
    $labels = array(
    'name'              => _x( 'portfoliocat', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'portfoliocat', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search portfoliocat', 'textdomain' ),
        'all_items'         => __( 'All portfoliocat', 'textdomain' ),
        'view_item'         => __( 'View portfoliocat', 'textdomain' ),
        'parent_item'       => __( 'Parent portfoliocat', 'textdomain' ),
        'parent_item_colon' => __( 'Parent portfoliocat:', 'textdomain' ),
        'edit_item'         => __( 'Edit portfoliocat', 'textdomain' ),
        'update_item'       => __( 'Update portfoliocat', 'textdomain' ),
        'add_new_item'      => __( 'Add New portfoliocat', 'textdomain' ),
        'new_item_name'     => __( 'New portfoliocat Name', 'textdomain' ),
        'not_found'         => __( 'No portfoliocat Found', 'textdomain' ),
        'back_to_items'     => __( 'Back to portfoliocat', 'textdomain' ),
        'menu_name'         => __( 'portfoliocat', 'textdomain' ),
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
    register_taxonomy( 'profoliocat', 'gallerycard', $args );
 
}
add_action( 'init', 'wpdocs_create_gallery_portfolio');
?>