<div id="about" class="about">
   <div class="bg_about">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <div class="about_img">
                  <?php if (get_field('about_factory_image')) : ?>
                     <figure><img src="<?php echo get_field('about_factory_image')['url']; ?>" alt="<?php echo get_field('about_factory_image')['alt']; ?>" /></figure>
                  <?php endif; ?>
               </div>
            </div>
            <div class="col-md-6 offset-md-1">
               <div class="titlepage text_align_right">
                  <?php if (get_field('home_about_factory_title')) : ?>
                     <h2><?php the_field('home_about_factory_title'); ?></h2>
                  <?php endif; ?>
                  <?php if (get_field('home_about_factory_content')) : ?>
                     <p><?php the_field('home_about_factory_content'); ?></p>
                  <?php endif; ?>
                  <?php if (get_field('about_us_button')) : ?>
                     <a class="read_more" href="<?php echo get_field('about_us_button')['url'] ?>"><?php echo get_field('about_us_button')['title']; ?></a>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>