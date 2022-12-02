<div id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="bg_yeloow">
               <div class="titlepage text_align_center">
                  <?php if (get_field('contact_us_title')) : ?>
                     <h2><?php the_field('contact_us_title'); ?></h2>
                  <?php endif; ?>
               </div>
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <?php if (get_field('contact_us_shortcode')) : ?>
                        <?php echo do_shortcode(get_field('contact_us_shortcode')); ?>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>