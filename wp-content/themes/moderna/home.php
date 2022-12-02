<?php get_header(); 

?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<?php wp_reset_postdata( ); ?>
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php echo get_the_title( get_option('page_for_posts', true) );?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
        <?php get_template_part( 'template-parts/content', 'blog' ); ?>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>">
						<input type="search" class="search-field" placeholder="Search.." value name="s">
					</form>
				</div>
				
				<div class="widget">
					<?php get_sidebar();?>
				</div>
				
				
				</aside>
			</div>
		</div>
	</div>
	</section>
<?php get_footer();?>