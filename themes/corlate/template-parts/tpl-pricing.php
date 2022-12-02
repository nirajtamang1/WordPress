<?php

/**
 * Template Name:Pricing
 */
?>
<?php get_header(); ?>
<section class="pricing-page">
    <div class="container">
        <div class="center">
            <h2><?php the_field('pricing_title'); ?></h2>
            <p class="lead"><?php the_field('pricing_content'); ?></p>
        </div>
        <div class="pricing-area text-center">
            <?php do_shortcode("[create_shortcode_pricing_card pages='9']") ?>
        </div>
        <!--/pricing-area-->
    </div>
    <!--/container-->
</section>
<!--/pricing-page-->
<?php get_footer(); ?>