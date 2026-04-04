<?php
/**
 * Pattern Enhancer Config: single post patterns
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-single-overlay-header' => array(
		'class'    => 'mbf-single-overlay-header',
		'settings' => array(
			'desktop-aspect-ratio' => '16-9',
			'tablet-aspect-ratio' => '16-9',
			'mobile-aspect-ratio' => '3-4',
			'stretch-mobile' => 'true',
		),
		'controls' => array(
			mbf_get_pattern_control_aspect_ratio( 'desktop', '16-9' ),
			mbf_get_pattern_control_aspect_ratio( 'tablet', '16-9' ),
			mbf_get_pattern_control_aspect_ratio( 'mobile', '3-4' ),
			mbf_get_pattern_control_stretch_mobile(),
		),
	),
	'capsule/mbf-single-standard-header' => array(
		'class'    => 'mbf-single-standard-header',
	),
	'capsule/mbf-single-footer' => array(
		'class'    => 'mbf-single-footer',
	),
	'capsule/mbf-single-post-comments' => array(
		'class'    => 'mbf-single-post-comments',
	),
);
