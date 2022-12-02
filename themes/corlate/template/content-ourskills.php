<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown">
                <div class="skill">
                    <h2><?php the_field('home_our_skill_title', 9); ?></h2>
                    <p><?php the_field('home_our_skills_content', 9); ?></p>

                    <div class="progress-wrap">
                        <h3>Graphic Design</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('graphic_design_percent', 11); ?>">
                                <span class="bar-width"><?php the_field('graphic_design_percent', 11); ?></span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>HTML</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('html_percent', 11); ?>">
                                <span class="bar-width"><?php the_field('html_percent', 11); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>CSS</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('css_percent', 11); ?>">
                                <span class="bar-width"><?php the_field('css_percent', 11); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Wordpress</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width"><?php the_field('wordpress_percent', 11); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-sm-6-->
            <div class="col-sm-6 wow fadeInDown">
                <div class="accordion">
                    <h2>Why People like us?</h2>
                    <?php do_shortcode("[shortcode_accordion pages='7']"); ?>
                </div>
            </div>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#middle-->