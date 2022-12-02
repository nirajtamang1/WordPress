<div class="row">
	<div class="col-lg-12">
		<div class="row">

			<?php

			$card_arg = array(
				'post_type' => 'cardpart',
			);
			$card_value = new WP_Query($card_arg);
			// making the condition to show post
			if ($card_value->have_posts()) :
				while ($card_value->have_posts()) : $card_value->the_post();
			?>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?php the_title(); ?></h4>
								<div class="icon">
									<?php echo get_post_meta($post->ID, 'moderna_logo', true); ?>
								</div>
								<p><?php the_content(); ?></p>
							</div>
							<div class="box-bottom">
								<a href="<?php the_permalink( )?>">Learn more</a>
							</div>

						</div>
					</div>

			<?php
				endwhile;		
			endif;
			wp_reset_query();
?>
		</div><!--end of row inside col-log-12-->
	</div><!--end of col-log-12-->
</div><!--end of row!>