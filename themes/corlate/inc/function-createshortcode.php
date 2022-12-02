<?php
//Shortcode for pricecard 
function create_shortcode_function_pricingcard($attr)
{
    $number = shortcode_atts(array(
        'pages' => '10',
    ), $attr);
    $pricecard = array(
        'post_type' => 'pricing_table',
        'posts_per_page' => $number['pages'],
    ); ?>
    <div class="row text-center">
        <?php

        $pricecard_args = new WP_Query($pricecard);
        if ($pricecard_args->have_posts()) :
            while ($pricecard_args->have_posts()) : $pricecard_args->the_post();
                $pricing_class = get_field('pricing_adding_class');
                if ($pricing_class == 'one' || $pricing_class == 'two' || $pricing_class == 'three') : ?>
                    <div class="col-sm-4 plan price-<?php echo $pricing_class; ?> wow fadeInDown">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                        <ul>
                            <li class="heading-<?php echo $pricing_class; ?>">
                                <h1><?php the_title(); ?></h1>
                                <span>$<?php the_field('pricing_table_price'); ?>/Month</span>
                            </li>
                            <li><?php the_field('pricing_table_disk_space'); ?> Gb Disk Space</li>
                            <li><?php the_field('pricing_table_dadicated_ram') ?>GB Dadicated Ram</li>
                            <li><?php the_field('pricing_table_addon_domain') ?> Addon Domain</li>
                            <li><?php the_field('pricing_table_email_account') ?> Email Account</li>
                            <li><?php the_field('pricing_table_support') ?> Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>

                    </div>
                <?php else : ?>
                    <div class="col-sm-6 col-md-3 plan price-<?php echo $pricing_class; ?> wow fadeInDown">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                        <ul>
                            <li class="heading-<?php echo $pricing_class; ?>">
                                <h1><?php the_title(); ?></h1>
                                <span>$<?php the_field('pricing_table_price'); ?>/Month</span>
                            </li>
                            <li><?php the_field('pricing_table_disk_space'); ?>Gb Disk Space</li>
                            <li><?php the_field('pricing_table_dadicated_ram') ?>GB Dadicated Ram</li>
                            <li><?php the_field('pricing_table_addon_domain') ?> Addon Domain</li>
                            <li><?php the_field('pricing_table_email_account') ?> Email Account</li>
                            <li><?php the_field('pricing_table_support') ?> Suppot</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

        <?php
                endif;
            endwhile;
        endif; ?>

    </div>
<?php }
add_shortcode('create_shortcode_pricing_card', 'create_shortcode_function_pricingcard');
?>
<!-- shortcode for tab warp -->

<?php
function corlate_shortcode_wrap($attribut)
{
    $wrap_number = shortcode_atts(array(
        'pages' => 10,

    ), $attribut);
    $tabs = array(
        'post_type' => 'tabs',
        'posts_per_page' => $wrap_number['pages'],
    );

?>
    <div class="tab-wrap">
        <div class="media">
            <div class="parrent pull-left">
                <ul class="nav nav-tabs nav-stacked">
                    <?php
                    $tabs_args = new WP_Query($tabs);
                    if ($tabs_args->have_posts()) :
                        while ($tabs_args->have_posts()) : $tabs_args->the_post();
                    ?>
                            <li class=""><a href="#tab-<?php the_ID(); ?>" data-toggle="tab" class="analistic-01"><?php the_title(); ?></a></li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </ul>
            </div>

            <div class="parrent media-body">
                <div class="tab-content">
                    <?php
                    $tabs = array('post_type' => 'tabs', 'posts_per_page' => 5,);
                    $tabs_args = new WP_Query($tabs);
                    if ($tabs_args->have_posts()) :
                        while ($tabs_args->have_posts()) : $tabs_args->the_post();
                    ?>
                            <div class="tab-pane fade" id="tab-<?php the_ID(); ?>">
                                <div class="media">
                                    <?php
                                    if (has_post_thumbnail()) {
                                    ?>
                                        <div class="pull-left">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php
                                    } ?>

                                    <div class="media-body">
                                        <h2><?php the_field('tabs_second_heading'); ?></h2>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <!--/.tab-content-->
            </div>
            <!--/.media-body-->
        </div>
        <!--/.media-->
    </div>
    <!--/.tab-wrap-->
<?php }
add_shortcode('shortcode_for_wrap', 'corlate_shortcode_wrap');
?>

<!-- Creatng for shortcode accordain -->

<?php

function corlate_shortcode_accordain($attribut)
{
    $accordain_number = shortcode_atts(array(
        'pages' => 10,

    ), $attribut);
    $whypeople = array(
        'post_type' => 'whyus',
        'posts_per_page' => $accordain_number['pages'],
    );

?>


    <div class="panel-group" id="accordion1">
        <?php
        $whypeople_args = new WP_Query($whypeople);

        if ($whypeople_args->have_posts()) :

            while ($whypeople_args->have_posts()) : $whypeople_args->the_post();


        ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne-<?php the_ID(); ?>">
                                <?php the_title() ?>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </h3>
                    </div>


                    <div id="collapseOne-<?php the_ID(); ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="media accordion-inner">
                                <div class="pull-left">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="media-body">
                                    <h4><?php the_field('why_us_subtitle') ?></h4>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif; ?>


    </div>
    <!--/#accordion1-->

<?php
}
add_shortcode('shortcode_accordion', 'corlate_shortcode_accordain');
add_filter('widget_text', 'do_shortcode');
?>