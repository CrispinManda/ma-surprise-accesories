<?php
/*
Plugin Name: contact-us form
Description: Handles CCTV quotation form submission and stores data in the database.
Version: 1.0
Author: Crispin Manda
*/

defined('ABSPATH') or die('gerara here!');

class cctvQuotation {
    private $table_name;

    function __construct() {
        global $wpdb;
        $this->table_name = $wpdb->prefix . 'cctvQuotation'; // Define table name here

        add_action('init', array($this, 'handle_form_submission'));
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
    }

    function activate() {
        $this->create_table_to_db();
        flush_rewrite_rules();
    }

    function deactivate() {
        flush_rewrite_rules();
    }

    function create_table_to_db() {
        global $wpdb;

        $Quotation_details = "CREATE TABLE IF NOT EXISTS {$this->table_name} (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `customer_name` varchar(255) NOT NULL,
            `customer_email` varchar(255) NOT NULL,
            `customer_phone` varchar(20) NOT NULL,
            `installation_location` text NOT NULL,
            `additional_details` text,
            `submission_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($Quotation_details);
    }

    function handle_form_submission() {
        if (isset($_POST['submit_cctv_quotation'])) {
            global $wpdb;

            // Retrieve form data
            $customer_name = sanitize_text_field($_POST['customer-name']);
            $customer_email = sanitize_email($_POST['customer-email']);
            $customer_phone = sanitize_text_field($_POST['customer-phone']);
            $installation_location = sanitize_textarea_field($_POST['installation-location']);
            $additional_details = sanitize_textarea_field($_POST['additional-details']);

            // Insert data into the database
            $result = $wpdb->insert(
                $this->table_name,
                array(
                    'customer_name' => $customer_name,
                    'customer_email' => $customer_email,
                    'customer_phone' => $customer_phone,
                    'installation_location' => $installation_location,
                    'additional_details' => $additional_details
                ),
                array('%s', '%s', '%s', '%s', '%s')
            );

            // Check the result of the insertion and display alert message
            if ($result === false) {
                // Log the error
                error_log('Failed to insert data into the database. Error: ' . $wpdb->last_error);
                // Display alert message
                echo "<script>alert('Failed to submit CCTV quotation, please try again');</script>";
            } else {
                // Display success message
                echo "<script>alert('CCTV quotation submitted successfully');</script>";
                // Redirect to a page after successful submission
                echo "<script>window.location.href = '" . esc_url(home_url('/success-page/')) . "';</script>";
            }
        }
    }
}

if (class_exists('cctvQuotation')) {
    $cctvQuotationInstance = new cctvQuotation();
}
