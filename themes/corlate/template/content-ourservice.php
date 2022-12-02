<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php the_field('home_our_service_title', 9) ?></h2>
            <p class="lead"><?php the_field('home_our_services_content', 9) ?></p>
        </div>

        <div class="row">
            <?php
            $service = array(
                'post_type' => 'service',
                'posts_per_page' => 6,
            );
            $service_args = new WP_Query($service);
            if ($service_args->have_posts()) :
                while ($service_args->have_posts()) : $service_args->the_post();

            ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif ?>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#services-->