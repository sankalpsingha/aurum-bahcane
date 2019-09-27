<?php
/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

// This function will enqueue style.css of child theme, feel free to add yours
function aurum_enqueue_child_theme_scripts() {
	// if(is_front_page()) {
	// 	wp_enqueue_style( 'aurum-child', get_stylesheet_directory_uri() . '/assets/css/coolstyle.css' );
	// }
}

// Includes

include( get_theme_file_path('/includes/enqueue.php') );

add_action( 'wp_enqueue_scripts', 'aurum_enqueue_child_theme_scripts', 100 );


// filters
add_filter('wp_enqueue_scripts', 'bahcane_enqueue');


function action_woocommerce_register_form_end() {
	echo do_shortcode('[nextend_social_login]');
}

add_action('woocommerce_register_form_end', 'action_woocommerce_register_form_end');
add_action('woocommerce_login_form_end', 'action_woocommerce_register_form_end');
add_action('woocommerce_before_checkout_billing_form', 'action_woocommerce_register_form_end');
add_action('woocommerce_edit_account_form_start', 'action_woocommerce_register_form_end');

