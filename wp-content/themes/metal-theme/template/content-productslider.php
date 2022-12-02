<div id="product" class="prot">
   <div class="products">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_left">
                  <?php if (get_field('metal_product_title')) : ?>
                     <h2><?php the_field('metal_product_title'); ?></h2>
                  <?php endif; ?>
                  <?php if (get_field('metal_product_discription')) : ?>
                     <p><?php the_field('metal_product_discription'); ?></p>
                  <?php endif; ?>
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
            $argument = array(
               'taxonomy' => 'category_product',
               'order'   => 'ASC',
            );
            $cats = get_categories($argument);
            foreach ($cats as $cat) {
               $argu = array(
                  'post_type' => 'product_slider',
                  'posts_per_page' =>-1,
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'category_product',
                        'field'    => 'term_id',
                        'terms'    => $cat->cat_ID,
                     ),
                  ),

               );
               $query = new WP_Query($argu);
            ?>
               <div class="carousel-item productdetail">
                  <div class="container">
                     <div class="carousel-caption banner_pro">
                        <div class="row d_flex">
                           <?php

                           if ($query->have_posts()) :
                              while ($query->have_posts()) : $query->the_post(); ?>

                                 <div class="col-md-4 mar_bottom30">
                                    <div class="product ">
                                       <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="#" /></figure>
                                       <h3><?php the_title(); ?></h3>
                                    </div>
                                 </div>
                           <?php
                              endwhile;
                              wp_reset_postdata();
                           endif;
                           ?>

                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>
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
            <?php if (get_field('metal_product_button')) : ?>
               <div class="col-md-12">
                  <a class="read_more" href="<?php echo get_field('metal_product_button')['url']; ?>"><?php echo get_field('metal_product_button')['title']; ?></a>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<!-- end products -->