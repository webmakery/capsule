<?php
/**
 * Mega Menu Dynamic Renderer
 * Switches between Click and Hover structures based on parent Navigation settings.
 */

// 1. Context & Attributes: Inherit settings from the core/navigation block
$open_on_click = $block->context['openSubmenusOnClick'] ?? false;
$show_icon     = $block->context['showSubmenuIcon'] ?? false;

// 2. Label Setup: Ensure formatted text from RichText renders correctly
$label = ! empty( $attributes['label'] ) ? wp_kses_post( $attributes['label'] ) : 'Mega Menu';

// 3. Class Logic: Set classes for CSS-based hover or JS-based click behavior
$li_classes  = 'wp-block-navigation-item has-child wp-block-navigation-submenu mbf-sm-position-right custom-mega-menu-item';
$li_classes .= $open_on_click ? ' open-on-click' : ' open-on-hover-click';

// 4. Interactivity API: Bind the block to Core Navigation JS actions
$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'                => $li_classes,
		'data-wp-interactive'  => 'core/navigation',
		'data-wp-context'      => wp_json_encode(
			array(
				'submenuOpenedBy' => array( 'click' => false, 'hover' => false, 'focus' => false ),
				'type'            => 'submenu',
				'modal'           => null,
				'previousFocus'   => null,
			)
		),
		'data-wp-on--focusout'   => 'actions.handleMenuFocusout',
		'data-wp-on--keydown'    => 'actions.handleMenuKeydown',
		'data-wp-on--mouseenter' => ! $open_on_click ? 'actions.openMenuOnHover' : null,
		'data-wp-on--mouseleave' => ! $open_on_click ? 'actions.closeMenuOnHover' : null,
		'data-wp-watch'          => 'callbacks.initMenu',
		'tabindex'               => '-1',
	)
);
?>

<li <?php echo wp_kses_data( $wrapper_attributes ); ?>>

	<?php
	if ( $open_on_click ) :
		?>
		<button
			data-wp-bind--aria-expanded="state.isMenuOpen"
			data-wp-on--click="actions.toggleMenuOnClick"
			aria-label="<?php echo esc_attr( wp_strip_all_tags( $label ) ); ?> submenu"
			class="wp-block-navigation-item__content wp-block-navigation-submenu__toggle"
			aria-expanded="false"
			type="button"
		>
			<span class="wp-block-navigation-item__label"><?php echo wp_kses_post( $label ); ?></span>
		</button>
		<?php if ( $show_icon ) : ?>
			<span class="wp-block-navigation__submenu-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false">
					<path d="M1.50002 4L6.00002 8L10.5 4" stroke="currentColor" stroke-width="1.5"></path>
				</svg>
			</span>
		<?php endif; ?>

	<?php else : ?>
		<div class="wp-block-navigation-item__content">
		<span class="wp-block-navigation-item__label"><?php echo wp_kses_post( $label ); ?></span>
	</div>

	<?php if ( $show_icon ) : ?>
		<button
			data-wp-bind--aria-expanded="state.isMenuOpen"
			data-wp-on--click="actions.toggleMenuOnClick"
			aria-label="<?php echo esc_attr( wp_strip_all_tags( $label ) ); ?> submenu"
			class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"
			aria-expanded="false"
			type="button"
		>
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false">
				<path d="M1.50002 4L6.00002 8L10.5 4" stroke="currentColor" stroke-width="1.5"></path>
			</svg>
		</button>
	<?php endif; ?>
	<?php endif; ?>

	<div
		data-wp-on--focus="actions.openMenuOnFocus"
		class="wp-block-navigation__submenu-container wp-block-navigation-submenu mbf-sm-position-init mega-menu-container"
	>
		<object class="mega-menu-content-wrapper">
			<?php
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo $content;
			?>
		</object>
	</div>
</li>
