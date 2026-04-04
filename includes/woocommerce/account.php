<?php
/**
 * WooCommerce Account Customizations
 *
 * @package Capsule
 */

if ( ! function_exists( 'mbf_init_woocommerce_account' ) ) {
	/**
	 * Initialize WooCommerce account customizations.
	 *
	 * Adds wrapper elements to the account dashboard and edit-account form.
	 *
	 * @return void
	 */
	function mbf_init_woocommerce_account() {

		if ( ! function_exists( 'mbf_account_content_wrapper_start' ) ) {
			/**
			 * Wrap main account dashboard.
			 * Output the start of the account dashboard wrapper.
			 *
			 * @return void
			 */
			function mbf_account_content_wrapper_start() {
				if ( is_account_page() && ! is_wc_endpoint_url() ) {
					echo '<div class="woocommerce-MyAccount-dashboard">';
				}
			}
		}
		add_action( 'woocommerce_account_content', 'mbf_account_content_wrapper_start', 6 );

		if ( ! function_exists( 'mbf_account_content_wrapper_end' ) ) {
			/**
			 * Wrap main account dashboard.
			 * Output the end of the account dashboard wrapper.
			 *
			 * @return void
			 */
			function mbf_account_content_wrapper_end() {
				if ( is_account_page() && ! is_wc_endpoint_url() ) {
					echo '</div>';
				}
			}
		}
		add_action( 'woocommerce_account_content', 'mbf_account_content_wrapper_end', 99 );

		if ( ! function_exists( 'mbf_edit_account_form_wrapper_start' ) ) {
			/**
			 * Edit Account form structure.
			 * Output wrapper start for the edit-account form main info section.
			 *
			 * @return void
			 */
			function mbf_edit_account_form_wrapper_start() {
				if ( is_account_page() && is_wc_endpoint_url( 'edit-account' ) ) {
					echo '<div class="woocommerce-EditAccountForm-MainInfo">'
						. '<div class="woocommerce-EditAccountForm-Heading">'
						. esc_html__( 'Main Info', 'capsule' )
						. '</div>'
						. '<div class="woocommerce-EditAccountForm-Fields">';
				}
			}
		}
		add_action( 'woocommerce_edit_account_form_start', 'mbf_edit_account_form_wrapper_start' );

		if ( ! function_exists( 'mbf_edit_account_form_wrapper_middle_end' ) ) {
			/**
			 * Edit Account form structure.
			 * Output wrapper middle section for password change fields.
			 *
			 * @return void
			 */
			function mbf_edit_account_form_wrapper_middle_end() {
				if ( is_account_page() && is_wc_endpoint_url( 'edit-account' ) ) {
					echo '</div></div>'
						. '<div class="woocommerce-EditAccountForm-PasswordChange">'
						. '<div class="woocommerce-EditAccountForm-Heading">'
						. esc_html__( 'Password Change', 'capsule' )
						. '</div>'
						. '<div class="woocommerce-EditAccountForm-Fields">';
				}
			}
		}
		add_action( 'woocommerce_edit_account_form_fields', 'mbf_edit_account_form_wrapper_middle_end' );

		if ( ! function_exists( 'mbf_edit_account_form_wrapper_end' ) ) {
			/**
			 * Edit Account form structure.
			 * Output wrapper end for the edit-account form.
			 *
			 * @return void
			 */
			function mbf_edit_account_form_wrapper_end() {
				if ( is_account_page() && is_wc_endpoint_url( 'edit-account' ) ) {
					echo '</div></div>';
				}
			}
		}
		add_action( 'woocommerce_edit_account_form', 'mbf_edit_account_form_wrapper_end' );
	}
}
add_action( 'init', 'mbf_init_woocommerce_account' );
