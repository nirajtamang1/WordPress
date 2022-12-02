<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package corlate
 */

get_header();
?>



    <section id="error" class="container text-center">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist or an other error occurred.</p>
        <a class="btn btn-primary" href="<?php bloginfo('url');?>">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->

   
<?php
get_footer();
