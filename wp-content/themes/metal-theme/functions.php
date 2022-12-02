<?php
/**
 * metal-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package metal-theme
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
function metal_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on metal-theme, use a find and replace
		* to change 'metal-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'metal-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'metal-theme' ),
			'social_icon' => esc_html__( 'Social Icon Menu', 'metal-theme' ),
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
			'metal_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'metal_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function metal_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'metal_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'metal_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function metal_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'metal-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'metal-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Newsletter', 'metal-theme' ),
			'id'            => 'newsletter',
			'description'   => esc_html__( 'Add Newsletter shortcode here.', 'metal-theme' ),
			'before_widget' => '<div id="%1$s" class="news %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Social Icon', 'metal-theme' ),
			'id'            => 'socialicon',
			'description'   => esc_html__( 'Add Social Icon shortcode here.', 'metal-theme' ),
			'before_widget' => '<div id="%1$s" class="col-md-10 offset-md-1 %2$s">',
			'after_widget'  => '</div>',
		
		)
	);
}
add_action( 'widgets_init', 'metal_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function metal_theme_scripts() {
	wp_enqueue_style( 'metal-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'metal-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'metal-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style('metal-bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('metal-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('metal-responsive', get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('metal-jquery.mCustomScrollbar.min', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('metal-cdn-1','https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), _S_VERSION, 'screen');
	wp_enqueue_style('metal-cdn-2','https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('metal-cdn-3','https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css', array(), _S_VERSION, 'all');
	?>
	 <!-- sidebar -->
	           
<?php
	wp_enqueue_script( 'metal-jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'metal-bootstrap.bundle.min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'metal-jquery-3.0.0.min', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(), _S_VERSION, true );
	// slider
	wp_enqueue_script( 'metal-jquery.mCustomScrollbar.concat', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'metal-theme-slider-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'metal-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'metal-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'metal_theme_scripts' );

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

/**
 * Custom post type additions.
 */
require get_template_directory() . '/inc/function-custompost.php';