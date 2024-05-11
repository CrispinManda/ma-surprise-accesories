<?php

/**
 * Bootscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootscore
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Load required files
 */
require_once('inc/theme-setup.php');             // Theme setup and custom theme supports
require_once('inc/breadcrumb.php');              // Breadcrumb
require_once('inc/columns.php');                 // Main/sidebar column width and breakpoints
require_once('inc/comments.php');                // Comments
require_once('inc/enable-html.php');             // Enable HTML in category and author description
require_once('inc/enqueue.php');                 // Enqueue scripts and styles
require_once('inc/excerpt.php');                 // Adds excerpt to pages
require_once('inc/fontawesome.php');             // Adds shortcode for inserting Font Awesome icons
require_once('inc/hooks.php');                   // Custom hooks
require_once('inc/navwalker.php');               // Register the Bootstrap 5 navwalker
require_once('inc/navmenu.php');                 // Register the nav menus
require_once('inc/pagination.php');              // Pagination for loop and single posts
require_once('inc/password-protected-form.php'); // Form if post or page is protected by password
require_once('inc/template-tags.php');           // Meta information like author, date, comments, category and tags badges
require_once('inc/template-functions.php');      // Functions which enhance the theme by hooking into WordPress
require_once('inc/widgets.php');                 // Register widget area and disables Gutenberg in widgets
require_once('inc/deprecated.php');              // Fallback functions being dropped in v6

// Blocks
require_once('inc/blocks/block-widget-archives.php');        // Archive block
require_once('inc/blocks/block-widget-calendar.php');        // Calendar block
require_once('inc/blocks/block-widget-categories.php');      // Categories block
require_once('inc/blocks/block-widget-latest-comments.php'); // Latest posts block
require_once('inc/blocks/block-widget-latest-posts.php');    // Latest posts block
require_once('inc/blocks/block-widget-search.php');          // Searchform block


function enqueue_custom_styles() {
    // Google Web Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');

    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');

    // Animate CSS
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css');

    // Owl Carousel
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');

    // Lightbox
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css');

    // Bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Custom Stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');




function enqueue_custom_scripts() {
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);

    // Bootstrap
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), null, true);

    // Easing
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), null, true);

    // Waypoints
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), null, true);

    // Counterup
    wp_enqueue_script('counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), null, true);

    // Owl Carousel
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), null, true);

    // Isotope
    wp_enqueue_script('isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), null, true);

    // Lightbox
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), null, true);

    // Main Script
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');






/**
 * Load WooCommerce scripts if plugin is activated
 */
if (class_exists('WooCommerce')) {
  require get_template_directory() . '/woocommerce/wc-functions.php';
}


/**
 * Load Jetpack compatibility file
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}


// ----------------------------------------------------------------

///////////////////////////////////////////////////////////////////////
// Custom User logo
///////////////////////////////////////////////////////////////////////

function custom_login_logo() {
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php echo esc_url(get_template_directory_uri());?>/img/remove.png') !important;
            padding-bottom: 30px; /* Adjust the height of the logo */
            background-size: contain;
            width: 100%;
            height: 100px; /* Adjust the height of the logo */
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');