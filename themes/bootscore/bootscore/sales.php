<?php
/**
 * Template Name:sales
 * This is the template for displaying all the site products.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourChildThemeName
 */
 get_header(); ?>

 <div class="container mt-5">
    <?php
    echo do_shortcode('[products]');
?>
 </div>



<?php get_footer(); ?>
