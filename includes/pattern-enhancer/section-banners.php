<?php
/**
 * Pattern Enhancer Config: patterns for banner sections
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-banner' => array(
		'class'    => 'mbf-section mbf-banner',
		'settings' => array(
			'desktop-aspect-ratio' => '16-9',
			'tablet-aspect-ratio' => '16-9',
			'mobile-aspect-ratio' => '3-4',
			'stretch-mobile' => 'false',
			'text_animation' => 'true',
		),
		'controls' => array(
			mbf_get_pattern_control_aspect_ratio( 'desktop', '16-9' ),
			mbf_get_pattern_control_aspect_ratio( 'tablet', '16-9' ),
			mbf_get_pattern_control_aspect_ratio( 'mobile', '3-4' ),
			mbf_get_pattern_control_stretch_mobile(),
			mbf_get_pattern_control_text_animation(),
		),
	),
	'capsule/mbf-banner-small' => array(
		'class'    => 'mbf-section mbf-banner mbf-banner-small',
		'settings' => array(
			'desktop-aspect-ratio' => '3-4',
			'tablet-aspect-ratio' => '16-9',
			'mobile-aspect-ratio' => '3-4',
			'stretch-mobile' => 'false',
			'text_animation' => 'true',
		),
		'controls' => array(
			mbf_get_pattern_control_aspect_ratio( 'desktop', '3-4' ),
			mbf_get_pattern_control_aspect_ratio( 'tablet', '16-9' ),
			mbf_get_pattern_control_aspect_ratio( 'mobile', '3-4' ),
			mbf_get_pattern_control_stretch_mobile(),
			mbf_get_pattern_control_text_animation(),
		),
	),
	'capsule/mbf-product-categories-banner' => array(
		'class'    => 'mbf-section mbf-product-categories-banner',
		'settings' => array(
			'desktop-aspect-ratio' => '3-1',
			'tablet-aspect-ratio' => '3-1',
			'mobile-aspect-ratio' => '3-4',
			'stretch-mobile' => 'false',
		),
		'controls' => array(
			mbf_get_pattern_control_aspect_ratio( 'desktop', '3-1' ),
			mbf_get_pattern_control_aspect_ratio( 'tablet', '3-1' ),
			mbf_get_pattern_control_aspect_ratio( 'mobile', '3-4' ),
			mbf_get_pattern_control_stretch_mobile(),
		),
	),
	'capsule/mbf-split-banners' => array(
		'class'    => 'mbf-section mbf-split-banners',
		'settings' => array(
			'desktop-aspect-ratio' => '4-3',
			'tablet-aspect-ratio' => '4-3',
			'mobile-aspect-ratio' => '3-4',
			'stretch-mobile' => 'false',
			'text_animation' => 'true',
			'columns',
		),
		'controls' => array(
			mbf_get_pattern_control_aspect_ratio( 'desktop', '4-3' ),
			mbf_get_pattern_control_aspect_ratio( 'tablet', '4-3' ),
			mbf_get_pattern_control_aspect_ratio( 'mobile', '3-4' ),
			array(
				'type'    => 'select',
				'name'    => 'columns',
				'label'   => 'Columns',
				'default' => '2',
				'options' => array(
					array(
						'label' => '2',
						'value' => '2',
					),
					array(
						'label' => '3',
						'value' => '3',
					),
					array(
						'label' => '4',
						'value' => '4',
					),
				),
			),
			mbf_get_pattern_control_stretch_mobile(),
			mbf_get_pattern_control_text_animation(),
		),
	),
);
