<div class="title">
	<h1><?php the_field('have_you_seen_our_works_title'); ?></h1>
	<p><?php the_field('have_you_seen_our_work_content'); ?></p>
</div>

<ul class="nav nav-pills">
	<li class="filter" data-filter="all">
		<a href="#noAction">All</a>
	</li>
	<?php
	//Display a list of all the categories of custom post types
	$terms = get_terms(
		array(
			'taxonomy'   => 'category', // Custom Post Type Taxonomy Slug
			'hide_empty' => false,
			'parent' => 0,
			'order'         => 'desc',
		)
	);
	?>
	<?php foreach ($terms as $term) { ?>

		<li class="filter" data-filter="<?php echo $term->slug; ?>"><a href="#noAction"><?php echo $term->name; ?></a></li>
	<?php } ?>
</ul>


<div id="single-project">
	<?php
	$args = array(
		'post_type' => 'portfolio',
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) :

		while ($the_query->have_posts()) : $the_query->the_post();
	?>
			<div id="slidingDiv<?php the_ID(); ?>" class="toggleDiv row-fluid single-project">
				<div class="span6">
					<?php the_post_thumbnail(); ?>
				</div>
				
				<div class="span6">
					<div class="project-description">
						<div class="project-title clearfix">
							<h3><?php the_title(); ?></h3>
							<span class="show_hide close">
								<i class="icon-cancel"></i>
							</span>
						</div>
						<div class="project-info">
							<div>
								<span>Client</span><?php the_field('client'); ?>
							</div>
							<div>
								<span>Date</span><?php the_field('date'); ?>
							</div>
							<div>
								<span>Skills</span><?php the_field('skills'); ?>
							</div>
							<div>
								<span>Link</span><?php the_field('links'); ?>
							</div>
						</div>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
	<?php endwhile;
		wp_reset_postdata();
	endif; ?>
	<!-- End details for portfolio project 1 -->

	<ul id="portfolio-grid" class="thumbnails row">
		<?php
		$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => 9,
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) :

			while ($the_query->have_posts()) : $the_query->the_post();

		?>
				<li class="span4 mix <?php $my_terms = get_the_terms($post->ID, 'category');
										if ($my_terms && !is_wp_error($my_terms)) {
											foreach ($my_terms as $term) {
												echo $term->slug;
											}
										}
										?>">
					<div class="thumbnail">
						<?php the_post_thumbnail(); ?>
						<a href="#single-project" class="more show_hide" rel="#slidingDiv<?php the_ID(); ?>">
							<i class="icon-plus"></i>
						</a>
						<h3>Thumbnail label</h3>
						<p>Thumbnail caption...</p>
						<div class="mask"></div>
					</div>
				</li>


			<?php endwhile; ?>
	</ul>
<?php
			wp_reset_postdata();
		endif; ?>
</div>