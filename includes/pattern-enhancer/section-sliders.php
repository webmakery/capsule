<?php
/**
 * Pattern Enhancer Config: patterns for slider sections
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-post-carousel' => array(
		'class'    => 'mbf-section mbf-posts mbf-post-carousel',
		'settings' => array(
			'autoplay' => 'true',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'desktop_items' => '6',
			'laptop_items' => '4',
			'tablet_items' => '3',
			'mobile_items' => '2',
			'gap' => '2',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination( false ),

			// Responsive item controls: media, default, min, max, step (optional), label (optional).
			mbf_get_pattern_control_responsive_items( 'desktop', 6, 1, 6 ),
			mbf_get_pattern_control_responsive_items( 'laptop', 4, 1, 4 ),
			mbf_get_pattern_control_responsive_items( 'tablet', 2, 1, 3 ),
			mbf_get_pattern_control_responsive_items( 'mobile', 2, 1, 2, 1, 'Large Mobile items' ),
			mbf_get_pattern_control_items_gap(),
		),
	),
	'capsule/mbf-product-carousel' => array(
		'class'    => 'mbf-section mbf-product mbf-product-carousel',
		'settings' => array(
			'autoplay' => 'true',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'desktop_items' => '6',
			'laptop_items' => '4',
			'tablet_items' => '3',
			'mobile_items' => '2',
			'gap' => '2',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination( false ),

			// Responsive item controls: media, default, min, max, step (optional), label (optional).
			mbf_get_pattern_control_responsive_items( 'desktop', 6, 1, 6 ),
			mbf_get_pattern_control_responsive_items( 'laptop', 4, 1, 4 ),
			mbf_get_pattern_control_responsive_items( 'tablet', 3, 1, 3 ),
			mbf_get_pattern_control_responsive_items( 'mobile', 2, 1, 2 ),
			mbf_get_pattern_control_items_gap(),
		),
	),
	'capsule/mbf-product-carousel-with-description' => array(
		'class'    => 'mbf-section mbf-product mbf-product-carousel',
		'settings' => array(
			'autoplay' => 'true',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'desktop_items' => '6',
			'laptop_items' => '4',
			'tablet_items' => '3',
			'mobile_items' => '2',
			'gap' => '2',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination( false ),

			// Responsive item controls: media, default, min, max, step (optional), label (optional).
			mbf_get_pattern_control_responsive_items( 'desktop', 6, 1, 6 ),
			mbf_get_pattern_control_responsive_items( 'laptop', 4, 1, 4 ),
			mbf_get_pattern_control_responsive_items( 'tablet', 3, 1, 3 ),
			mbf_get_pattern_control_responsive_items( 'mobile', 2, 1, 2 ),
			mbf_get_pattern_control_items_gap(),
		),
	),
	'capsule/mbf-related-products-collection' => array(
		'class'    => 'mbf-section mbf-product mbf-product-carousel mbf-related-products-collection',
		'settings' => array(
			'autoplay' => 'true',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'desktop_items' => '6',
			'laptop_items' => '4',
			'tablet_items' => '3',
			'mobile_items' => '2',
			'gap' => '2',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination( false ),

			// Responsive item controls: media, default, min, max, step (optional), label (optional).
			mbf_get_pattern_control_responsive_items( 'desktop', 6, 1, 6 ),
			mbf_get_pattern_control_responsive_items( 'laptop', 4, 1, 4 ),
			mbf_get_pattern_control_responsive_items( 'tablet', 3, 1, 3 ),
			mbf_get_pattern_control_responsive_items( 'mobile', 2, 1, 2 ),
			mbf_get_pattern_control_items_gap(),
		),
	),
	'capsule/mbf-upsells' => array(
		'class'    => 'mbf-section mbf-product mbf-product-carousel mbf-upsells',
		'settings' => array(
			'autoplay' => 'false',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'desktop_items' => '1',
			'laptop_items' => '1',
			'tablet_items' => '1',
			'mobile_items' => '1',
			'gap' => '0',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination( false ),

			// Responsive item controls: media, default, min, max, step (optional), label (optional).
			mbf_get_pattern_control_responsive_items( 'desktop', 1, 1, 1 ),
			mbf_get_pattern_control_responsive_items( 'laptop', 1, 1, 1 ),
			mbf_get_pattern_control_responsive_items( 'tablet', 1, 1, 1 ),
			mbf_get_pattern_control_responsive_items( 'mobile', 1, 1, 1 ),
			mbf_get_pattern_control_items_gap(),
		),
	),
	'capsule/mbf-hero-slider' => array(
		'class'    => 'mbf-hero-slider',
		'settings' => array(
			'autoplay' => 'true',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'text_animation' => 'true',
			'desktop-aspect-ratio' => '21-9',
			'tablet-aspect-ratio' => '16-9',
			'mobile-aspect-ratio' => '3-4',
			'gap' => '0',
			'stretch-mobile' => 'false',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination( false ),
			mbf_get_pattern_control_text_animation(),
			mbf_get_pattern_control_aspect_ratio( 'desktop', '21-9' ),
			mbf_get_pattern_control_aspect_ratio( 'tablet', '16-9' ),
			mbf_get_pattern_control_aspect_ratio( 'mobile', '3-4' ),
			mbf_get_pattern_control_items_gap(),
			mbf_get_pattern_control_stretch_mobile( false ),
		),
	),
	'capsule/mbf-testimonials' => array(
		'class'    => 'mbf-section mbf-testimonials',
		'settings' => array(
			'autoplay' => 'false',
			'delay'    => '5000',
			'speed'    => '800',
			'navigation' => 'true',
			'pagination' => 'false',
			'desktop_items' => '2',
			'laptop_items' => '2',
			'tablet_items' => '2',
			'gap' => '2',
		),
		'controls' => array(
			mbf_get_pattern_control_slider_autoplay_toggle(),
			mbf_get_pattern_control_slider_autoplay_delay(),
			mbf_get_pattern_control_slider_autoplay_speed(),
			mbf_get_pattern_control_slider_navigation(),
			mbf_get_pattern_control_slider_pagination(),

			// Responsive item controls: media, default, min, max, step (optional), label (optional).
			mbf_get_pattern_control_responsive_items( 'desktop', 2, 1, 2 ),
			mbf_get_pattern_control_responsive_items( 'laptop', 2, 1, 2 ),
			mbf_get_pattern_control_responsive_items( 'tablet', 2, 1, 2 ),
			mbf_get_pattern_control_items_gap(),
		),
	),
);
