<?php get_header(); ?>

<?php get_template_part('template/content', 'slider'); ?>
<section id="feature">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php the_field('home_features_title', 9); ?></h2>
            <p class="lead"><?php the_field('home_feature_content', 9) ?></p>
        </div>

        <?php get_template_part('template/content', 'feature'); ?>
    </div>
    <!--/.container-->
</section>
<!--/#feature-->
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php the_field('home_recent_works_title'); ?></h2>
            <p class="lead"><?php the_field('home_recent_works_content'); ?></p>
        </div>

        <?php get_template_part('template/content', 'recentwork'); ?>
    </div>
    <!--/.container-->
</section>
<!--/#recent-works-->

<?php get_template_part('template/content', 'ourservice'); ?>
<?php get_template_part('template/content', 'ourskills'); ?>
<?php get_template_part('template/content', 'wrap'); ?>
<!--/#content-->
<?php get_template_part('template/content', 'ourpartner'); ?>
<!--/#partner-->

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2><?php the_field('have_a_question_title', 9); ?></h2>
                        <p><?php the_field('have_a_question_content', 9); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#conatcat-info-->

<?php get_footer(); ?>