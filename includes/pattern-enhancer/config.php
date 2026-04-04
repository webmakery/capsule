<?php
/**
 * Pattern Enhancer Configuration Loader
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_register_pattern_enhancer_defaults' ) ) {
	/**
	 * Register defaults for the Pattern Enhancer via a filter.
	 *
	 * Other modules or child-themes can merge/override using the same filter.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mbf_register_pattern_enhancer_defaults() {
		add_filter(
			'mbf_pattern_enhancer_config',
			/**
			 * Provide default config for Pattern Enhancer.
			 *
			 * @param array $config Incoming config (to be merged/overwritten).
			 * @return array
			 */
			function ( array $config ): array {

				$base_dir = get_theme_file_path( 'includes/pattern-enhancer/' );

				$sections = array(
					// Layout.
					'header',
					'breadcrumbs',
					'footer',

					// Pages & Page Parts.
					'pages',
					'page-parts',

					// Archives.
					'archive-posts',

					// Single Post.
					'single-post',

					// Sections.
					'sections',
					'section-banners',
					'section-sliders',
					'section-helper',

					// WooCommerce.
					'archive-products',
					'single-product',
				);

				$defaults = array();

				foreach ( $sections as $section ) {
					$file = $base_dir . $section . '.php';

					if ( ! file_exists( $file ) ) {
						continue;
					}

					$section_data = include $file;

					if ( ! is_array( $section_data ) ) {
						continue;
					}

					$defaults = array_merge( $defaults, $section_data );
				}

				// Merge incoming config (if any) over defaults.
				return array_replace_recursive( $defaults, $config );
			},
			10,
			1
		);
	}
}

// Bootstrap configs.
mbf_register_pattern_enhancer_defaults();
