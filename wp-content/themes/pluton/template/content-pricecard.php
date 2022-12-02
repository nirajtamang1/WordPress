<div class="title">
    <h1><?php the_field('price_title'); ?></h1>
    <p><?php the_field('price_content'); ?></p>
</div>

<div class="price-table row-fluid">
    <?php
    $args = array(
        'post_type' => 'price',

    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="span4 price-column">
                <h3><?php the_title(); ?></h3>
                <ul class="list">

                    <li class="price"><?php the_field('price'); ?></li>
                    <li><strong><?php the_field('setup'); ?></strong> Setup</li>
                    <li><strong><?php the_field('support'); ?></strong> Support</li>
                    <li><strong><?php the_field('file_storage'); ?></strong> File Storage</li>
                </ul>
                <a href="#" class="button button-ps">BUY</a>
            </div>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>

<div class="title">
    <div class="centered">
        <p class="price-text"><?php the_field('we_offer_custom_plan'); ?></p>
        <a href="#contact" class="button">Contact Us</a>
    </div>
</div>