<?php
/**
 * Theme Setup
 *
 * @package Capsule
 */

if ( ! function_exists( 'capsule_register_pattern_categories' ) ) {
	/**
	 * Register custom block pattern categories.
	 *
	 * @return void
	 */
	function capsule_register_pattern_categories() {

		$categories = array(
			'mbfpatterns' => __( 'Capsule', 'capsule' ),
			'mbfpages'    => __( 'Pages', 'capsule' ),
		);

		foreach ( $categories as $slug => $label ) {
			register_block_pattern_category(
				$slug,
				array( 'label' => $label )
			);
		}
	}
}
add_action( 'init', 'capsule_register_pattern_categories' );

if ( ! function_exists( 'mbf_theme_unregister_patterns' ) ) {
	/**
	 * Unregister Jetpack patterns and core patterns bundled in WordPress.
	 *
	 * @return void
	 */
	function mbf_theme_unregister_patterns() {
		$pattern_names = array(
			// Jetpack form patterns.
			'contact-form',
			'newsletter-form',
			'rsvp-form',
			'registration-form',
			'appointment-form',
			'feedback-form',
			// Patterns bundled in WordPress core.
			'core/query-standard-posts',
			'core/query-medium-posts',
			'core/query-small-posts',
			'core/query-grid-posts',
			'core/query-large-title-posts',
			'core/query-offset-posts',
			'core/social-links-shared-background-color',
		);

		foreach ( $pattern_names as $pattern_name ) {
			if ( \WP_Block_Patterns_Registry::get_instance()->get_registered( $pattern_name ) ) {
				unregister_block_pattern( $pattern_name );
			}
		}
	}
}

if ( ! function_exists( 'mbf_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	function mbf_theme_setup() {

		// Enqueue editor styles for block editor.
		add_editor_style( 'style.css' );

		// Remove bundled patterns and Jetpack ones.
		mbf_theme_unregister_patterns();

		add_action(
			'wp_loaded',
			function () {
				// Run again for Atomic sites.
				mbf_theme_unregister_patterns();
			}
		);

		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'mbf_theme_setup' );

if ( ! function_exists( 'capsule_register_block_bindings_source' ) ) {
	/**
 * Registers a custom block bindings source for WooCommerce Product Category Images.
 * This allows the standard 'core/image' block to pull images directly from the category thumbnail.
 */
	function capsule_register_block_bindings_source() {

		// Register the source name and properties
		register_block_bindings_source(
			'mbf/product-category-image',
			array(
				'label'        => __( 'Product Category Image', 'capsule' ),
				'uses_context' => array( 'termId', 'taxonomy' ),

				/**
				 * Callback function to retrieve the actual image URL
				 *
				 * @param array $args Arguments passed to the binding (e.g., meta keys)
				 * @param WP_Block $block The instance of the block being rendered
				 */
				'get_value_callback' => function ( array $args, $block ) {
					// Extract the Term ID and Taxonomy from the block's current loop context
					$term_id  = $block->context['termId'] ?? null;
					$taxonomy = $block->context['taxonomy'] ?? null;

					// Safety Check: Only proceed if we have an ID and we are specifically in a WooCommerce Category
					if ( ! $term_id || 'product_cat' !== $taxonomy ) {
						return null;
					}

					// Retrieve the 'thumbnail_id' which WooCommerce uses for category images
					$thumb_id = get_term_meta( $term_id, 'thumbnail_id', true );

					// Convert the image ID into a full URL.
					$image_url = wp_get_attachment_url( $thumb_id );

					if ( $image_url ) {
						return $image_url;
					}

					return '';
				},
			)
		);
	}
}
add_action( 'init', 'capsule_register_block_bindings_source' );
