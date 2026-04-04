<?php
/**
 * Pattern Enhancer Config: patterns for post archives & Bloghome
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-bloghome-header' => array(
		'class'    => 'mbf-section mbf-bloghome-header',
	),
	'capsule/mbf-archive-posts' => array(
		'class'    => 'mbf-section mbf-archive-posts',
	),
);
