<?php
define( 'THEME_FUNCTIONS__FILE__', __FILE__ );
require_once( dirname( __FILE__ ) . '/includes/class-woocommerce.php');

/**
* Enqueue the theme scripts for Gineico Marine
*/
if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	Function bridge_qode_child_theme_enqueue_scripts() {

		wp_enqueue_style( 'bridge-childstyle', get_stylesheet_directory_uri() . '/style.css', '', wp_get_theme()->get('Version'), 'all' );

		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/main.js', '', '1.0', true );
	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}
