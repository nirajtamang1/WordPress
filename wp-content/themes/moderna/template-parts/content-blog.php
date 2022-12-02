
							<div class="col-lg-8">
							<?php if(have_posts()):
							while(have_posts()): the_post( )?>
				<article>
						<div class="post-image">

							<div class="post-heading">
							<h3><a href="<?php the_permalink( );?>"><?php the_title();?></a></h3>
							</div>
							<?php the_post_thumbnail();?>
						</div>
						<p>
							<?php the_content();?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="<?php //get_the_author_link( ); ?>"><?php the_time('F j, Y') ?></a></li>
								<li><i class="icon-user"></i><a href="#"><?php the_author_posts_link( );?></a></li>
								<li><i class="icon-folder-open"></i><a href="#"> <?php the_title();?></a></li>
								<li><i class="icon-comments"></i><a href="<?php comments_link(); ?>" class="comments"><?php comments_number('0 comments', '1 comments', '% responses'); ?></li>
							</ul>
	
							<a href="<?php the_permalink();?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
						
				</article>
				<?php endwhile;?>
				<div id="pagination">
			
				<?php
 
 the_posts_pagination( array(

	'show_all'           => false,
	'prev_next'          => true,
	'prev_text'          => __( 'Page 1 of 3' ),
	'next_text'          => __( 'Next &raquo;' ),
	'end_size'           => 1,
	'mid_size'           => 3,
	'type'               => 'plain',
	'add_args'           => array(), // Array of query args to add.
	'add_fragment'       => '',
	'screen_reader_text' => __( ' ' )

	
) );
 
?>
				</div>
				<?php endif; ?>
			</div>
							
						
				
				