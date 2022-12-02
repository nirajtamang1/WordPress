<div class="widget categories">
    <h3>Recent Comments</h3>
    <div class="row">
        <div class="col-sm-12">
            <?php
            $comments = get_comments(array("number" => 3));
            foreach ($comments as $comment) :
            ?>
                <div class="single_comments">
                    <?php echo get_avatar(get_the_author_ID(), 55); ?>
                    <p><?php echo $comment->comment_content; ?>
                    </p>
                    <div class="entry-meta small muted">
                        <span>By <a href="<?php the_permalink(); ?>"><?php echo $comment->comment_author; ?></a></span <span>On <a href="<?php comments_link(); ?>"><?php echo get_the_title($comment->comment_post_ID); ?></a></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/.recent comments-->

<div class="widget categories">
    <h3>Categories</h3>
    <div class="row">
        <div class="col-sm-6">
            <ul class="blog_category">
                <?php
                $args = array(
                    'get' => 'all',
                    'hide_empty' => 0
                );
                $categories = get_categories($args);
                foreach ($categories as $category) : ?>
                    <li><a href="<?php echo  get_category_link($category->term_id) ?>"><?php echo $category->name ?> <span class="badge"><?php echo $category->count; ?></span></a></li>
                <?php
                endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!--/.categories-->