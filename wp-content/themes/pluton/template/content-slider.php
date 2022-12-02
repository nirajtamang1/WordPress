<!-- Start home section -->
<div id="home">
  <!-- Start cSlider -->
  <div id="da-slider" class="da-slider">
    <div class="triangle"></div>
    <!-- mask elemet use for masking background image -->
    <div class="mask"></div>
    <!-- All slides centred in container element -->
    <div class="container">
      <!-- Start first slide -->
      <?php
      $args = array(
        'post_type' => 'slider',

      );
      $the_query = new WP_Query($args); ?>
      <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="da-slide">
            <h2><?php the_title(); ?></h2>
            <h4><?php echo get_post_meta($post->ID, 'pluton-slider', true); ?></h4>
            <p><?php the_content(); ?></p>
            <button type="button" class="da-link button" data-toggle="modal" data-target="#exampleModalCenter-<?php the_ID(); ?>">
              Read more
            </button>

            <div class="da-img">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail(array(320, 285)); ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
      <!-- End first slide -->

      <!-- Start cSlide navigation arrows -->
      <div class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
      </div>
      <!-- End cSlide navigation arrows -->
    </div>
  </div>
</div>
<!-- End home section -->

<?php
$args = array(
  'post_type' => 'slider',

);
$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) :
  while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class="modal fade" id="exampleModalCenter-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLongTitle" style="color:black;"><?php the_title(); ?></h2>
            <h4 class="modal-title" id="exampleModalLongTitleshort" style="color:black;"><?php echo get_post_meta($post->ID, 'pluton-slider', true); ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-dark">
            <?php the_post_thumbnail(array(150, 150)); ?>
            <?php the_content(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

<?php endwhile;
  wp_reset_postdata();
endif; ?>