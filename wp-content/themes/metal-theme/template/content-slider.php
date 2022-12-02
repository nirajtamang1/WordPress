

<section class="banner_main">
   <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
         <?php
         $args = array(
            'post_type' => 'slider',
            'posts_per_page' => -1,
         );
         $the_query = new WP_Query($args); ?>
         <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption  banner_po">

                        <div class="row">
                           <div class="col-md-8">
                              <div class="build_box text_align_left">
                                 <h1><?php the_title(); ?><br> <?php if (get_field('slider_header')) : ?> <span class="white"><?php the_field('slider_header'); ?></span><?php endif; ?></h1>
                                 <?php the_content(); ?>
                                 <?php if (get_field('slider_contact_now')) : ?>
                                    <a class="read_more conatct_btn" href="<?php echo get_field('slider_contact_now')['url'];
                                                                           ?>" role="button"><?php echo get_field('slider_contact_now')['title']; ?></a>
                                 <?php endif;
                                 if (get_field('slider_about_factory')) : ?>
                                    <a class="read_more conatct_btn" href="<?php echo get_field('slider_about_factory')['url'];
                                                                           ?>" role="button"><?php echo get_field('slider_about_factory')['title']; ?></a>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                        <?php if (get_field('slider_best')) : ?>
                           <strong><?php the_field('slider_best'); ?></strong><?php endif; ?>
                     </div>
                  </div>
               </div>
         <?php endwhile;
            wp_reset_postdata();
         endif; ?>

      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <i class="fa fa-angle-left" aria-hidden="true"></i>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <i class="fa fa-angle-right" aria-hidden="true"></i>
         <span class="sr-only">Next</span>
      </a>
   </div>
</section>
