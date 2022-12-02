<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pluton
 */

get_header();
?>
<?php get_template_part('template/content', 'slider') ?>
<!-- Service section start -->
<div class="section primary-section" id="service">
	<div class="container">
		<?php get_template_part('template/content', 'service') ?>
	</div>
</div>
<!-- Service section end -->
<!-- Portfolio section start -->
<div class="section secondary-section " id="portfolio">
	<div class="triangle"></div>
	<div class="container">
		<!-- Start details for portfolio project 1 -->
		<?php get_template_part('template/content', 'portfolio') ?>

	</div>
</div>
<!-- Portfolio section end -->
<!-- About us section start -->
<div class="section primary-section" id="about">
	<div class="triangle"></div>
	<div class="container">

		<?php get_template_part('template/content', 'about') ?>


		<h3>Skills</h3>
		<div class="row-fluid">
			<div class="span6">
				<ul class="skills">

					<li>
						<span class="bar" data-width="<?php echo get_theme_mod('pluton_setting_graphic_design') ?>"></span>
						<h3>Graphic Design</h3>
					</li>
					<li>
						<span class="bar" data-width="<?php echo get_theme_mod('pluton_setting_html_css') ?>"></span>
						<h3>Html & Css</h3>
					</li>
					<li>
						<span class="bar" data-width="<?php echo get_theme_mod('pluton_setting_jquery') ?>"></span>
						<h3>jQuery</h3>
					</li>
					<li>
						<span class="bar" data-width="<?php echo get_theme_mod('pluton_setting_wordpress') ?>"></span>
						<h3>Wordpress</h3>
					</li>
				</ul>
			</div>
			
					<div class="span6">
						<div class="highlighted-box center">
							<h1><?php the_field('we_are_hiring_title') ?></h1>
							<p><?php the_field('we_are_hiring_content'); ?></p>
							<button class="button button-sp">Join Us</button>
						</div>
					</div>

		
		</div>
	</div>
</div>
<!-- About us section end -->
<div class="section secondary-section">
	<div class="triangle"></div>

			<div class="container centered">
				<p class="large-text"><?php the_field('elegance_is_not_the_abundance'); ?></p>
				<a href="#" class="button">Purshase now</a>
			</div>



</div>
<!-- Client section start -->
<!-- Client section start -->
<div id="clients">
	<div class="section primary-section">
		<div class="triangle"></div>
		<div class="container">
			

			<?php get_template_part('template/content', 'client') ?>
			


		</div>
	</div>
</div>
<div class="section third-section">
	<div class="container centered">
		<div class="sub-section">
			<div class="title clearfix">
				<div class="pull-left">
					<h3>Our Clients</h3>
				</div>
				<ul class="client-nav pull-right">
					<li id="client-prev"></li>
					<li id="client-next"></li>
				</ul>
			</div>
			<?php get_template_part('template/content', 'clientlogo'); ?>
		</div>
	</div>
</div>
<!-- Price section start -->
<div id="price" class="section secondary-section">
	<div class="container">

		<?php get_template_part('template/content', 'pricecard'); ?>
		

	</div>
</div>
<!-- Price section end -->
<!-- Newsletter section start -->
<div class="section third-section">
	<?php get_template_part('template/content','newsletter');?>
	
</div>
<!-- Newsletter section end -->
<!-- Contact section start -->
<div id="contact" class="contact">
	<div class="section secondary-section">
		<?php get_template_part('template/content','contact');?>
	</div>
</div>
<!-- Contact section edn -->
<?php get_footer(); ?>