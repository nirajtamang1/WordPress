<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corlate
 */

?>
<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('company_footer-1'); ?>
            </div>
            <!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('support-1'); ?>
            </div>
            <!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('developers-1'); ?>
            </div>
            <!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('our_partner-1');?>

            </div>
            <!--/.col-md-3-->
        </div>
    </div>
</section>
<!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('copyright-1'); ?>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_menu',
                    'menu_class' => 'pull-right',
                    'container_class'      => 'col-sm-6',
                )
            );
            ?>
        </div>
    </div>
</footer>
<!--/#footer-->
<?php wp_footer(); ?>
</body>

</html>