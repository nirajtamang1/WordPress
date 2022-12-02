<?php
/**
 * moderna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moderna
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
function moderna_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on moderna, use a find and replace
		* to change 'moderna' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'moderna', get_template_directory() . '/languages' );

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
			'moderna_custom_background_args',
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
add_action( 'after_setup_theme', 'moderna_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moderna_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moderna_content_width', 640 );
}
add_action( 'after_setup_theme', 'moderna_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moderna_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'moderna' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'moderna' ),
			'before_title'  => "<h5 class='widgetheading'>",
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'get_touch', 'moderna' ),
			'id'            => 'get_touch-1',
			'description'   => esc_html__( 'Add get touch here here.', 'moderna' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
			'before_title'  => "<h5 class='widgetheading'>",
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'pages', 'moderna' ),
			'id'            => 'pages-1',
			'description'   => esc_html__( 'Add pages here.', 'moderna' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
			'before_title'  => "<h5 class='widgetheading'>",
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'latestpost', 'moderna' ),
			'id'            => 'latestpost-1',
			'description'   => esc_html__( 'Add latestpost here.', 'moderna' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
			'before_title'  => "<h5 class='widgetheading'>",
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright-footer', 'moderna' ),
			'id'            => 'footer-copyright1',
			'description'   => esc_html__( 'Add Copyright here.', 'moderna' ),
			'before_widget' => '<div id="%1$s" class="copyright %2$s">',
            'after_widget'  => '</div>',
			'before_title'  => "<p>",
			'after_title'   => '</p>',
		)
	);


}
add_action( 'widgets_init', 'moderna_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moderna_scripts() {
	wp_enqueue_style( 'moderna-style-sheet', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(),'all');
	wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri(). '/css/fancybox/jquery.fancybox.css', array(),'all');
	wp_enqueue_style( 'flexslider', get_template_directory_uri(). '/css/flexslider.css', array(),'all');
	wp_enqueue_style( 'styles', get_template_directory_uri(). '/css/style.css', array(),'all');
	wp_enqueue_style( 'default', get_template_directory_uri(). '/skins/default.css', array(),'all');
	wp_style_add_data( 'style', 'rtl', 'replace' );

	if( !is_admin() ) {
        //is_admin() check if it is backend page or not
        wp_deregister_script( 'jquery' );
        wp_enqueue_script( 'moderna-jquery', get_template_directory_uri() . '/js/jquery.js', array(), "1.9.1", true );
        wp_enqueue_script( 'moderna-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), "1.3", true );
    }



	// wp_enqueue_script( 'moderna-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(),'1.9.1' , true );
	// wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(),'1.3' , true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'3.1.0', true );
	wp_enqueue_script( 'jquery.fancybox.pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '2.1.4', true );
	wp_enqueue_script( 'jquery.fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array(),'1.0.5' , true );
	wp_enqueue_script( 'prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', array(),_S_VERSION , true );
	wp_enqueue_script( 'jquery.quickstandjs', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', array(), '1.2.2', true );
	wp_enqueue_script( 'setting', get_template_directory_uri() . '/js/portfolio/setting.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery.flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(),'2.1' , true );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'moderna_scripts' );

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
 * Register the menu 
 */
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => esc_html__( 'Primary Menu', 'text_domain' ),
			'Category_menu' => esc_html__( 'Category Menu', 'text_domain' ),
			'Footer_middle_menu' => esc_html__( 'Footer Middle Menu', 'text_domain' ),
            'footer_menu'  => esc_html__( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

/**
 * calling the custom sidebar
 */
require get_template_directory() . '/inc/custom-sidebar.php';

/**
 * calling for the meta cox 
 */
require get_template_directory() . '/inc/custom-addmetabox.php';

/**
 * Creating sortcode
 */

require get_template_directory() . '/inc/custom-sortcode.php';

if(!is_admin( )){
	wp_dequeue_script("jquery" );
}

/**
 * Creating footer section of images
 */

require get_template_directory() . '/inc/custom-icon.php';