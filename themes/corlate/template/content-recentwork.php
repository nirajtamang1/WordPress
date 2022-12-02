<div class="row">
    <?php
    $recent_work = array(
        'post_type' => 'work',
        'posts_per_page' => 8,
    );
    $work_args = new WP_Query($recent_work);
    if ($work_args->have_posts()) :
        while ($work_args->have_posts()) : $work_args->the_post();
    ?>
            <!-- you have to do img -resposnsive by adding metabox  -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#"><?php the_title(); ?></a> </h3>
                            <p><?php the_content(); ?></p>
                            <a class="preview" href="<?php _e(wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail')); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>
<!--/.row-->