<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <?php do_shortcode("[shortcode_for_wrap pages='8']"); ?>
            </div>
            <!--/.col-sm-6-->
            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <h2><?php the_field('home_testiomonials_title', 9) ?></h2>
                    <?php
                    $testimonial = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 2,
                    );
                    $testimonial_args = new WP_Query($testimonial);
                    if ($testimonial_args->have_posts()) :
                        while ($testimonial_args->have_posts()) : $testimonial_args->the_post();
                    ?>
                            <div class="media testimonial-inner">
                                <div class="pull-left">
                                    <img class="img-responsive img-circle" src="<?php echo get_the_post_thumbnail_url();; ?>">
                                </div>
                                <div class="media-body">
                                    <?php the_content(); ?>
                                    <span><strong>-<?php the_title(); ?>/</strong><?php the_field('testominals_position_of_company'); ?></span>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>