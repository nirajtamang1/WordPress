<?php get_header();?>
<?php get_template_part( 'template-parts/custom', 'slider' ); ?>
This is index.php

	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
				
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
	<?php get_template_part( 'template-parts/content', 'card' ); ?>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<?php get_template_part('template-parts/content','recentwork');?>
		</div>

	</div>
	</section>
	
<?php get_footer();?>
</body>
</html>