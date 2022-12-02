<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metal-theme
 */

?>
<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <?php if (is_active_sidebar('newsletter')) : ?>
               <div class="col-md-8 offset-md-2">
                  <?php dynamic_sidebar('newsletter'); ?>
               </div>
            <?php endif; ?>
            <?php dynamic_sidebar('socialicon'); ?>
            <div class="col-md-12">
               <?php if (has_nav_menu('social_icon')) : ?>
                  <ul class="social_icon">
                     <li><a href="Javascript:void(0)"> <?php
                                                         wp_nav_menu(
                                                            array(
                                                               'theme_location' => 'social_icon',
                                                            )
                                                         );
                                                         ?></a></li>

                  </ul>
               <?php endif; ?>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <?php get_sidebar(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
<!-- end footer -->
</body>
</html>