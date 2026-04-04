<?php
/**
 * Pattern Enhancer Config: patterns for site Header
 *
 * @package Capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'capsule/mbf-header' => array(
		'class'    => 'mbf-header',
		'settings' => array(
			'header-type'         => 'classic',
			'header-branding'     => 'site-title',
			'navbar-sticky'       => 'true',
			'navbar-smart-sticky' => 'true',
			'hide-cart-icon'      => 'true',
		),
		'controls' => array(
			array(
				'type'    => 'select',
				'name'    => 'header-branding',
				'label'   => 'Header Branding',
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
			array(
				'type'    => 'toggle',
				'name'    => 'navbar-sticky',
				'label'   => 'Make navigation bar sticky',
				'default' => true,
			),
			array(
				'type'    => 'toggle',
				'name'    => 'navbar-smart-sticky',
				'label'   => 'Enable the smart sticky feature',
				'default' => true,
			),
			array(
				'type'    => 'toggle',
				'name'    => 'hide-cart-icon',
				'label'   => 'Hide Cart Icon',
				'default' => true,
			),
		),
	),
	'capsule/mbf-header-col-left' => array(
		'class' => 'mbf-header-col-left',
	),
	'capsule/mbf-header-col-center' => array(
		'class' => 'mbf-header-col-center',
	),
	'capsule/mbf-header-col-right' => array(
		'class' => 'mbf-header-col-right',
	),
	'capsule/mbf-header-branding' => array(
		'class' => 'mbf-header-branding',
	),
	'capsule/mbf-header-checkout' => array(
		'class'    => 'mbf-header mbf-header-checkout',
		'settings' => array(
			'header-branding'     => 'site-title',
		),
		'controls' => array(
			array(
				'type'    => 'select',
				'name'    => 'header-branding',
				'label'   => 'Header Branding',
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
	'capsule/mbf-header-overlay' => array(
		'class' => 'mbf-header-overlay mbf-editor-hidden',
	),
	'capsule/mbf-search-button' => array(
		'class' => 'mbf-search-button',
	),
	'capsule/mbf-search-popup' => array(
		'class' => 'mbf-search-popup mbf-editor-hidden',
	),
	'capsule/mbf-mega-menu' => array(
		'class' => 'mbf-mega-menu',
	),
);
