<?php
/**
 * Pattern Enhancer Config: patterns for page parts
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-search-products' => array(
		'class'    => 'mbf-search-products mbf-product',
	),
	'capsule/mbf-search-posts' => array(
		'class'    => 'mbf-search-posts',
	),
	'capsule/mbf-search-pages' => array(
		'class'    => 'mbf-search-pages',
	),
	'capsule/mbf-product-catalog-terms' => array(
		'class'    => 'mbf-product-catalog-terms',
	),
);
