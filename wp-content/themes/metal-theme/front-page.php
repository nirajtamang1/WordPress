<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metal-theme
 */
?>
<?php get_header(); ?>
<!-- end header -->

<!-- end banner -->
<!-- about -->
<?php get_template_part('template/content', 'aboutfactory'); ?>
<!-- end about -->
<!-- products -->
<?php get_template_part('template/content', 'productslider'); ?>
<!-- end products -->
<!--  contact -->
<?php get_template_part('template/content', 'contactform'); ?>

<!-- end contact -->
<!--  footer -->
<?php get_footer(); ?>