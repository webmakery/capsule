<?php
/**
 * Pattern Enhancer Controls
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'mbf_get_aspect_ratio_options' ) ) {
	/**
	 * Returns a reusable list of common aspect ratios for select controls.
	 *
	 * Useful for sliders, media blocks, or responsive pattern settings.
	 *
	 * @param string|null $context Optional context for filtering options (e.g., 'mobile', 'desktop').
	 * @return array List of aspect ratio label/value pairs.
	 */
	function mbf_get_aspect_ratio_options( ?string $context = null ): array {
		$options = array(
			array(
				'label' => __( 'Square - 1:1', 'capsule' ),
				'value' => '1-1',
			),
			array(
				'label' => __( 'Standard - 4:3', 'capsule' ),
				'value' => '4-3',
			),
			array(
				'label' => __( 'Portrait - 3:4', 'capsule' ),
				'value' => '3-4',
			),
			array(
				'label' => __( 'Classic - 3:2', 'capsule' ),
				'value' => '3-2',
			),
			array(
				'label' => __( 'Panorama - 3:1', 'capsule' ),
				'value' => '3-1',
			),
			array(
				'label' => __( 'Classic Portrait - 2:3', 'capsule' ),
				'value' => '2-3',
			),
			array(
				'label' => __( 'Wide - 16:9', 'capsule' ),
				'value' => '16-9',
			),
			array(
				'label' => __( 'Tall - 9:16', 'capsule' ),
				'value' => '9-16',
			),
			array(
				'label' => __( 'Cinema - 21:9', 'capsule' ),
				'value' => '21-9',
			),
		);

		// Early return if no context specified.
		if ( empty( $context ) ) {
			return $options;
		}
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_aspect_ratio' ) ) {
	/**
	 * Returns a reusable control definition for aspect ratio selectors per device.
	 *
	 * @param string $device          Device name (desktop, tablet, mobile).
	 * @param string $section_default Default aspect ratio value.
	 * @param string $custom_label    Optional custom label. Default empty.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_aspect_ratio(
		string $device,
		string $section_default = '16-9',
		string $custom_label = ''
	): array {
		$label_map = array(
			'desktop' => __( 'Desktop Aspect Ratio', 'capsule' ),
			'tablet'  => __( 'Tablet Aspect Ratio', 'capsule' ),
			'mobile'  => __( 'Mobile Aspect Ratio', 'capsule' ),
		);

		$label = '' !== $custom_label
			? $custom_label
			: ( $label_map[ $device ] ?? ucfirst( $device ) );

		return array(
			'type'    => 'select',
			'name'    => "{$device}-aspect-ratio",
			'label'   => $label,
			'default' => $section_default,
			'options' => mbf_get_aspect_ratio_options(),
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_stretch_mobile' ) ) {
	/**
	 * Returns a reusable toggle control definition for mobile stretch behavior.
	 *
	 * @param bool   $section_default Optional default toggle state. Default true.
	 * @param string $label           Optional control label. Default empty.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_stretch_mobile(
		bool $section_default = true,
		string $label = ''
	): array {
		if ( '' === $label ) {
			$label = __( 'Stretch to fullwidth on small mobile devices', 'capsule' );
		}

		return array(
			'type'    => 'toggle',
			'name'    => 'stretch-mobile',
			'label'   => $label,
			'default' => $section_default,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_responsive_items' ) ) {
	/**
	 * Returns a reusable control definition for responsive item counts.
	 *
	 * @param string $device          Device name (desktop, laptop, tablet, mobile).
	 * @param int    $section_default Default value.
	 * @param int    $min             Minimum value.
	 * @param int    $max             Maximum value.
	 * @param int    $step            Optional step value. Default 1.
	 * @param string $custom_label    Optional custom label override. Default empty.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_responsive_items(
		string $device,
		int $section_default,
		int $min,
		int $max,
		int $step = 1,
		string $custom_label = ''
	): array {
		$label_map = array(
			'desktop' => __( 'Desktop items', 'capsule' ),
			'laptop'  => __( 'Laptop items', 'capsule' ),
			'tablet'  => __( 'Tablet items', 'capsule' ),
			'mobile'  => __( 'Mobile items', 'capsule' ),
		);

		$label = '' !== $custom_label ? $custom_label : ( $label_map[ $device ] ?? ucfirst( $device ) );

		return array(
			'type'    => 'range',
			'name'    => "{$device}_items",
			'label'   => $label,
			'default' => $section_default,
			'min'     => $min,
			'max'     => $max,
			'step'    => $step,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_items_gap' ) ) {
	/**
	 * Returns a reusable control definition for gap size in pixels.
	 *
	 * @param int $section_default Optional default gap value. Default 4.
	 * @param int $min             Optional minimum value. Default 0.
	 * @param int $max             Optional maximum value. Default 32.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_items_gap(
		int $section_default = 2,
		int $min = 0,
		int $max = 32
	): array {
		return array(
			'type'    => 'number',
			'name'    => 'gap',
			'label'   => __( 'Gap between items (px)', 'capsule' ),
			'default' => $section_default,
			'min'     => $min,
			'max'     => $max,
			'step'    => 1,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_slider_autoplay_toggle' ) ) {
	/**
	 * Returns a toggle control for enabling or disabling autoplay.
	 *
	 * @param bool $section_default Optional default toggle state. Default true.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_slider_autoplay_toggle( bool $section_default = true ): array {
		return array(
			'type'    => 'toggle',
			'name'    => 'autoplay',
			'label'   => __( 'Autoplay', 'capsule' ),
			'default' => $section_default,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_slider_autoplay_delay' ) ) {
	/**
	 * Returns a numeric control for autoplay delay (in milliseconds).
	 *
	 * @param int $section_default Optional default delay in ms. Default 3000.
	 * @param int $min             Optional minimum value. Default 0.
	 * @param int $max             Optional maximum value. Default 1000000.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_slider_autoplay_delay(
		int $section_default = 3000,
		int $min = 0,
		int $max = 1000000
	): array {
		return array(
			'type'    => 'number',
			'name'    => 'delay',
			'label'   => __( 'Delay (ms)', 'capsule' ),
			'default' => $section_default,
			'min'     => $min,
			'max'     => $max,
			'step'    => 1000,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_slider_autoplay_speed' ) ) {
	/**
	 * Returns a numeric control for autoplay transition speed (in milliseconds).
	 *
	 * @param int $section_default Optional default speed in ms. Default 800.
	 * @param int $min             Optional minimum value. Default 0.
	 * @param int $max             Optional maximum value. Default 1000000.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_slider_autoplay_speed(
		int $section_default = 800,
		int $min = 0,
		int $max = 1000000
	): array {
		return array(
			'type'    => 'number',
			'name'    => 'speed',
			'label'   => __( 'Speed (ms)', 'capsule' ),
			'default' => $section_default,
			'min'     => $min,
			'max'     => $max,
			'step'    => 100,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_slider_navigation' ) ) {
	/**
	 * Returns a toggle control for enabling or disabling navigation (Prev/Next).
	 *
	 * @param bool $section_default Optional default toggle state. Default true.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_slider_navigation( bool $section_default = true ): array {
		return array(
			'type'    => 'toggle',
			'name'    => 'navigation',
			'label'   => __( 'Enable navigation (Prev/Next)', 'capsule' ),
			'default' => $section_default,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_slider_pagination' ) ) {
	/**
	 * Returns a toggle control for enabling or disabling pagination (Bullets).
	 *
	 * @param bool $section_default Optional default toggle state. Default true.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_slider_pagination( bool $section_default = true ): array {
		return array(
			'type'    => 'toggle',
			'name'    => 'pagination',
			'label'   => __( 'Enable pagination (Bullets)', 'capsule' ),
			'default' => $section_default,
		);
	}
}

if ( ! function_exists( 'mbf_get_pattern_control_text_animation' ) ) {
	/**
	 * Returns a toggle control for enabling or disabling heading animation.
	 *
	 * @param bool $section_default Optional default toggle state. Default true.
	 * @return array Control definition.
	 */
	function mbf_get_pattern_control_text_animation( bool $section_default = true ): array {
		return array(
			'type'    => 'toggle',
			'name'    => 'text_animation',
			'label'   => __( 'Enable heading animation', 'capsule' ),
			'default' => $section_default,
		);
	}
}
