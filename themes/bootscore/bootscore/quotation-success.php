<?php
/**
 * Template Name: Quotation Success Template
 *
 * This is the template for displaying success message after submitting a quotation.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourChildThemeName
 */
 get_header(); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success justify-center text-center" role="alert">
                <h2>Thank You!</h2>
                <iframe src="https://giphy.com/embed/tf9jjMcO77YzV4YPwE" width="280" height="280" frameborder="0" class="giphy-embed" allowfullscreen></iframe>
                <p>Your quotation has been successfully submitted. We'll get back to you shortly.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
        
    </div>

    
</div>

<?php get_footer(); ?>
