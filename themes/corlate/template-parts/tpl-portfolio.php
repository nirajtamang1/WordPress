<?php

/**
 * Template Name: Porfolio
 */
get_header(); ?>
<section id="portfolio">
    <div class="container">
        <div class="center">
            <h2><?php the_field('portfolio_title'); ?></h2>
            <p class="lead"><?php the_field('portfolio_content'); ?></p>
        </div>
        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
            <?php
            $args = array(
                'taxonomy' => 'portfoliocat',
                'order'   => 'ASC'
            );

            $cats = get_categories($args);
        

            foreach ($cats as $cat) {
               
            ?>
                <li><a href="# <?php get_category_link($cat->term_id); ?>" class="btn btn-default" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
               
            <?php
            }
            ?>
        </ul>
        <!--/#portfolio-filter-->
        <div class="row">
            <div class="portfolio-items">
                <?php
                $recent_work = array(
                    'post_type' => 'work',
                    'posts_per_page' => 8,
                );
                $work_args = new WP_Query($recent_work);
                if ($work_args->have_posts()) :
                    while ($work_args->have_posts()) : $work_args->the_post();
                ?>
                        <div class="portfolio-item <?php foreach (get_the_terms(get_the_ID(), 'portfoliocat') as $term) {
                                                        echo ' ' . $term->slug;
                                                    } ?> col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#"><?php the_title() ?></a></h3>
                                        <p><?php the_content(); ?></p>
                                        <a class="preview" href="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.portfolio-item-->
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif ?>
            </div>
        </div>
    </div>
</section>
<!--/#portfolio-item-->
<?php get_footer(); ?>