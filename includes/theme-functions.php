<?php
/**
 * Theme Functions
 *
 * Utility theme functions.
 *
 * @package Capsule
 */

/**
 * ==================================
 * Query Adjustments
 * ==================================
 */

if ( ! function_exists( 'mbf_query_loop_preserve_search' ) ) {
	/**
	 * Preserve the search term in Query Loop block queries.
	 *
	 * Ensures the search query variable ('s') is passed correctly
	 * to Query Loop block requests when performing searches.
	 *
	 * @param array $query_vars Query vars used by the Query Loop block.
	 * @return array Modified query vars.
	 */
	function mbf_query_loop_preserve_search( $query_vars ) {
		if ( is_search() ) {
			$search = get_query_var( 's' );
			if ( ! empty( $search ) ) {
				$query_vars['s'] = $search;
			}
		}

		return $query_vars;
	}
}
add_filter( 'query_loop_block_query_vars', 'mbf_query_loop_preserve_search', 10, 1 );

/**
 * ==================================
 * Comment Form Placeholders
 * ==================================
 */

if ( ! function_exists( 'mbf_set_comment_form_input_placeholders' ) ) {
	/**
	 * Add placeholders to WordPress comment form input fields.
	 *
	 * Extracts field labels and applies them as placeholder attributes
	 * if not already defined.
	 *
	 * @param array $fields Default comment form fields.
	 * @return array Modified fields with placeholders.
	 */
	function mbf_set_comment_form_input_placeholders( $fields ) {
		foreach ( $fields as $key => $field_html ) {
			if ( preg_match( '/<label[^>]*>(.*?)<\/label>/i', $field_html, $matches ) ) {
				$label = wp_strip_all_tags( $matches[1] );

				if ( strpos( $field_html, 'placeholder=' ) === false ) {
					$fields[ $key ] = str_replace(
						'id="' . $key . '"',
						'id="' . $key . '" placeholder="' . esc_attr( $label ) . '"',
						$field_html
					);
				}
			}
		}

		return $fields;
	}
}
add_filter( 'comment_form_default_fields', 'mbf_set_comment_form_input_placeholders' );

if ( ! function_exists( 'mbf_set_comment_form_textarea_placeholders' ) ) {
	/**
	 * Add placeholder to WordPress comment form textarea field.
	 *
	 * Extracts the textarea label and applies it as a placeholder attribute
	 * if none exists.
	 *
	 * @param string $comment_field Comment textarea HTML.
	 * @return string Modified textarea HTML.
	 */
	function mbf_set_comment_form_textarea_placeholders( $comment_field ) {
		if ( strpos( $comment_field, 'placeholder=' ) === false ) {
			if ( preg_match( '/<label[^>]*>(.*?)<\/label>/i', $comment_field, $matches ) ) {
				$label = wp_strip_all_tags( $matches[1] );
			} else {
				$label = __( 'Your Comment', 'capsule' );
			}

			$comment_field = str_replace(
				'<textarea',
				'<textarea placeholder="' . esc_attr( $label ) . '"',
				$comment_field
			);
		}

		return $comment_field;
	}
}
add_filter( 'comment_form_field_comment', 'mbf_set_comment_form_textarea_placeholders' );

/**
 * ==================================
 * Add Button Animations.
 * ==================================
 */

if ( ! function_exists( 'mbf_replace_comment_form_submit_button' ) ) {
	/**
	 * Customizes the WordPress comment form submit button.
	 *
	 * Replaces the default input element with a semantic `<button>` element
	 * styled to match block-based button classes.
	 *
	 * @param string $button HTML markup for the submit button.
	 * @param array  $args   Array of arguments for the comment form.
	 * @return string Modified HTML for the submit button.
	 */
	function mbf_replace_comment_form_submit_button( $button, $args ) {
		return sprintf(
			'<button name="%1$s" type="submit" id="%2$s" class="wp-block-button__link wp-element-button %3$s">%4$s</button>',
			esc_attr( $args['name_submit'] ),
			esc_attr( $args['id_submit'] ),
			esc_attr( $args['class_submit'] ),
			esc_html( $args['label_submit'] )
		);
	}
}
add_filter( 'comment_form_submit_button', 'mbf_replace_comment_form_submit_button', 10, 2 );

if ( ! function_exists( 'mbf_replace_wpcf7_button' ) ) {
	/**
	 * Replaces Contact Form 7 submit inputs with styled button elements.
	 *
	 * Converts `<input type="submit">` elements into `<button>` elements
	 * for consistent styling with theme buttons.
	 *
	 * @param string $form The HTML content of the Contact Form 7 form.
	 * @return string Modified form HTML with replaced buttons.
	 */
	function mbf_replace_wpcf7_button( $form ) {
		$form = preg_replace_callback(
			'/<input([^>]+type="submit"[^>]*)>/i',
			function ( $matches ) {
				$input = $matches[1];

				if ( preg_match( '/value="([^"]*)"/i', $input, $value_match ) ) {
					$label = esc_html( $value_match[1] );
				} else {
					$label = __( 'Send', 'capsule' );
				}

				$button_attrs = preg_replace( '/\s*value="[^"]*"/i', '', $input );

				return sprintf( '<button %s>%s</button>', trim( $button_attrs ), $label );
			},
			$form
		);

		return $form;
	}
}
add_filter( 'wpcf7_form_elements', 'mbf_replace_wpcf7_button' );
