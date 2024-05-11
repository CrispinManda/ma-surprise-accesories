<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">
  
  <a class="skip-link visually-hidden-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'bootscore' ); ?></a>

  <!-- Top Bar Widget -->
  <?php if (is_active_sidebar('top-bar')) : ?>
    <?php dynamic_sidebar('top-bar'); ?>
  <?php endif; ?>  


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <small>Location Nyeri Downtown</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small>info@masurprise.co.ke</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small>+254 725 552 643</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small>Mon - Fri : 9AM - 9PM</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

  <header id="masthead" class="<?= apply_filters('bootscore/class/header', 'sticky-top bg-body-tertiary'); ?> site-header">

    <nav id="nav-main" class="navbar <?= apply_filters('bootscore/class/header/navbar/breakpoint', 'navbar-expand-lg'); ?>">

      <div class="<?= apply_filters('bootscore/class/container', 'container', 'header'); ?>">
        
        <!-- Navbar Brand -->
        <a class="navbar-brand" href="<?= esc_url(home_url()); ?>">
          <img src="<?= esc_url(apply_filters('bootscore/logo', get_stylesheet_directory_uri() . '/img/remove.png', 'default')); ?>" alt="<?php bloginfo('name'); ?> Logo" class="d-td-none me-2" width="300" height="500">
          <img src="<?= esc_url(apply_filters('bootscore/logo', get_stylesheet_directory_uri() . '/assets/img/logo/logo-theme-dark.svg', 'theme-dark')); ?>" alt="<?php bloginfo('name'); ?> Logo" class="d-tl-none me-2">
        </a>  

        <!-- Navbar Toggler -->
        <button class="<?= apply_filters('bootscore/class/header/button', 'btn btn-outline-secondary', 'nav-toggler'); ?> <?= apply_filters('bootscore/class/header/navbar/toggler/breakpoint', 'd-lg-none'); ?> ms-1 ms-md-2 nav-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
          <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/'); ?>">Home </a>
            </li> 
              <a class="nav-link" href="<?php echo site_url('/sales/'); ?>">Sales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/cctv'); ?>">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/contact-us/'); ?>">Contact Us</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?php //echo site_url('/computer/'); ?>">Computer </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php //echo site_url('/laptops/'); ?>">Laptops </a>
            </li> -->
          </ul>
        </div>

        <!-- Offcanvas Navbar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
          <div class="offcanvas-header">
            <span class="h5 offcanvas-title"><?= apply_filters('bootscore/offcanvas/navbar/title', __('Menu', 'bootscore')); ?></span>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">

            <!-- Bootstrap 5 Nav Walker Main Menu -->
            <?php get_template_part('template-parts/header/main-menu'); ?>

            <!-- Top Nav 2 Widget -->
            <?php if (is_active_sidebar('top-nav-2')) : ?>
              <?php dynamic_sidebar('top-nav-2'); ?>
            <?php endif; ?>

          </div>
        </div>

        <div class="header-actions d-flex align-items-center">

          <!-- Top Nav Widget -->
          <?php if (is_active_sidebar('top-nav')) : ?>
            <?php dynamic_sidebar('top-nav'); ?>
          <?php endif; ?>

          <?php
          if (class_exists('WooCommerce')) :
            get_template_part('template-parts/header/actions', 'woocommerce');
          else :
            get_template_part('template-parts/header/actions');
          endif;
          ?>

          <!-- Navbar Toggler -->
          <button class="<?= apply_filters('bootscore/class/header/button', 'btn btn-outline-secondary', 'nav-toggler'); ?> <?= apply_filters('bootscore/class/header/navbar/toggler/breakpoint', 'd-lg-none'); ?> ms-1 ms-md-2 nav-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
            <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
          </button>

        </div><!-- .header-actions -->

      </div><!-- .container -->

    </nav><!-- .navbar -->

    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/collapse-search', 'woocommerce');
    else :
      get_template_part('template-parts/header/collapse-search');
    endif;
    ?>

    <!-- Offcanvas User and Cart -->
    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/offcanvas', 'woocommerce');
    endif;
    ?>

  </header><!-- #masthead -->
