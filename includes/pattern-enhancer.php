<?php
/**
 * Pattern Enhancer
 *
 * Adds per-pattern runtime classes and exposes per-pattern custom settings
 * without polluting block attributes. The class is injected at render-time,
 * and settings are made available to JS via data-* attributes on the root block.
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_get_pattern_enhancer_config' ) ) {
	/**
	 * Get the Pattern Enhancer configuration via filter.
	 *
	 * The defaults are provided in includes/pattern-enhancer/config.php and can be
	 * further overridden by 3rd-party code using the same filter.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	function mbf_get_pattern_enhancer_config() {
		/**
		 * Filters the Pattern Enhancer configuration map.
		 *
		 * Allows 3rd-parties to amend or replace the configuration that maps
		 * pattern slugs to their enhancer options.
		 *
		 * @since 1.0.0
		 *
		 * @param array $config Pattern configuration.
		 */
		return (array) apply_filters( 'mbf_pattern_enhancer_config', array() );
	}
}

if ( ! function_exists( 'mbf_pattern_settings_to_attrs' ) ) {
	/**
	 * Convert settings array to HTML attributes: data-mbf-<key>="<value>".
	 *
	 * @param array<string, scalar> $settings Settings map.
	 * @return string Attributes string with preceding space or empty string.
	 */
	function mbf_pattern_settings_to_attrs( $settings ) {
		if ( empty( $settings ) ) {
			return '';
		}

		$out = '';

		foreach ( $settings as $key => $value ) {
			$attr_key   = 'data-mbf-' . sanitize_key( (string) $key );
			$attr_value = esc_attr( (string) $value );
			$out       .= sprintf( ' %s="%s"', $attr_key, $attr_value );
		}

		return $out;
	}
}

if ( ! function_exists( 'mbf_normalize_settings' ) ) {
	/**
	 * Normalize settings values to strings.
	 *
	 * @param array<string, mixed> $settings Settings.
	 * @return array<string, string> Normalized settings.
	 */
	function mbf_normalize_settings( $settings ) {
		$out = array();
		foreach ( $settings as $k => $v ) {
			if ( is_bool( $v ) ) {
				$out[ (string) $k ] = $v ? 'true' : 'false';
			} else {
				$out[ (string) $k ] = (string) $v;
			}
		}
		return $out;
	}
}

if ( ! function_exists( 'mbf_pattern_enhancer_render_filter' ) ) {
	/**
	 * Inject class and settings for configured patterns on render.
	 *
	 * - Does not mutate block attributes; only the rendered HTML is altered.
	 * - Works for both frontend and editor preview.
	 * - Adds class to first class="…" occurrence and appends data-* attributes.
	 *
	 * @param string $block_content Rendered HTML.
	 * @param array  $block Full block data.
	 * @return string Filtered HTML.
	 */
	function mbf_pattern_enhancer_render_filter( $block_content, $block ) {
		if ( ! is_string( $block_content ) || '' === $block_content ) {
			return $block_content;
		}

		// Only enhance blocks having metadata.patternName we know.
		$meta = $block['attrs']['metadata'] ?? null;
		if ( ! is_array( $meta ) ) {
			return $block_content;
		}
		$pattern = (string) ( $meta['patternName'] ?? '' );
		if ( '' === $pattern ) {
			return $block_content;
		}

		$config = mbf_get_pattern_enhancer_config();
		if ( ! isset( $config[ $pattern ] ) ) {
			return $block_content;
		}

		$entry    = $config[ $pattern ];
		$cls      = isset( $entry['class'] ) ? (string) $entry['class'] : '';
		$settings = isset( $entry['settings'] ) && is_array( $entry['settings'] ) ? $entry['settings'] : array();

		// Allow overrides from pattern metadata: metadata.mbf.{class,settings}
		$meta_mbf = $meta['mbf'] ?? array();
		if ( is_array( $meta_mbf ) ) {
			if ( isset( $meta_mbf['class'] ) && is_string( $meta_mbf['class'] ) && '' !== $meta_mbf['class'] ) {
				$cls = $meta_mbf['class'];
			}
			if ( isset( $meta_mbf['settings'] ) && is_array( $meta_mbf['settings'] ) ) {
				$settings = array_merge( $settings, $meta_mbf['settings'] );
			}
		}
		$settings = mbf_normalize_settings( $settings );

		if ( '' === $cls && empty( $settings ) ) {
			return $block_content;
		}

		// Only proceed if the markup has a class attribute to append to.
		if ( false === strpos( $block_content, 'class="' ) ) {
			return $block_content;
		}

		$settings_str = mbf_pattern_settings_to_attrs( $settings );

		// Append class (if needed) and data-* attrs to the first opening tag.
		$replacement = function ( array $m ) use ( $cls, $settings_str ) {
			$classes = $m[1];
			if ( '' !== $cls ) {
				// Check only within the first tag's class list (word-boundary match).
				if ( 1 !== preg_match( '/(?:^|\s)' . preg_quote( $cls, '/' ) . '(?:\s|$)/', $classes ) ) {
					$classes = trim( $classes . ' ' . $cls );
				}
			}
			return sprintf( 'class="%s"%s', $classes, $settings_str );
		};

		return preg_replace_callback( '/class=\"([^\"]*)\"/', $replacement, $block_content, 1 );
	}
}
add_filter( 'render_block', 'mbf_pattern_enhancer_render_filter', 10, 2 );

if ( ! function_exists( 'mbf_pattern_enhancer_expose_config_js' ) ) {
	/**
	 * Expose Pattern Enhancer config to the editor as a global JS object.
	 */
	function mbf_pattern_enhancer_expose_config_js() {
		$config = mbf_get_pattern_enhancer_config();
		$json   = wp_json_encode( $config );

		if ( false === $json ) {
			return;
		}

		$code = 'window.mbfPatternEnhancerConfig = ' . $json . ';';

		// Append before our editor bundle so global config is available when JS initializes.
		wp_add_inline_script( 'mbf-editor', $code, 'before' );
	}
}
add_action( 'enqueue_block_editor_assets', 'mbf_pattern_enhancer_expose_config_js', 20 );
