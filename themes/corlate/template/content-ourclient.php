<div class="team">
	<div class="center wow fadeInDown">
		<h2><?php the_field('team_of_corlate_title'); ?></h2>
		<p class="lead"><?php the_field('team_of_corlate_content'); ?></p>
	</div>

	<div class="row clearfix">
		<?php
		$our_team = array(
			'post_type' => 'our_team',
			'posts_per_page' => 4,
		);
		$ourteam_args = new WP_Query($our_team);
		if ($ourteam_args->have_posts()) :
			while ($ourteam_args->have_posts()) : $ourteam_args->the_post();

		?>
				<div class="col-md-4 col-sm-6 <?php if ($ourteam_args->current_post != 0) {
													echo "col-md-offset-2 ";
												}
												?>">
					<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="media">
							<div class="pull-left">
								<a href="#"><img class="media-object" src="<?php echo the_post_thumbnail_url(); ?>" alt=""></a>
							</div>
							<div class="media-body">
								<h4><?php the_title(); ?></h4>
								<h5><?php the_field('posititon_of_teams'); ?></h5>
								<ul class="tag clearfix">
									<li class="btn"><a href="#"><?php the_field('our_teams_skill_1'); ?></a></li>
									<li class="btn"><a href="#"><?php the_field('our_teams_skill_2'); ?></a></li>
									<li class="btn"><a href="#"><?php the_field('our_teams_skill_3'); ?></a></li>
									<li class="btn"><a href="#"><?php the_field('our_teams_skill_4'); ?></a></li>
								</ul>

								<ul class="social_icons">
									<li><a href="#"><i class="<?php the_field('connect_through_our_teams_1'); ?>"></i></a></li>
									<li><a href="#"><i class="<?php the_field('connect_through_our_teams_2'); ?>"></i></a></li>
									<li><a href="#"><i class="<?php the_field('connect_through_our_teams_3'); ?>"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/.media -->
						<p><?php the_content(); ?></p>
					</div>
				</div>
				<!--/.col-lg-4 -->

				<?php if ($ourteam_args->current_post % 2 != 0) { ?>
	</div>
<?php } ?>
<?php if ($ourteam_args->current_post % 2 == 1 && $ourteam_args->current_post <= 2) { ?>
	<div class="row team-bar">
		<div class="first-one-arrow hidden-xs">
			<hr>
		</div>
		<div class="first-arrow hidden-xs">
			<hr> <i class="fa fa-angle-up"></i>
		</div>
		<div class="second-arrow hidden-xs">
			<hr> <i class="fa fa-angle-down"></i>
		</div>
		<div class="third-arrow hidden-xs">
			<hr> <i class="fa fa-angle-up"></i>
		</div>
		<div class="fourth-arrow hidden-xs">
			<hr> <i class="fa fa-angle-down"></i>
		</div>
	</div>
	<!--skill_border-->
<?php } ?>
<?php
			endwhile;
			wp_reset_postdata();
		endif; ?>
</div>
<!--section-->