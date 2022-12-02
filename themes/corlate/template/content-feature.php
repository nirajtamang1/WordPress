<div class="row">
    <div class="features">
        <?php
        $features = array(
            'post_type' => 'feature',
            'posts_per_page' => 6,
        );
        $feature_args = new WP_Query($features);
        if ($feature_args->have_posts()) :
            while ($feature_args->have_posts()) : $feature_args->the_post();
        ?>
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="<?php the_field('feature_icon'); ?>"></i>
                        <h2><?php the_title(); ?></h2>
                        <h3><?php the_content(); ?></h3>
                    </div>
                </div>
                <!--/.col-md-4-->
        <?php
            endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
    <!--/.services-->
</div>
<!--/.row-->