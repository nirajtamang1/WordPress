<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package moderna
 */


get_header();
?>

<div class="container">
	<div class="row">
	

		<div class="col-lg-8">

			<?php if (have_posts()) :?>
			<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				get_search_query();
				?>
			</h1>
		</header><!-- .page-header -->
		<?php
				/* Start the Loop */
				while (have_posts()) : the_post()
			 ?>
					<article>
						<div class="post-image">

							<div class="post-heading">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>

						<p>
							<?php the_content(); ?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"><?php the_time('F j, Y') ?></a></li>
								<li><i class="icon-user"></i><a href="#"><?php the_author_posts_link(); ?></a></li>
								<li><i class="icon-folder-open"></i><a href="#"> <?php wp_title(); ?></a></li>
								<li><i class="icon-comments"></i><a href="<?php comments_link(); ?>" class="comments"><?php comments_number('0 comments', '1 comments', '% responses'); ?></li>
							</ul>

						</div>

					</article>
					<?php endwhile; ?>
				<div id="pagination">
					<?php echo the_posts_pagination(); ?>
				</div>
			<?php
			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
			
		</div>
		<div class="col-lg-4">
			<aside class="right-sidebar">
			<div class="widget">
					<form role="search" method="get" class="search-form" action="http://localhost/moderna/">
						<input type="search" class="search-field" placeholder="Search.." value name="s">
					</form>
				</div>
				<div class="widget">
					<?php get_sidebar(); ?>
				</div>


			</aside>
		</div>


	</div>
</div>

<?php
get_footer();
?>