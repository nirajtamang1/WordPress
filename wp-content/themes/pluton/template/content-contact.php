<div class="container">
    <div class="title">
        <h1><?php the_field('contact_us_title'); ?></h1>
        <p><?php the_field('contact_us_content'); ?></p>
    </div>
</div>

<div class="map-wrapper">
    <div class="map-canvas" id="map-canvas">Loading map...</div>
    <div class="container">
        <div class="row-fluid">
            <div class="span5 contact-form centered">
                <h3>Say Hello</h3>
                <form id="contact-form" action="php/mail.php">
                    <div class="control-group">
                        <div class="controls">
                            <?php echo do_shortcode(get_theme_mod('pluton_setting_contact_shortcode')) ?>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="span9 center contact-info">
        <p><?php echo get_theme_mod('pluton_setting_address'); ?></p>
        <p class="info-mail"><?php echo get_theme_mod('pluton_setting_email'); ?></p>
        <p><?php echo get_theme_mod('pluton_setting_contact_number1'); ?></p>
        <p><?php echo get_theme_mod('pluton_setting_contact_number2'); ?></p>
        <div class="title">
            <h3><?php echo get_theme_mod('pluton_setting_contact_title'); ?></h3>
        </div>
    </div>

    <div class="row-fluid centered">
        <ul class="social">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-4',
                    'menu_class' => 'social',
                    'container' => ' ',

                )
            );
            ?>
        </ul>
    </div>
</div>