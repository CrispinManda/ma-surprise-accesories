<?php
/**
 * Template Name: Contact Us
 *
 * This is the template for displaying sContact Us page.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourChildThemeName
 */
 get_header(); ?>    
    
    
    
    <!-- Contact Start -->
    <div class="container-fluid mt-3 bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="33f7f1a" title="Masurprise contact form"]'); ?>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d797.1721758633378!2d36.95801!3d-0.437099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18285f19263f72d5%3A0x8aad506f83e89286!2sMasurprise%20Netcom%20Solution!5e0!3m2!1sen!2ske!4v1620663257770!5m2!1sen!2ske"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php get_footer(); ?>