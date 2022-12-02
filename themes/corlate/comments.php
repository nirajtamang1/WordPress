<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corlate
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

		<?php the_comments_navigation(); ?>
		<?php foreach (get_comments(array(
			'post_id' => get_the_ID()
		)) as $comment) { ?>
			<div class="media comment_section">
				<div class="pull-left post_comments">
					<a href="#"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" class="img-circle" alt="" /></a>
				</div>
				<div class="media-body post_reply_comments">
					<h3><?php echo get_the_author(); ?></h3>
					<h4><?php echo get_comment_date(); ?> AT <?php echo get_comment_time('g:i a' ) ?></h4>
					<p><?php echo $comment->comment_content; ?></p>
					<a href="#">Reply</a>
				</div>
			</div>
		<?php } ?>

		
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'corlate' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
