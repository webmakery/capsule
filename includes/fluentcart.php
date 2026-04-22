<?php
/**
 * FluentCart compatibility helpers
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'mbf_is_fluentcart_single_product' ) ) {
	/**
	 * Check if current request is a FluentCart single product.
	 *
	 * @return bool
	 */
	function mbf_is_fluentcart_single_product() {
		return is_singular( 'fluent-products' );
	}
}

if ( ! function_exists( 'mbf_fluentcart_product_body_classes' ) ) {
	/**
	 * Add WooCommerce-like body classes on FluentCart product pages.
	 *
	 * Reusing these classes allows existing single-product styles to be shared
	 * between WooCommerce and FluentCart templates.
	 *
	 * @param array $classes Existing body classes.
	 * @return array
	 */
	function mbf_fluentcart_product_body_classes( $classes ) {
		if ( ! mbf_is_fluentcart_single_product() ) {
			return $classes;
		}

		$classes[] = 'woocommerce';
		$classes[] = 'woocommerce-page';
		$classes[] = 'single-product';
		$classes[] = 'mbf-single-product-context';

		return array_unique( $classes );
	}
}
add_filter( 'body_class', 'mbf_fluentcart_product_body_classes' );
