<?php 
/**
 * Template Name: Contact Form
 */
?>

<?php get_header(); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">   
		<iframe src=" <?php echo get_post_meta($post->ID, 'moderna_image', true); ?>">
		</iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4><?php echo get_post_meta($post->ID, 'moderna_heading', true);?></h4>
				<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
                        <?php the_content();?>
							<div class="validation">
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer()?>
