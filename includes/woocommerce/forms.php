<?php
/**
 * WooCommerce Form Field Customizations
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_init_woocommerce_forms' ) ) {
	/**
	 * Initialize WooCommerce form customizations.
	 *
	 * Adjusts placeholders, address fields, checkout, and review forms.
	 *
	 * @return void
	 */
	function mbf_init_woocommerce_forms() {

		// Address field adjustments.
		if ( ! function_exists( 'mbf_change_address_fields' ) ) {
			/**
			 * Remove extra label class from address_2.
			 *
			 * @param array $address_fields Address fields.
			 * @return array
			 */
			function mbf_change_address_fields( $address_fields ) {
				$address_fields['address_2']['label_class'] = '';
				return $address_fields;
			}
		}
		add_filter( 'woocommerce_default_address_fields', 'mbf_change_address_fields' );

		if ( ! function_exists( 'mbf_woocommerce_default_address_fields' ) ) {
			/**
			 * Add placeholders to default address fields.
			 *
			 * @param array $fields Address fields.
			 * @return array
			 */
			function mbf_woocommerce_default_address_fields( $fields ) {
				foreach ( $fields as $key => $field ) {
					if ( isset( $field['label'] ) && $field['label'] ) {
						if ( empty( $field['placeholder'] ) ) {
							$fields[ $key ]['placeholder'] = $field['label'];
						}
						if ( ! empty( $field['required'] ) ) {
							$fields[ $key ]['placeholder'] .= ' *';
						}
					}
				}
				return $fields;
			}
		}
		add_filter( 'woocommerce_default_address_fields', 'mbf_woocommerce_default_address_fields' );

		// Checkout placeholders.
		if ( ! function_exists( 'mbf_woocommerce_checkout_fields' ) ) {
			/**
			 * Add placeholders to checkout form fields.
			 *
			 * @param array $sections Checkout sections.
			 * @return array
			 */
			function mbf_woocommerce_checkout_fields( $sections ) {
				foreach ( $sections as $j => $section ) {
					foreach ( $section as $i => $field ) {
						if ( ! empty( $field['label'] ) ) {
							if ( empty( $field['placeholder'] ) ) {
								$sections[ $j ][ $i ]['placeholder'] = $field['label'];
							}
							if ( ! empty( $field['required'] ) ) {
								$sections[ $j ][ $i ]['placeholder'] .= ' *';
							}
						}
					}
				}
				return $sections;
			}
		}
		add_filter( 'woocommerce_checkout_fields', 'mbf_woocommerce_checkout_fields' );

		if ( ! function_exists( 'mbf_add_wc_form_placeholders' ) ) {
			/**
			 * Add placeholders to various WooCommerce forms via output buffering.
			 *
			 * Supports login, registration, lost password, reset password, and edit account forms.
			 *
			 * @return void
			 */
			function mbf_add_wc_form_placeholders() {

				$forms = array(
					'customer_login' => array(
						array( 'username', __( 'Username or email address *', 'capsule' ) ),
						array( 'password', __( 'Password *', 'capsule' ) ),
						array( 'reg_username', __( 'Username *', 'capsule' ) ),
						array( 'reg_email', __( 'Email address *', 'capsule' ) ),
						array( 'reg_password', __( 'Password *', 'capsule' ) ),
					),
					'login_form'     => array(
						array( 'username', __( 'Username or email address *', 'capsule' ) ),
						array( 'password', __( 'Password *', 'capsule' ) ),
					),
					'lost_password'  => array(
						array( 'user_login', __( 'Username or email *', 'capsule' ) ),
					),
					'reset_password' => array(
						array( 'password_1', __( 'New password *', 'capsule' ) ),
						array( 'password_2', __( 'Re-enter new password *', 'capsule' ) ),
					),
					'edit_account'   => array(
						array( 'account_first_name', __( 'First name *', 'capsule' ) ),
						array( 'account_last_name', __( 'Last name *', 'capsule' ) ),
						array( 'account_display_name', __( 'Display name *', 'capsule' ) ),
						array( 'account_email', __( 'Email address *', 'capsule' ) ),
						array( 'password_current', __( 'Current password (leave blank to leave unchanged)', 'capsule' ) ),
						array( 'password_1', __( 'New password (leave blank to leave unchanged)', 'capsule' ) ),
						array( 'password_2', __( 'Confirm new password', 'capsule' ) ),
					),
				);

				foreach ( $forms as $key => $pairs ) {
					add_action(
						"woocommerce_before_{$key}_form",
						function () use ( $pairs ) {
							ob_start(
								function ( $html ) use ( $pairs ) {
									foreach ( $pairs as $pair ) {
										list( $id, $text ) = $pair;
										$html              = str_replace(
											"id=\"{$id}\"",
											sprintf( 'id="%s" placeholder="%s"', $id, esc_html__( $text, 'capsule' ) ),
											$html
										);
									}
									return $html;
								}
							);
						}
					);

					add_action( "woocommerce_after_{$key}_form", fn() => ob_end_flush(), 0 );
				}
			}
		}
		mbf_add_wc_form_placeholders();

		// Review placeholders.
		if ( ! function_exists( 'mbf_woocommerce_review_placeholders' ) ) {
			/**
			 * Add placeholders to review comment form.
			 *
			 * @param array $comment_form Comment form arguments.
			 * @return array
			 */
			function mbf_woocommerce_review_placeholders( $comment_form ) {
				if ( isset( $comment_form['fields'] ) ) {
					$comment_form['fields'] = mbf_set_comment_form_input_placeholders( $comment_form['fields'] );
				}
				if ( isset( $comment_form['comment_field'] ) && strpos( $comment_form['comment_field'], 'placeholder=' ) === false ) {
					$label                         = __( 'Your review*', 'capsule' );
					$comment_form['comment_field'] = str_replace(
						'<textarea',
						'<textarea placeholder="' . esc_attr( $label ) . '"',
						$comment_form['comment_field']
					);
				}
				return $comment_form;
			}
		}
		add_filter( 'woocommerce_product_review_comment_form_args', 'mbf_woocommerce_review_placeholders', 20 );
	}
}
add_action( 'init', 'mbf_init_woocommerce_forms' );
