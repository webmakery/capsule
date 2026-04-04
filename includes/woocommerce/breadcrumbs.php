<?php
/**
 * WooCommerce Breadcrumb Customizations
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_change_breadcrumb_delimiter' ) ) {
	/**
	 * Change WooCommerce breadcrumb delimiter.
	 *
	 * @param array $defaults Breadcrumb defaults.
	 * @return array
	 */
	function mbf_change_breadcrumb_delimiter( $defaults ) {
		$defaults['delimiter'] = '<span class="mbf-breadcrumb-separator"></span>';
		return $defaults;
	}
}
add_filter( 'woocommerce_breadcrumb_defaults', 'mbf_change_breadcrumb_delimiter', 20 );

if ( ! function_exists( 'mbf_customize_woocommerce_breadcrumbs_block' ) ) {
	/**
	 * Customize the WooCommerce breadcrumbs block output.
	 *
	 * @param string $block_content The block content.
	 * @param array  $block Block data.
	 * @return string
	 */
	function mbf_customize_woocommerce_breadcrumbs_block( $block_content, $block ) {
		if ( isset( $block['blockName'] ) && 'woocommerce/breadcrumbs' === $block['blockName'] ) {

			// Add custom class to wrapper.
			$block_content = preg_replace(
				'/class="([^"]*)"/',
				'class="$1 wp-block-woocommerce-breadcrumbs"',
				$block_content,
				1
			);

			// Remove default 'woocommerce' class to avoid duplicate styling.
			$block_content = preg_replace(
				'/\bwoocommerce\b\s*/',
				'',
				$block_content,
				2
			);

			// Remove font-size classes like 'has-large-font-size'.
			$block_content = preg_replace( '/\s*has-[^\s"]*font-size/', '', $block_content );
		}

		return $block_content;
	}
}
add_filter( 'render_block', 'mbf_customize_woocommerce_breadcrumbs_block', 10, 2 );
