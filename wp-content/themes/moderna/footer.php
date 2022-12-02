<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moderna
 */
?>
<footer>
	<div class="container">
		<div class="row">
			<!-- showing sidebar according to need -->
			<div class="col-lg-3">
				<?php dynamic_sidebar('get_touch-1'); ?>
			</div>
			<div class="col-lg-3">			
				<?php dynamic_sidebar('pages-1'); ?>
			</div>
			<div class="col-lg-3">
				<?php dynamic_sidebar('latestpost-1'); ?>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Flickr photostream</h5>
					<div class="flickr_badge">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>

		</div><!-- end of row -->
	</div><!--end of conatiner-->
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
						<?php dynamic_sidebar('footer-copyright1'); ?>
						
				
				</div>
				
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="<?php echo get_theme_mod('moderna_setting_facebook_link');?>" target="_blank" data-placement="top" title="Facebook"><i class="<?php echo get_theme_mod('moderna_setting_facebook_image');?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('moderna_setting_twitter_link');?>"  target="_blank" data-placement="top" title="Twitter"><i class="<?php echo get_theme_mod('moderna_setting_twitter_image');?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('moderna_setting_linkedin_link');?>"  target="_blank"  data-placement="top" title="Linkedin"><i class="<?php echo get_theme_mod('moderna_setting_linkedin_image');?>"></i></a></li>
						<li><a href="<?php echo get_theme_mod('moderna_setting_pinterest_link');?>"  target="_blank"  data-placement="top" title="pinterest"><i class="<?php echo get_theme_mod('moderna_setting_pinterest_image');?>"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php wp_footer(); ?>

</body>

</html>