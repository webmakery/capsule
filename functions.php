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
			add_filter( 'theme_page_templates', array( $this, 'register_page_templates' ) );
			add_filter( 'template_include', array( $this, 'load_page_template' ) );
		}

		/**
		 * Register custom page templates so they appear in Page Attributes.
		 *
		 * @param array<string, string> $page_templates Existing templates.
		 * @return array<string, string>
		 */
		public function register_page_templates( $page_templates ) {
			$page_templates['page-facebook-ads-course.php'] = __( 'Facebook Ads Course', 'capsule' );

			return $page_templates;
		}

		/**
		 * Load the selected custom page template file.
		 *
		 * @param string $template Default resolved template path.
		 * @return string
		 */
		public function load_page_template( $template ) {
			if ( ! is_page() ) {
				return $template;
			}

			$page_id       = get_queried_object_id();
			$template_slug = get_page_template_slug( $page_id );

			if ( 'page-facebook-ads-course.php' !== $template_slug ) {
				return $template;
			}

			$custom_template = get_theme_file_path( 'page-facebook-ads-course.php' );

			if ( file_exists( $custom_template ) ) {
				return $custom_template;
			}

			return $template;
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
