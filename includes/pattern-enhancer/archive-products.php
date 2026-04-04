<?php
/**
 * Pattern Enhancer Config: patterns for product catalog
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-product-catalog-header' => array(
		'class'    => 'mbf-product-catalog__header',
	),
	'capsule/mbf-product-catalog-grid' => array(
		'class'    => 'mbf-product mbf-product-catalog__grid',
	),
	'capsule/mbf-product-catalog-filters' => array(
		'class'    => 'mbf-product-catalog__filters',
	),
);
