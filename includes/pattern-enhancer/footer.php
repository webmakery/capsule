<?php
/**
 * Pattern Enhancer Config: patterns for site Footer
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-footer' => array(
		'class'    => 'mbf-footer',
		'settings' => array(
			'footer-branding' => 'site-title',
		),
		'controls' => array(
			array(
				'type'    => 'select',
				'name'    => 'footer-branding',
				'label'   => 'Footer Branding',
				'default' => 'site-title',
				'options' => array(
					array(
						'label' => 'Site Title',
						'value' => 'site-title',
					),
					array(
						'label' => 'Logo',
						'value' => 'logo',
					),
				),
			),
		),
	),
	'capsule/mbf-footer-branding' => array(
		'class'    => 'mbf-footer-branding',
	),
	'capsule/mbf-footer-content' => array(
		'class'    => 'mbf-footer-content',
	),
	'capsule/mbf-footer-columns' => array(
		'class'    => 'mbf-footer-columns',
	),
	'capsule/mbf-footer-copyright' => array(
		'class'    => 'mbf-footer-copyright',
	),
	'capsule/mbf-footer-bottom-right' => array(
		'class'    => 'mbf-footer-bottom-right',
	),
);
