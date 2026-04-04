<?php
/**
 * WooCommerce integration loader
 *
 * @package Capsule
 */

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

/**
 * Main WooCommerce Loader
 * Loads modular WooCommerce files.
 */
if ( ! function_exists( 'mbf_load_woocommerce_files' ) ) {
	function mbf_load_woocommerce_files() {
		$files = array(
			'account.php',
			'forms.php',
			'breadcrumbs.php',
			'misc.php',
		);

		foreach ( $files as $file ) {
			$path = get_theme_file_path( 'includes/woocommerce/' . $file );
			if ( file_exists( $path ) ) {
				require_once $path;
			}
		}
	}
}
add_action( 'after_setup_theme', 'mbf_load_woocommerce_files', 15 );
