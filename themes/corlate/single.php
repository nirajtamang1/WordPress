<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package corlate
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			// If comments are open or we have at least one comment, load up the comment template.
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
