<?php get_header(); ?>
<section id="blog" class="container">

    <div class="center">
        <h2><?php the_field('blog_page_title', 19); ?></h2>
        <p class="lead"><?php the_field('blog_page_content', 19); ?></p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
            <?php
$args1=array(
    'post_type'=>'post',
    'paged'=>-1
);
// the query
$the_post_query = new WP_Query( $args1 ); 
?>

<?php
$args=array(
    'post_type'=>'post',
    'paged'=>1
);
// the query
$the_query = new WP_Query( $args ); ?>
<div id="posts" data-count="<?php echo ceil($the_post_query->found_posts/2)?>">
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
                <div class="blog-item">
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo get_the_date('j M'); ?></span>
                                <span><i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comments', '% comments'); ?></a></span>
                                
                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                            </div>
                        </div>

                        <div class="col-sm-10 blog-content">
                            <a href="<?php the_permalink(); ?>"><img class="img-responsive img-blog" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%" alt="" /></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <h3><?php the_content(); ?></h3>
                            <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.blog-item-->
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif; ?>
                <!-- Giving argument for pagination  -->
            </div>
            <!--/#posts-->
            <button id="load_more">Load More</button>

            </div>
            <!--/.col-md-8-->
            <?php get_template_part('template/content', 'sidebar') ?>
        </div>
        <!--/.row-->
    </div>
</section>
<!--/#blog-->

<?php get_footer(); ?>