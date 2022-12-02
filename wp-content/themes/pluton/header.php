<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pluton
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pluton Theme by BraphBerry.com</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/images/ico/apple-touch-icon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/images/ico/apple-touch-icon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/images/ico/apple-touch-icon-57.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/ico/favicon.ico">
</head>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a href="#" class="brand">
					<img src="<?php _e(esc_url(wp_get_attachment_url(get_theme_mod('custom_logo')))); ?>" width="120" height="40" alt="Logo" />
					<!-- This is website logo -->
				</a>
				<!-- Navigation button, visible on small resolution -->
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<i class="icon-menu"></i>
				</button>
				<!-- Main navigation -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class' => 'nav',
						'menu_id'        => 'top-navigation',
						'container' => 'div',
						'container_class' => 'nav-collapse collapse pull-right',

					)
				);
				?>
			</div>
		</div>
	</div>