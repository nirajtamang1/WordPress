<section id="featured">
  <!-- start slider -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Slider -->


        <div id="main-slider" class="flexslider">

          <ul class="slides">

           


              <?php
              $myquery = new WP_Query(array('post_type' => 'slider'));
              if ($myquery->have_posts()) :
                while ($myquery->have_posts()) : $myquery->the_post();
                
            ?>
             <li>
             <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                <div class="flex-caption">
                    <h3><?php the_title(); ?></h3> 
					<p><?php the_excerpt(); ?></p> 
           <a href="<?php the_permalink()?>" class="btn btn-theme">Learn More</a>
			
                </div>
                <?php
                endwhile;
              endif; ?>
              </li>
             
           
          </ul>
        </div>
        <!-- end slider -->
      </div>
    </div>
  </div>



</section>