<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corlate
 */
?>
<section id="blog singleblog" class="container">
    <div class="center">
        <h2><?php the_field('blog_page_title', 19); ?></h2>
        <p class="lead"><?php the_field('blog_page_content', 19); ?></p>
    </div>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">

                    <img class="img-responsive img-blog" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%" alt="" />
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo get_the_date('j M'); ?></span>
                                <span><i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comments', '% comments'); ?></a></span>
                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_content(); ?>

                            <div class="post-tags">
                                <strong>Tag:</strong> <?php
                                                        $tag_array = array();
                                                        $posttags = get_the_tags();
                                                        if ($posttags) {
                                                            foreach ($posttags as $tag) {
                                                                $tagname = '<a href="#">' . $tag->name . '</a>';
                                                                array_push($tag_array, $tagname);
                                                            }
                                                        }
                                                        ?>
                                <?php echo implode("/", $tag_array); ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.blog-item-->
                <div class="media reply_section">
                    <div class="pull-left post_reply text-center">
                        <a href="#"><img src="<?php echo get_avatar_url(get_the_author_ID()); ?>" class="img-circle" alt="" /></a>
                        <ul>
                            <li><a href="<?php the_field('author_fackbook_link', 'user_' . get_the_author_meta('ID')); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php the_field('author_twitter_link', 'user_' . get_the_author_meta('ID')); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php the_field('author_google-plus_link', 'user_' . get_the_author_meta('ID')); ?>" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                        </ul>
                    </div>
                    <div class="media-body post_reply_content">
                        <?php $user_info = get_userdata(get_the_author_meta('ID')); ?>
                        <h3> <?php _e("$user_info->first_name  $user_info->last_name"); ?></h3>
                        <p class="lead"><?php get_the_author_meta(the_author_description()); ?></p>
                        <p><strong>Web:</strong> <a href="#"><?php get_the_author_meta(the_author_url()); ?></a></p>
                    </div>
                </div>
                
                <h1 id="comments_title"><?php comments_number('0 Comments', '1 Comments', '% Comments'); ?></h1>
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif; ?>
            </div>
            <!--/.col-md-8-->
            <?php get_template_part('template/content', 'sidebar') ?>
        </div>
        <!--/.row-->
    </div>
</section>
<!--/#blog-->