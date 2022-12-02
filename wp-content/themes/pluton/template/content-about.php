<div class="title">
    <h1><?php the_field('who_we_are_title'); ?></h1>
    <p><?php the_field('who_we_are_content'); ?></p>
</div>


<div class="row-fluid team">
    <?php
    $args = array(
        'post_type' => 'about',
        'posts_per_page' => 3
    );
    $the_args = new WP_Query($args);
    if ($the_args->have_posts()) :
        while ($the_args->have_posts()) : $the_args->the_post();
    ?>
            <div class="span4" id="first-person">
                <div class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_field('name'); ?></h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-3',
                            'menu_class' => 'social',
                            'container' => ' ',

                        )
                    );
                    ?>
                    <div class="mask">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>

<div class="about-text centered">
    <h3><?php the_field('about_us_title'); ?></h3>
    <p> <?php the_field('about_us_content'); ?></p>
</div>