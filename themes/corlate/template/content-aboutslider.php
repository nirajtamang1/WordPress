<div class="center wow fadeInDown">
    <h2><?php the_field('about_corlate_title'); ?></h2>
    <p class="lead"><?php the_field('about_corlate_content'); ?></p>
</div>

<!-- about us slider -->
<div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $slider = array(
                'post_type' => 'slider',
            );
            $slider_args = new WP_Query($slider);
            if ($slider_args->have_posts()) :
                while ($slider_args->have_posts()) : $slider_args->the_post();
            ?>

                    <div class="item ">
                        <!--active-->
                        <img src="<?php echo esc_url(get_field('background_image')['url']); ?>" class="img-responsive" alt="">
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <!--/#carousel-slider-->
</div>
<!--/#about-slider-->