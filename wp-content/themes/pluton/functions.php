<?php
/**
 * Pluton functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pluton
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pluton_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Pluton, use a find and replace
		* to change 'pluton' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pluton', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'pluton' ),
			'menu-2' =>esc_html__('link menu','pluton'),
			'menu-3' =>esc_html__('Icons','pluton'),
			'menu-4' =>esc_html__('Footer Icons','pluton'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pluton_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'pluton_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pluton_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pluton_content_width', 640 );
}
add_action( 'after_setup_theme', 'pluton_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pluton_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pluton' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pluton' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar( array(
		'name'          => esc_html__( 'Category', 'pluton' ),
		'id'            => 'category',
		'description'   => esc_html__( 'Add category here', 'pluton' ),
		'before_widget' => '<div id="%1$s" class="footer %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p>',
		'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'pluton_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

	
function pluton_scripts() {
	wp_enqueue_style( 'pluton-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pluton-style', 'rtl', 'replace' );

	wp_enqueue_script( 'pluton-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pluton-customizers', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


wp_enqueue_style( 'pluton-font-url', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' , array(), '', 'all' );
	// <!-- Load css styles -->
wp_enqueue_style( 'pluton-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' , array(), '2.3.2', 'all' );
wp_enqueue_style( 'pluton-bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css' , array(), '2.3.2', 'all' );
wp_enqueue_style( 'pluton-css-style', get_template_directory_uri() . '/css/style.css' , array(), _S_VERSION, 'all' );
wp_enqueue_style( 'pluton-pluton', get_template_directory_uri() . '/css/pluton.css' , array(), _S_VERSION, 'all' );
// [if IE 7]
// wp_enqueue_style( 'pluton', get_template_directory_uri() . '/css/pluton-ie7.css' , array(), '', 'all' );

// [endif]

wp_enqueue_style( 'pluton-jquery.cslider', get_template_directory_uri() . '/css/jquery.cslider.css' , array(), _S_VERSION, 'all' );
wp_enqueue_style( 'pluton-jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css' , array(), '4.0', 'all' );
wp_enqueue_style( 'pluton-animate', get_template_directory_uri() . '/css/animate.css' , array(), _S_VERSION, 'all' );


wp_enqueue_script( 'pluton-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.8.2', true );
wp_enqueue_script( 'pluton-jquery.mixitup', get_template_directory_uri() . '/js/jquery.mixitup.js', array(), '1.5.4', true );
// wp_enqueue_script( 'pluton-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), _S_VERSION, true );
wp_enqueue_script( 'pluton-modernizr.custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '2.5.3', true );
// <!--[if lt IE 9]>
//             <script src="js/respond.min.js"></script>
//         <![endif]-->
wp_enqueue_script( 'pluton-jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), '4.1.1', true );
wp_enqueue_script( 'pluton-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), _S_VERSION, true );
wp_enqueue_script( 'pluton-jquery.cslider', get_template_directory_uri() . '/js/jquery.cslider.js', array(), _S_VERSION, true );
wp_enqueue_script( 'pluton-jquery.placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array(), '2.0.7', true );
wp_enqueue_script( 'pluton-jquery.inview', get_template_directory_uri() . '/js/jquery.inview.js', array(), _S_VERSION, true );
wp_enqueue_script( 'pluton-app', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );

	
}
add_action( 'wp_enqueue_scripts', 'pluton_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//creating custom post type
require get_template_directory() . '/inc/function-posttype.php';

//creating  metabox for custom post type type
require get_template_directory() . '/inc/function-addmetabox.php';

//creating widget skills type
require get_template_directory() . '/inc/function-customize.php';
