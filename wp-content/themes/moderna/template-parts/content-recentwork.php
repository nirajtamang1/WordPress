<div class="row">
<div class="col-lg-12">
	<h4 class="heading">Recent Works</h4>
	<div class="row">

		<section id="projects">
			<?php

$gallery_arg = array(
	'post_type' => 'gallerycard',
	'posts_per_page'=>4,
);
$gallery_value = new WP_Query($gallery_arg);
// making the condition to show post
if ($gallery_value->have_posts()) : ?>
	<ul id="thumbs" class="portfolio">
		<?php
					while ($gallery_value->have_posts()) : $gallery_value->the_post();
				?>
					<li class="col-lg-3 design" data-id="id-<?php the_ID( ); ?>" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title(); ?>" href="<?php echo get_the_post_thumbnail_url(); ?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_excerpt(); ?>">
						</div>
						</li>

				<?php
					endwhile; ?>
				</ul>
				<?php
				endif; ?>
		</section>
	</div>
</div>
			</div>