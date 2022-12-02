<?php

/**
 * corlate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corlate
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function corlate_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on corlate, use a find and replace
		* to change 'corlate' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('corlate', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'corlate'),
			'social_icon' => esc_html__('Social Icons', 'corlate'),
			'company_menu' => esc_html__('Company', 'corlate'),
			'support' => esc_html__('Support', 'corlate'),
			'developers' => esc_html__('Developers', 'corlate'),
			'our_partner' => esc_html__('Our Partner', 'corlate'),
			'footer_menu' => esc_html__('Footer Menu', 'corlate'),
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
			'corlate_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'corlate_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corlate_content_width()
{
	$GLOBALS['content_width'] = apply_filters('corlate_content_width', 640);
}
add_action('after_setup_theme', 'corlate_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corlate_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'corlate'),
			'id'            => 'sidebar-1',
			'class' => 'adding class',
			'description'   => esc_html__('Add widgets here.', 'corlate'),
			'before_widget' => '<section  id="%1$s" class="widgets %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Copyright', 'corlate'),
			'id'            => 'copyright-1',
			'description'   => esc_html__('Add Copyright here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="col-sm-6 %2$s">',
			'after_widget'  => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Company', 'corlate'),
			'id'            => 'company_footer-1',
			'description'   => esc_html__('Add Company list here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Support', 'corlate'),
			'id'            => 'support-1',
			'description'   => esc_html__('Add support list here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Developers', 'corlate'),
			'id'            => 'developers-1',
			'description'   => esc_html__('Add Developers list here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Our Partner', 'corlate'),
			'id'            => 'our_partner-1',
			'description'   => esc_html__('Add Our Partner here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Archieve', 'corlate'),
			'id'            => 'archieve-1',
			'description'   => esc_html__('Add Archieve here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget archieve %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Tags', 'corlate'),
			'id'            => 'tags-1',
			'description'   => esc_html__('Add Tags here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget tags %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Gallery', 'corlate'),
			'id'            => 'gallery-1',
			'description'   => esc_html__('Add Tags here.', 'corlate'),
			'before_widget' => '<div id="%1$s" class="widget blog_gallery %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'corlate_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function corlate_scripts()
{
	wp_enqueue_style('corlate-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('corlate-style', 'rtl', 'replace');

	wp_enqueue_script('corlate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	// <!-- core CSS -->
	wp_enqueue_style('corlate-bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.0.3', 'all');
	wp_enqueue_style('corlate-font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.0.3', 'all');
	wp_enqueue_style('corlate-animate.min', get_template_directory_uri() . '/css/animate.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('corlate-prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('corlate-main', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('corlate-responsive', get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION, 'all');

	/** Using Javascript */
	wp_enqueue_script('corlate-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.10.2', false);
	wp_enqueue_script('corlate-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.3 ', false);
	wp_enqueue_script('corlate-jquery.prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '3.1.5', false);
	wp_enqueue_script('corlate-jquery.isotope.min', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('corlate-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, false);
	wp_enqueue_script('corlate-wow.min', get_template_directory_uri() . '/js/wow.min.js', array(), _S_VERSION, false);
	
	wp_enqueue_script('corlate-customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION,true);
	
}
add_action('wp_enqueue_scripts', 'corlate_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Creating the custom post type
 */
require get_template_directory() . '/inc/function-registerposttype.php';

/**
 * Adding Customizer for phone Icon and number
 */
require get_template_directory() . '/inc/function-registercustomizer.php';

/**
 * Creating Shortcode for tabs Accordin and Pricing table
 */
require get_template_directory() . '/inc/function-createshortcode.php';



add_action( 'wp_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        var page=2;
		var post_count=jQuery('#posts').data('count');
		jQuery('#load_more').click(function(){
		var data = {
			'action': 'my_action',
			'page': page
		};

		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {	
			jQuery('#posts').append(response);
			if(post_count==page){
				jQuery('#load_more').hide();

			}
		console.log(page++);
		});
	})
	});
	</script> <?php
}

add_action('wp_ajax_my_action', 'my_action');
add_action('wp_ajax_nopriv_my_action', 'my_action');

function my_action() {
	
$args=array(
    'post_type'=>'post',
    'paged'=>$_POST['page'],
);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="blog-item">
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo get_the_date('j M'); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comments', '% comments'); ?></a></span>
                                        <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                    </div>
                                </div>

                                <div class="col-sm-10 blog-content">
                                    <a href="<?php the_permalink(); ?>"><img class="img-responsive img-blog" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%" alt="" /></a>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <h3><?php the_content(); ?></h3>
                                    <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/.blog-item-->
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; 
	wp_die(); // this is required to terminate immediately and return a proper response
}
