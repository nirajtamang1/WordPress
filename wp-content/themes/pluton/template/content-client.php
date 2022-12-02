<div class="title">
    <h1><?php the_field('what_client_say_title'); ?></h1>
    <p><?php the_field('what_client_say_content'); ?></p>
</div>


<div class="row">
    <?php
    $args = array(
        'post_type' => 'client',
        'post_per_page' => 3,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
            <div class="span4">
                <div class="testimonial">
                    <?php the_content(); ?>
                    <div class="whopic">
                        <div class="arrow"></div>
                        <?php the_post_thumbnail(); ?>
                        <strong><?php the_title(); ?>
                            <small><?php the_field('client'); ?></small>
                        </strong>
                    </div>
                </div>
            </div>

    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>

<p class="testimonial-text">
    <?php the_field('perfection_is_achieved_not'); ?>
</p>