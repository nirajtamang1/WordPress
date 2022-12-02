<?php

/**
 * Template Name: Services
 */
?>
<?php get_header(); ?>
<section id="feature" class="transparent-bg">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php the_field('our_service_title'); ?></h2>
            <p class="lead"><?php the_field('our_service_content'); ?></p>
        </div>

        <?php get_template_part('template/content', 'feature'); ?>
        <div class="get-started center wow fadeInDown">
            <h2><?php the_field('ready_to_get_title'); ?></h2>
            <p class="lead"><?php the_field('ready_to_get_content'); ?></p>
            <div class="request">
                <h4><a href="#">Request a free Quote</a></h4>
            </div>
        </div>
        <!--/.get-started-->

        <div class="clients-area center wow fadeInDown">
            <h2><?php the_field('what_our_client_says_title'); ?></h2>
            <p class="lead"><?php the_field('what_our_client_says_content'); ?></p>
        </div>

        <div class="row">
            <?php
            $client = array(
                'post_type' => 'our_client',
                'posts_per_page' => 3,
            );
            $client_detail = new WP_Query($client);
            if ($client_detail->have_posts()) :
                while ($client_detail->have_posts()) : $client_detail->the_post();

            ?>
                    <div class="col-md-4 wow fadeInDown">
                        <div class="clients-comments text-center">
                            <img src="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>" class="img-circle" alt="">
                            <h3><?php the_content(); ?></h3>
                            <h4><span>-<?php the_title(); ?> /</span> <?php the_field('position_of_our_client'); ?></h4>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#feature-->
<?php get_footer(); ?>