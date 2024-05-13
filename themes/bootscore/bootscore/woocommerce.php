<?php
/**
 * The template for displaying all WooCommerce pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>



<!-- <style>
  #carouselExampleSlidesOnly{
    margin-top: 100px;
  }
</style> -->

<style>
  .carousel-text{
    font-size:30px;
  }
</style>

<div class="container mt-5">
<form class="searchform input-group" method="get" action="<?= esc_url(home_url('/')); ?>">
  <input type="text" name="s" class="form-control" placeholder="<?php _e('Search', 'bootscore'); ?>">
  <button type="submit" class="input-group-text btn btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
</form>
</div>


<div id="content" class="site-content  <?= apply_filters('bootscore/class/container', 'container', 'woocommerce'); ?> <?= apply_filters('bootscore/class/content/spacer', 'pt-3 pb-5', 'woocommerce'); ?>">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

<div id="carouselExampleSlidesOnly" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-content">
        <img src="https://lh3.googleusercontent.com/p/AF1QipOfXGCUfrYinbzAWEbHPsbo2O6UJl17zeZO0_DH=s1360-w1360-h1020" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <p class="carousel-text">Customer Satisfaction is Our Priority.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-content">
        <img src="https://lh3.googleusercontent.com/p/AF1QipP6QH8UkE_rzOb8ymsLdZxNxrvP4lA5u1fn2iiS=s1360-w1360-h1020" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <div class="carousel-content">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/carousel-3.jpg" alt="">
        <div class="carousel-caption">
          <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div> -->
        <div class="carousel-item">
      <div class="carousel-content">
        <img class="img-fluid" src="https://lh3.googleusercontent.com/p/AF1QipN4WT1giiMwt1jJDOJFLaWuAXKRJelx5MULiKOs=s1360-w1360-h1020" alt="">
        <div class="carousel-caption">
          <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <!-- Add more carousel items as needed -->
  </div>
</div>

      <?php woocommerce_breadcrumb(); ?>
      <div class="row">
        <div class="mt-5">
          <div class="mt-2">
            <h3 class='text-center'>Products Categories</h3>
          </div>
           <?php echo do_shortcode('[product_categories]'); ?>
        </div>
        <!-- class="<? //apply_filters('bootscore/class/main/col', 'col'); ?>" -->
        <div >
          <?php woocommerce_content(); ?>
        </div>
      </div><!-- row -->
    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
