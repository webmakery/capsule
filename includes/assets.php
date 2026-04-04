<?php
/**
 * Assets
 *
 * Adds theme assets: editor and frontend enqueues.
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_enqueue_styles' ) ) {
	/**
	 * Enqueue theme stylesheet.
	 *
	 * @return void
	 */
	function mbf_enqueue_styles() {
		wp_register_style(
			'capsule-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 'capsule-style' );
	}
	add_action( 'wp_enqueue_scripts', 'mbf_enqueue_styles' );
}

if ( ! function_exists( 'mbf_get_asset_meta' ) ) {
	/**
	 * Read a WP Scripts asset file and return dependencies/version.
	 */
	function mbf_get_asset_meta( string $relative ): array {
		// Whitelist of allowed asset files to prevent arbitrary file inclusion.
		$allowed_files = array(
			'build/editor.asset.php',
			'build/frontend.asset.php',
		);

		// Only allow whitelisted paths.
		if ( ! in_array( $relative, $allowed_files, true ) ) {
			return array(
				'dependencies' => array(),
				'version'      => '1.0.0',
			);
		}

		$absolute = get_theme_file_path( $relative );

		if ( ! file_exists( $absolute ) ) {
			return array(
				'dependencies' => array(),
				'version'      => '1.0.0',
			);
		}

		// nosemgrep: php.lang.security.file.inclusion-arg
		$meta = include $absolute;

		$version = $meta['version'] ?? filemtime(
			get_theme_file_path( str_replace( '.asset.php', '.js', $relative ) )
		);

		return array(
			'dependencies' => $meta['dependencies'] ?? array(),
			'version'      => (string) $version,
		);
	}
}

if ( ! function_exists( 'mbf_enqueue_block_editor_assets' ) ) {
	/**
	 * Block editor assets (JS/CSS) used inside Gutenberg only.
	 */
	function mbf_enqueue_block_editor_assets() {
		$asset = mbf_get_asset_meta( 'build/editor.asset.php' );

		wp_register_script(
			'mbf-editor',
			get_theme_file_uri( 'build/editor.js' ),
			$asset['dependencies'],
			$asset['version'],
			true
		);

		wp_enqueue_script( 'mbf-editor' );

		// Add main stylesheet inside the editor for visual parity.
		add_editor_style( 'style.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'mbf_enqueue_block_editor_assets' );
}

if ( ! function_exists( 'mbf_enqueue_frontend_assets' ) ) {
	/**
	 * Frontend assets (public site).
	 */
	function mbf_enqueue_frontend_assets() {
		if ( is_admin() ) {
			return;
		}

		// Swiper CSS (the JS is lazy-loaded by our bundle on demand).
		wp_enqueue_style(
			'mbf-swiper-style',
			get_theme_file_uri( '/assets/vendor/swiper-bundle.min.css' ),
			array(),
			'11.0.5'
		);

		$asset = mbf_get_asset_meta( 'build/frontend.asset.php' );

		wp_register_script(
			'mbf-frontend',
			get_theme_file_uri( 'build/frontend.js' ),
			$asset['dependencies'],
			$asset['version'],
			true
		);

		wp_localize_script(
			'mbf-frontend',
			'frontendSettings',
			array(
				'swiperUrl'     => get_theme_file_uri( '/assets/vendor/swiper-bundle.min.js' ),
				'addReviewText' => esc_html__( 'Add Your Review', 'capsule' ),
				'CartText' => esc_html__( 'Cart', 'capsule' ),
			)
		);

		wp_enqueue_script( 'mbf-frontend' );
	}
	add_action( 'wp_enqueue_scripts', 'mbf_enqueue_frontend_assets' );
}
