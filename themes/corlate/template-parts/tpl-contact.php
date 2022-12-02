<?php

/**
 * Template Name: Contact us
 */
?>
<?php get_header(); ?>

<section id="contact-info">
    <div class="center">
        <h2><?php the_field('how_to_reach_title', 21) ?></h2>
        <p class="lead"><?php the_field('how_to_reach_content', 21) ?></p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_field('map_image_url') ?>"></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5><?php the_field('head_office_title', 21); ?></h5>
                                <p><?php the_field('head_office_address_1', 21); ?> <br>
                                    <?php the_field('head_office_address_2', 21); ?></p>
                                <p>Phone:<?php the_field('head_office_phone_number', 21); ?> <br>
                                    Email Address:<?php the_field('head_office_email', 21); ?></p>
                            </address>

                            <address>
                                <h5><?php the_field('zonal_office_title', 21); ?></h5>
                                <p> <?php the_field('zonal_office_address_1', 21); ?><br>
                                    <?php the_field('zonal_office_address_2'); ?></p>
                                <p>Phone:<?php the_field('zonal_office_phone_number', 21); ?> <br>
                                    Email Address:<?php the_field('zonal_office_email_address', 21); ?></p>
                            </address>
                        </li>


                        <li class="col-sm-6">
                            <address>
                                <h5><?php the_field('zone#2_office_title', 21); ?></h5>
                                <p><?php the_field('zone#2_office_address_1', 21); ?><br>
                                    <?php the_field('zone#2_office_address_2', 21); ?></p>
                                <p>Phone: <?php the_field('zone#2_office_phone', 21); ?><br>
                                    Email Address:<?php the_field('zone#2_office_email_address', 21); ?></p>
                            </address>

                            <address>
                                <h5><?php the_field('zone#3_office_title', 21); ?></h5>
                                <p><?php the_field('zone#3_office_address_1', 21); ?> <br>
                                    <?php the_field('zone#3_office_address_2', 21); ?></p>
                                <p>Phone:<?php the_field('zone#3_office_phone', 21); ?> <br>
                                    Email Address:<?php the_field('zone#3_office_email', 21); ?></p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2><?php the_field('drop_your_message_title', 21) ?></h2>
            <p class="lead"><?php the_field('drop_your_message_content', 21) ?></p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <?php echo do_shortcode('[contact-form-7 id="460" title="Contact form 1"]'); ?>

                    </div>

                </div>

            </form>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->
<?php get_footer(); ?>