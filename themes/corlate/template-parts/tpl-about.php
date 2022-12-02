<?php
/**
 * Template Name: About us
 */
?>
<?php
get_header(); ?>
<section id="about-us">
	<div class="container">
		<?php get_template_part('tempate/content', 'aboutslider'); ?>
		<!-- Our Skill -->
		<div class="skill-wrap clearfix">

			<div class="center wow fadeInDown">
				<h2><?php the_field('our_skill_title'); ?></h2>
				<p class="lead"><?php the_field('our_skill_content') ?></p>
			</div>

			<div class="row">
				<div class="col-sm-3">
					<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="joomla-skill">
							<p><em><?php the_field('joomls_percent'); ?></em></p>
							<p>Joomla</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="html-skill">
							<p><em><?php the_field('html_percent'); ?></em></p>
							<p>HTML</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
						<div class="css-skill">
							<p><em><?php the_field('css_percent'); ?></em></p>
							<p>CSS</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
						<div class="wp-skill">
							<p><em><?php the_field('wordpress_percent'); ?></em></p>
							<p>Wordpress</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/.our-skill-->
		<!-- our-team -->
		<?php get_template_part('template/content', 'ourclient'); ?>
	</div>
	<!--/.container-->
</section>
<!--/about-us-->
<?php get_footer(); ?>