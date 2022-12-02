<ul class="row client-slider" id="clint-slider">
    <?php
    $args = array(
        'post_type' => 'client_logo',
        'posts_per_page' => 5,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li>
                <a href="">
                    <?php the_post_thumbnail(); ?>
                </a>
            </li>

        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</ul>