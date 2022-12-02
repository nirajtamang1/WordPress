<aside class="col-md-4">
    <div class="widget search">
        <form role="search" method="get" action="<?php bloginfo('url'); ?>">
            <input type="search" class="form-control search_box" autocomplete="off" placeholder="Search Here" value name="s">
        </form>
    </div>
    <!--/.search-->
    <?php get_template_part('template/content', 'comment'); ?>
    <?php dynamic_sidebar('archieve-1'); ?>
    <?php dynamic_sidebar('tags-1'); ?>
    <?php dynamic_sidebar('gallery-1'); ?>
</aside>