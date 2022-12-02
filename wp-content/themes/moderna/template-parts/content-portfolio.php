<?php

/**
 * Template Name: Portfolio
 */
?>
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
 * @package moderna
 */

get_header();
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php the_title(); ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>

					<?php

					//Display a list of all the categories of custom post types

					$terms = get_terms(
						array(
							'taxonomy'   => 'profoliocat', // Custom Post Type Taxonomy Slug
							'hide_empty' => false,
							'parent' => 0,
							'order'         => 'asc',
						)
					);

					?>

					<?php foreach ($terms as $term) { ?>
						<li class="<?php echo $term->slug ?>"><a href="#"><?php echo $term->name; ?></a></li>
					<?php } ?>
				</ul>


				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
						<?php
						$portfolio = array(
							'post_type' => 'gallerycard',
							'posts_per_page' => 10,

						);
						$portfolio_data = new WP_Query($portfolio);
						// making the condition to show post
						if ($portfolio_data->have_posts()) : ?>

							<ul id="thumbs" class="portfolio">
								<?php
								while ($portfolio_data->have_posts()) : $portfolio_data->the_post();
								?>
									<!-- Item Project and Filter Name -->
									<li class="item-thumbs col-lg-3 design" data-id="id-<?php the_ID(); ?>" data-type="<?php $my_terms = get_the_terms($post->ID, 'profoliocat');
																														if ($my_terms && !is_wp_error($my_terms)) {
																															foreach ($my_terms as $term) {
																																echo $term->slug;
																															}
																														}
																														?>">
										<!-- Fancybox - Gallery Enabled - Title - Full Image -->
										<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title(); ?>" href="<?php echo get_the_post_thumbnail_url(); ?>">
											<span class="overlay-img"></span>
											<span class="overlay-img-thumb font-icon-plus"></span>
										</a>
										<!-- Thumb Image and Description -->
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_excerpt() ?>">
									</li>
									<!-- End Item Project -->



								<?php
								endwhile; ?>
							</ul>
						<?php
						endif; ?>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>