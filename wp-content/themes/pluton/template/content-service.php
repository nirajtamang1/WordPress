<!-- Start title section -->
<div class="title">
	<h1><?php the_field('what_we_do_title'); ?></h1>
	<?php the_field('what_we_do_content'); ?>
</div>

<div class="row-fluid">
	<?php
	$args = array(
		'post_type' => 'service',
		'posts_per_page' => 3
	);
	$the_query = new WP_Query($args); ?>
	<?php if ($the_query->have_posts()) :
		while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">

						<?php the_post_thumbnail(); ?>
					</div>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			</div>
	<?php endwhile;
		wp_reset_postdata();
	endif; ?>
</div>