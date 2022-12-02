<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $args = array(
                'post_type' => 'slider',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php echo get_theme_mod('background_image_upload_for_slider'); ?>
                    <div class="item" style="background-image:url(<?php echo esc_url(get_field('background_image')['url']); ?>)">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">

                                        <h1 class="animation animated-item-1"><?php the_title(); ?></h1>
                                        <h2 class="animation animated-item-2"><?php the_content(); ?></h2>
                                        <a class="btn-slide animation animated-item-3" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>

                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img src="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.item-->
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>
<!--/#main-slider-->