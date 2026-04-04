<?php
/**
 * WooCommerce Misc Customizations
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_custom_woocommerce_greeting' ) ) {
	/**
	 * Overrides the default WooCommerce greeting message
	 * on the frontend, so it uses a slightly different format with proper links
	 * and HTML escaping.
	 *
	 * @param string $translated   The translated string.
	 * @param string $untranslated The original string.
	 * @param string $domain       Text domain.
	 * @return string Modified greeting string.
	 */
	function mbf_custom_woocommerce_greeting( $translated, $untranslated, $domain ) {
		if ( 'woocommerce' === $domain && 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)' === $untranslated ) {
			$current_user = wp_get_current_user();
			return sprintf(
				'Hello %1$s <a href="%2$s">not %1$s? Log out</a>',
				esc_html( $current_user->display_name ),
				esc_url( wp_logout_url() )
			);
		}
		return $translated;
	}
}
add_filter( 'gettext', 'mbf_custom_woocommerce_greeting', 9999, 3 );


if ( ! function_exists( 'mbf_remove_woocommerce_upsells' ) ) {
	/**
	 * Remove WooCommerce upsell products from the single product page.
	 *
	 * @return void
	 */
	function mbf_remove_woocommerce_upsells() {
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	}
}
add_action( 'init', 'mbf_remove_woocommerce_upsells' );


if ( ! function_exists( 'mbf_override_products_per_page' ) ) {
	/**
	 * Override WooCommerce products per page based on saved Product Collection setting.
	 *
	 * @return void
	 */
	function mbf_override_products_per_page() {
	$default_per_page = 12;

	$mbf_per_page = (int) get_option( 'mbf_product_collection_per_page', $default_per_page );

	add_filter(
		'loop_shop_per_page',
		function () use ( $mbf_per_page ) {
			return $mbf_per_page;
		},
		999
	);
	}
}
add_action( 'init', 'mbf_override_products_per_page' );


if ( ! function_exists( 'mbf_register_product_collection_routes' ) ) {
	/**
	 * Registers custom REST API routes for Product Collection settings.
	 *
	 * POST: Save products per page.
	 * DELETE: Reset products per page setting.
	 *
	 * @return void
	 */
	function mbf_register_product_collection_routes() {

		// POST route to set products per page.
		register_rest_route(
			'mbf/v1',
			'/product-collection',
			array(
				'methods'             => 'POST',
				'callback'            => function ( $request ) {
					$per_page = (int) $request->get_param( 'perPage' );

					if ( $per_page > 0 ) {
						update_option( 'mbf_product_collection_per_page', $per_page );
						return array(
							'success' => true,
							'perPage' => $per_page,
						);
					}

					return new WP_Error( 'invalid', 'Invalid perPage value', array( 'status' => 400 ) );
				},
				'permission_callback' => function () {
					return current_user_can( 'edit_posts' ); // Adjust capability if needed.
				},
			)
		);

		// DELETE route to reset products per page.
		register_rest_route(
			'mbf/v1',
			'/product-collection',
			array(
				'methods'             => 'DELETE',
				'callback'            => function () {
					delete_option( 'mbf_product_collection_per_page' );
					return array( 'success' => true );
				},
				'permission_callback' => function () {
					return current_user_can( 'edit_posts' );
				},
			)
		);
	}
}
add_action( 'rest_api_init', 'mbf_register_product_collection_routes' );
