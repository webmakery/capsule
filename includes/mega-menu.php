<?php
/**
 * Mega Menu
 *
 * @package Capsule
 */


/**
 * Register the custom Mega Menu block.
 * * This uses the metadata provided in the block.json file located within
 * the 'blocks/mega-menu' folder of the theme.
 *
 * @since 1.0.0
 * @return void
 */
if ( ! function_exists( 'mbf_mega_menu_block_init' ) ) {
	function mbf_mega_menu_block_init() {
		// Use get_template_directory() for the main theme path
		register_block_type( get_template_directory() . '/blocks/mega-menu' );
	}
}
add_action( 'init', 'mbf_mega_menu_block_init' );


/**
 * Filter Core Navigation Block settings.
 * * Removes the 'parent' restriction from Navigation Links and Submenus.
 * This allows these blocks to be used inside your custom 'custom/mega-menu'
 * container, which otherwise wouldn't be possible due to core restrictions.
 *
 * @param array  $args The registration arguments for the block.
 * @param string $name The block name (e.g., 'core/navigation-link').
 * @return array Modified block registration arguments.
 */
add_filter(
	'register_block_type_args',
	function ( $args, $name ) {
		// Targeted blocks that are usually restricted to the Core Navigation block
		$navigation_blocks = array( 'core/navigation-link', 'core/navigation-submenu' );

		if ( in_array( $name, $navigation_blocks, true ) ) {
			// Unset the 'parent' key so they can live inside our Mega Menu
			if ( isset( $args['parent'] ) ) {
				unset( $args['parent'] );
			}
		}
		return $args;
	},
	20,
	2
);
