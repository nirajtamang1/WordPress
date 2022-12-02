<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corlate
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php single_post_title(); ?>| <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="homepage">
	<?php wp_body_open(); ?>
	<header id="header">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-4">
						<div class="top-number">
							<p><i class="<?php echo get_theme_mod('phone_icon'); ?>"></i> <?php echo get_theme_mod('phone_number'); ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-xs-8">
						<div class="social">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social_icon',
									'menu_class' => 'social-share',
									'container' => '',

								)
							);
							?>
							<div class="search">
								<form role="search" method="get" action="<?php bloginfo('url'); ?>">
									<input type="search" class="search-form" autocomplete="off" placeholder="Search" value name="s">
									<i class="fa fa-search"></i>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/.container-->
		</div>
		<!--/.top-bar-->

		<nav class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse navbar-right">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class' => 'nav navbar-nav',
							'container_class'      => 'collapse navbar-collapse navbar-right',
						)
					);
					?>

				</div>
			</div>
			<!--/.container-->
		</nav>
		<!--/nav-->
	</header>
	<!--/header-->