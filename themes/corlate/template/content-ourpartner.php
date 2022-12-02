<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php the_field('home_our_partners_title', 9) ?></h2>
            <p class="lead"><?php the_field('home_our_partners_content', 9) ?></p>
        </div>

        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo esc_url(get_field('our_partner_image_1')['url']); ?>"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php echo esc_url(get_field('our_partner_image_2')['url']); ?>"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php echo esc_url(get_field('our_partner_image_3')['url']); ?>"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php echo esc_url(get_field('our_partner_image_4')['url']); ?>"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php echo esc_url(get_field('our_partner_image_5')['url']); ?>"></a></li>
            </ul>
        </div>
    </div>
    <!--/.container-->
</section>