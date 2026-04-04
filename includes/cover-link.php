<?php
/**
 * Cover Link functionality for frontend
 *
 * Handles the rendering of cover blocks with link functionality on the frontend.
 * Wraps cover blocks in <a> tags when linkUrl is provided.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Convert cover block background span to link if linkUrl is provided
 *
 * @param string $block_content The rendered block content
 * @param array  $block         The block data
 * @return string Modified block content
 */
function mbf_render_cover_link( $block_content, $block ) {

	if ( 'core/cover' !== $block['blockName'] ) {
		return $block_content;
	}

	// Get block attributes.
	$attributes  = $block['attrs'] ?? array();
	$link_url    = $attributes['linkUrl'] ?? '';
	$link_target = $attributes['linkTarget'] ?? '';
	$link_title  = $attributes['linkTitle'] ?? '';

	// If no link URL, return original content.
	if ( empty( $link_url ) ) {
		return $block_content;
	}

	// Prepare link attributes.
	$link_attrs = array(
		'href' => esc_url( $link_url ),
	);

	if ( ! empty( $link_target ) && '_blank' === $link_target ) {
		$link_attrs['target'] = '_blank';
		$link_attrs['rel']    = 'noopener noreferrer';
	}

	if ( ! empty( $link_title ) ) {
		$link_attrs['title'] = esc_attr( $link_title );
	}

	// Build link attributes string.
	$link_attrs_string = __return_empty_string();
	foreach ( $link_attrs as $attr => $value ) {
		$link_attrs_string .= sprintf( ' %s="%s"', esc_attr( $attr ), esc_attr( $value ) );
	}

	// Convert span.wp-block-cover__background to a link.
	$pattern = '/<span([^>]*class="[^"]*wp-block-cover__background[^"]*"[^>]*)>(.*?)<\/span>/s';

	$replacement = function ( $matches ) use ( $link_attrs_string ) {
		$span_attrs = preg_replace( '/\s*aria-hidden="true"/i', '', $matches[1] ); // Remove aria-hidden attribute.
		return '<a' . $link_attrs_string . $span_attrs . '>' . $matches[2] . '</a>';
	};

	$modified_content = preg_replace_callback( $pattern, $replacement, $block_content );

	// If replacement didn't work (no background span found), fall back to original content.
	if ( null === $modified_content || $modified_content === $block_content ) {
		return $block_content;
	}

	return $modified_content;
}
add_filter( 'render_block', 'mbf_render_cover_link', 10, 2 );
