<?php

/**
 * Template Name: Shortcodes
 */
get_header();
?>
<section id="content" class="shortcode-item">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7">
                <h2><?php the_field('shortcodes_tab_title', 29); ?></h2>
                <?php do_shortcode("[shortcode_for_wrap pages='4']"); ?>
            </div>
            <!--/.col-sm-6-->

            <div class="col-xs-12 col-sm-5">
                <h2><?php the_field('shortcodes_accordion', 29); ?></h2>
                <div class="accordion">
                    <?php do_shortcode("[shortcode_accordion pages='3']"); ?>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->
<section class="pricing-area shortcode-item">
    <div class="container">
        <h2><?php the_field('shortcodes_tab_pricing_table'); ?></h2>
        <?php do_shortcode("[create_shortcode_pricing_card pages='3']") ?>
    </div>
</section>
<!--/pricing_area-->
<section id="recent-works" class="shortcode-item">
    <div class="container">
        <h2><?php the_field('shortcodes_tab_gallery', 29); ?></h2>
        <?php get_template_part('template/content', 'recentwork'); ?>
    </div>
</section>
<!--/#portfolio-->

<?php get_footer(); ?>