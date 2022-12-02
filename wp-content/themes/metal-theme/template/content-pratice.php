<div id="product" class="prot">
   <div class="products">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_left">
                  <h2><?php ( get_field('metal_product_title') ) ? the_field('metal_product_title'):'';?></h2>
                  <p><?php ( get_field('metal_product_discription') ) ? the_field('metal_product_discription'):'';?></p>
               </div>
            </div>
         </div>
      </div>
      <div id="prod" class="carousel slide product_banner" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#prod" data-slide-to="0" class="active"></li>
            <li data-target="#prod" data-slide-to="1"></li>
            <li data-target="#prod" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <?php
            $args = array(
               'post_type' => 'product_slider',
               'posts_per_page' => -1
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
               <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                  <div class="carousel-item productdetail">
                     <div class="container">
                        <div class="carousel-caption banner_pro">
                           <div class="row d_flex">
                              <?php
                              $inside_args = array(
                                 'post_type' => 'product_slider',
                                 'posts_per_page' => 3
                              );
                              $inside_query = new WP_Query($inside_args); ?>

                              <?php while ($inside_query->have_posts()) : $inside_query->the_post(); ?>
                                 <div class="col-md-4 mar_bottom30">
                                    <div class="product ">
                                       <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="#" /></figure>
                                       <h3><?php the_title(); ?></h3>
                                    </div>
                                 </div>
                              <?php endwhile; ?>

                           </div>
                        </div>
                     </div>
                  </div>
            <?php endwhile;
               wp_reset_postdata();
            endif; ?>

         </div>
         <a class="carousel-control-prev" href="#prod" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#prod" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <a class="read_more" href="<?php echo get_field('metal_product_button')['url'];?>"><?php echo get_field('metal_product_button')['title']; ?></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end products -->