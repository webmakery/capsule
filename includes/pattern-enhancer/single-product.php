<?php
/**
 * Pattern Enhancer Config: single product patterns
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-single-product-standard' => array(
		'class'    => 'mbf-single-product',
	),
	'capsule/mbf-single-product-standard-fluentcart' => array(
		'class'    => 'mbf-single-product',
	),
	'capsule/mbf-single-product-reviews' => array(
		'class'    => 'mbf-single-product-reviews',
	),
	'capsule/mbf-store-features' => array(
		'class'    => 'mbf-store-features',
	),
	'capsule/mbf-single-product-reviews-featured' => array(
		'class'    => 'mbf-single-product-reviews mbf-single-product-reviews-featured',
	),
);
