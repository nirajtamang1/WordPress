<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metal-theme
 */

?>



<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?php echo get_bloginfo( 'name' ); ?></title>
   
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  <?php wp_head(); ?>
     <style>
      .full_bg {
     background: url('<?php echo get_field('background_image')['url'];?>');
     background-size: 100% 100%;
     background-position: center;
     background-repeat: no-repeat;
}
      

</style>
	</head>
   <!-- body -->
<body  class="main-layout" <?php body_class(); ?>>
<?php wp_body_open(); ?>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo get_field('loader_image')['url'];?>" alt="<?php echo get_field('loader_image')['alt'];?>"/></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
						)
					);
					?>
      </div>
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="#"></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 col-sm-9">
                     <ul class="site_menu text_align_right">
                        <li >
                           <button class="openbtn" onclick="openNav()"><img src="<?php echo get_template_directory_uri( );?>/images/menu_icon.png"></button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
		 <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'metal-theme' ); ?></button>
		</nav><!-- #site-navigation -->
      <?php get_template_part('template/content', 'slider'); ?>
</header>