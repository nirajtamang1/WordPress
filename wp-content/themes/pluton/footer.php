<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pluton
 */
?>

<!-- Footer section start -->


<?php dynamic_sidebar('category'); ?>
<!-- Footer section end -->
<!-- ScrollUp button start -->
<div class="scrollup">
	<a href="#">
		<i class="icon-up-open"></i>
	</a>
</div>
<script async="" defer="" type="text/javascript" src="<?php echo get_theme_mod('pluton_setting_image_url'); ?>"></script>
<?php wp_footer(); ?>

</body>
</html>