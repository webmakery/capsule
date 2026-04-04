<?php
/**
 * Capsule functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Capsule
 */

if ( ! class_exists( 'Capsule' ) ) {

	/**
	 * Main Theme Class
	 */
	class Capsule {

		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->init();
			$this->theme_files();
		}

		/**
		 * Initialize hooks.
		 *
		 * @return void
		 */
		public function init() {
			add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
		}

		/**
		 * Theme setup — add theme supports, load translations, etc.
		 *
		 * @return void
		 */
		public function theme_setup() {

			// Make theme available for translation.
			load_theme_textdomain( 'capsule', get_template_directory() . '/languages' );

			// Add default posts and comments RSS feed links to head.
			add_theme_support( 'automatic-feed-links' );

			// Let WordPress manage the document title.
			add_theme_support( 'title-tag' );

			// Add featured image support.
			add_theme_support( 'post-thumbnails' );

			// Enable various block supports.
			add_theme_support( 'wp-block-styles' );
			add_theme_support( 'align-wide' );
			add_theme_support( 'custom-line-height' );
			add_theme_support( 'custom-spacing' );
			add_theme_support( 'custom-units' );
			add_theme_support( 'appearance-tools' );
			add_theme_support( 'border' );
			add_theme_support( 'link-color' );
			add_theme_support( 'responsive-embeds' );

			// HTML5 markup support.
			add_theme_support(
				'html5',
				array(
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
				)
			);
		}

		/**
		 * Include additional theme files.
		 *
		 * @return void
		 */
		public function theme_files() {
			$files = array(
				'core/theme-demos/class-theme-demos.php',
				'includes/deprecated.php',
				'includes/theme-setup.php',
				'includes/theme-demos.php',
				'includes/assets.php',
				'includes/theme-functions.php',
				'includes/pattern-enhancer/config.php',
				'includes/pattern-enhancer/controls.php',
				'includes/pattern-enhancer.php',
				'includes/cover-link.php',
				'includes/woocommerce.php',
				'includes/mega-menu.php',
			);

			foreach ( $files as $file ) {
				$path = get_theme_file_path( $file );
				if ( file_exists( $path ) ) {
					require_once $path;
				}
			}
		}
	}

	// Initialize theme.
	new Capsule();
}
