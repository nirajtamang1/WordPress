<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moderna
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><span><?php echo get_bloginfo('title')[0]; ?></span><?php $number = get_bloginfo('title');
                                                                                                                                    $result = substr($number, 1, strlen($number) - 1);

                                                                                                                                    echo $result;; ?></a>


                    </div>


                    <div class="navbar-collapse collapse">

                        <?php
                        if (has_nav_menu('primary_menu')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu',
                                'menu_class' => 'nav navbar-nav',

                            ));
                        } ?>
                    </div>



                </div>
            </div>


        </header>
        <!-- end header -->