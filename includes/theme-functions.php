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

/**
 * ==================================
 * Facebook Ads Admin Content Fields
 * ==================================
 */

if ( ! function_exists( 'mbf_get_facebook_ads_page_id' ) ) {
	/**
	 * Get the page id used for the /facebook-ads route.
	 *
	 * @return int
	 */
	function mbf_get_facebook_ads_page_id() {
		$page = get_page_by_path( 'facebook-ads', OBJECT, 'page' );
		return $page ? (int) $page->ID : 0;
	}
}

if ( ! function_exists( 'mbf_get_facebook_ads_admin_fields' ) ) {
	/**
	 * Field definitions for Facebook ads landing content.
	 *
	 * @return array
	 */
	function mbf_get_facebook_ads_admin_fields() {
		return array(
			'seo_title'                    => array( 'label' => __( 'SEO title', 'capsule' ), 'type' => 'text' ),
			'seo_description'              => array( 'label' => __( 'SEO description', 'capsule' ), 'type' => 'textarea' ),
			'hero_badge'                   => array( 'label' => __( 'Hero badge', 'capsule' ), 'type' => 'text', 'required' => true ),
			'hero_title'                   => array( 'label' => __( 'Hero title', 'capsule' ), 'type' => 'text', 'required' => true ),
			'hero_description'             => array( 'label' => __( 'Hero description', 'capsule' ), 'type' => 'textarea', 'required' => true ),
			'hero_notice'                  => array( 'label' => __( 'Hero CTA support text', 'capsule' ), 'type' => 'text' ),
			'checkout_url'                 => array( 'label' => __( 'Primary button URL', 'capsule' ), 'type' => 'url', 'required' => true ),
			'primary_button_text'          => array( 'label' => __( 'Primary button text', 'capsule' ), 'type' => 'text', 'required' => true ),
			'secondary_button_text'        => array( 'label' => __( 'Secondary button text', 'capsule' ), 'type' => 'text', 'required' => true ),
			'hero_video_url'               => array( 'label' => __( 'Hero video URL', 'capsule' ), 'type' => 'url', 'required' => true ),
			'section1_badge'               => array( 'label' => __( 'Section 1 badge', 'capsule' ), 'type' => 'text' ),
			'section1_title'               => array( 'label' => __( 'Section 1 title', 'capsule' ), 'type' => 'text', 'required' => true ),
			'section1_description'         => array( 'label' => __( 'Section 1 description', 'capsule' ), 'type' => 'textarea', 'required' => true ),
			'section1_cta_text'            => array( 'label' => __( 'Section 1 CTA text', 'capsule' ), 'type' => 'text', 'required' => true ),
			'feature_card_1_title'         => array( 'label' => __( 'Feature card 1 title', 'capsule' ), 'type' => 'text', 'required' => true ),
			'feature_card_1_description'   => array( 'label' => __( 'Feature card 1 description', 'capsule' ), 'type' => 'textarea', 'required' => true ),
			'feature_card_1_image'         => array( 'label' => __( 'Feature card 1 image', 'capsule' ), 'type' => 'image' ),
			'feature_card_2_title'         => array( 'label' => __( 'Feature card 2 title', 'capsule' ), 'type' => 'text', 'required' => true ),
			'feature_card_2_description'   => array( 'label' => __( 'Feature card 2 description', 'capsule' ), 'type' => 'textarea', 'required' => true ),
			'feature_card_2_image'         => array( 'label' => __( 'Feature card 2 image', 'capsule' ), 'type' => 'image' ),
			'feature_card_3_title'         => array( 'label' => __( 'Feature card 3 title', 'capsule' ), 'type' => 'text', 'required' => true ),
			'feature_card_3_description'   => array( 'label' => __( 'Feature card 3 description', 'capsule' ), 'type' => 'textarea', 'required' => true ),
			'feature_card_3_image'         => array( 'label' => __( 'Feature card 3 image', 'capsule' ), 'type' => 'image' ),
			'extras_title'                 => array( 'label' => __( 'Feature grid section title', 'capsule' ), 'type' => 'text' ),
			'testimonials_badge'           => array( 'label' => __( 'Testimonials badge', 'capsule' ), 'type' => 'text' ),
			'testimonials_title'           => array( 'label' => __( 'Testimonials title', 'capsule' ), 'type' => 'text' ),
			'testimonials_description'     => array( 'label' => __( 'Testimonials description', 'capsule' ), 'type' => 'textarea' ),
			'process_badge'                => array( 'label' => __( 'Process badge', 'capsule' ), 'type' => 'text' ),
			'process_title'                => array( 'label' => __( 'Process title', 'capsule' ), 'type' => 'text' ),
			'process_description'          => array( 'label' => __( 'Process description', 'capsule' ), 'type' => 'textarea' ),
			'process_cta_primary'          => array( 'label' => __( 'Process primary CTA text', 'capsule' ), 'type' => 'text' ),
			'process_cta_secondary'        => array( 'label' => __( 'Process secondary CTA text', 'capsule' ), 'type' => 'text' ),
			'process_video_url'            => array( 'label' => __( 'Process video URL', 'capsule' ), 'type' => 'url' ),
			'faq_badge'                    => array( 'label' => __( 'FAQ badge', 'capsule' ), 'type' => 'text' ),
			'faq_title'                    => array( 'label' => __( 'FAQ title', 'capsule' ), 'type' => 'text' ),
			'faq_description'              => array( 'label' => __( 'FAQ description', 'capsule' ), 'type' => 'textarea' ),
			'final_cta_title'              => array( 'label' => __( 'Final CTA title', 'capsule' ), 'type' => 'text' ),
			'final_cta_button_text'        => array( 'label' => __( 'Final CTA button text', 'capsule' ), 'type' => 'text' ),
			'mobile_sticky_primary_text'   => array( 'label' => __( 'Mobile sticky primary button text', 'capsule' ), 'type' => 'text' ),
			'mobile_sticky_secondary_text' => array( 'label' => __( 'Mobile sticky secondary button text', 'capsule' ), 'type' => 'text' ),
			'webhook_url'                  => array( 'label' => __( 'Webhook URL', 'capsule' ), 'type' => 'url', 'required' => true ),
			'redirect_url'                 => array( 'label' => __( 'Redirect URL after submit', 'capsule' ), 'type' => 'url', 'required' => true ),
		);
	}
}

if ( ! function_exists( 'mbf_register_facebook_ads_meta_box' ) ) {
	/**
	 * Register admin meta box for editable Facebook ads page content.
	 *
	 * @return void
	 */
	function mbf_register_facebook_ads_meta_box() {
		add_meta_box(
			'mbf-facebook-ads-content',
			__( 'Facebook Ads Page Content', 'capsule' ),
			'mbf_render_facebook_ads_meta_box',
			'page',
			'normal',
			'high'
		);
	}
}
add_action( 'add_meta_boxes_page', 'mbf_register_facebook_ads_meta_box' );

if ( ! function_exists( 'mbf_render_facebook_ads_meta_box' ) ) {
	/**
	 * Render Facebook Ads page content fields.
	 *
	 * @param WP_Post $post Current page post.
	 * @return void
	 */
	function mbf_render_facebook_ads_meta_box( $post ) {
		if ( 'facebook-ads' !== $post->post_name && 'page-facebook-ads-course.php' !== get_page_template_slug( $post->ID ) ) {
			echo '<p>' . esc_html__( 'These fields are used on the /facebook-ads landing page. Set this page slug to "facebook-ads" or assign the Facebook Ads Course template.', 'capsule' ) . '</p>';
			return;
		}

		wp_nonce_field( 'mbf_facebook_ads_content_nonce', 'mbf_facebook_ads_content_nonce' );
		$fields = mbf_get_facebook_ads_admin_fields();

		echo '<p>' . esc_html__( 'Manage all /facebook-ads page text, media, CTA links, SEO values, webhook URL, and redirect URL here.', 'capsule' ) . '</p>';
		echo '<table class="form-table"><tbody>';

		foreach ( $fields as $key => $config ) {
			$value    = get_post_meta( $post->ID, $key, true );
			$is_image = 'image' === $config['type'];
			$required = ! empty( $config['required'] ) ? ' required' : '';

			echo '<tr>';
			echo '<th scope="row"><label for="' . esc_attr( $key ) . '">' . esc_html( $config['label'] ) . '</label></th>';
			echo '<td>';

			if ( 'textarea' === $config['type'] ) {
				echo '<textarea class="widefat" rows="3" id="' . esc_attr( $key ) . '" name="mbf_facebook_ads[' . esc_attr( $key ) . ']"' . $required . '>' . esc_textarea( $value ) . '</textarea>';
			} elseif ( $is_image ) {
				echo '<input type="url" class="regular-text mbf-image-url" id="' . esc_attr( $key ) . '" name="mbf_facebook_ads[' . esc_attr( $key ) . ']" value="' . esc_attr( $value ) . '" />';
				echo '<button type="button" class="button mbf-select-image" data-target="' . esc_attr( $key ) . '">' . esc_html__( 'Select Image', 'capsule' ) . '</button>';
				echo '<p><img src="' . esc_url( $value ) . '" alt="" style="max-width:120px;height:auto;" class="mbf-image-preview" /></p>';
			} else {
				$type_attr = in_array( $config['type'], array( 'url', 'text' ), true ) ? $config['type'] : 'text';
				echo '<input class="regular-text" type="' . esc_attr( $type_attr ) . '" id="' . esc_attr( $key ) . '" name="mbf_facebook_ads[' . esc_attr( $key ) . ']" value="' . esc_attr( $value ) . '"' . $required . ' />';
			}

			echo '</td>';
			echo '</tr>';
		}

		echo '</tbody></table>';
	}
}

if ( ! function_exists( 'mbf_facebook_ads_admin_assets' ) ) {
	/**
	 * Load media uploader script for facebook ads meta box.
	 *
	 * @param string $hook_suffix Current admin page.
	 * @return void
	 */
	function mbf_facebook_ads_admin_assets( $hook_suffix ) {
		if ( ! in_array( $hook_suffix, array( 'post.php', 'post-new.php' ), true ) ) {
			return;
		}

		wp_enqueue_media();
		wp_add_inline_script(
			'jquery-core',
			'jQuery(function($){$(".mbf-select-image").on("click", function(e){e.preventDefault(); var button=$(this); var target=$("#"+button.data("target")); var preview=button.closest("td").find(".mbf-image-preview"); var frame=wp.media({title:"Select image",button:{text:"Use image"},multiple:false}); frame.on("select", function(){var attachment=frame.state().get("selection").first().toJSON(); target.val(attachment.url); preview.attr("src", attachment.url);}); frame.open();});});'
		);
	}
}
add_action( 'admin_enqueue_scripts', 'mbf_facebook_ads_admin_assets' );

if ( ! function_exists( 'mbf_save_facebook_ads_meta_box' ) ) {
	/**
	 * Save Facebook ads landing content meta values.
	 *
	 * @param int $post_id Post ID.
	 * @return void
	 */
	function mbf_save_facebook_ads_meta_box( $post_id ) {
		if ( empty( $_POST['mbf_facebook_ads_content_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['mbf_facebook_ads_content_nonce'] ) ), 'mbf_facebook_ads_content_nonce' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_page', $post_id ) || empty( $_POST['mbf_facebook_ads'] ) || ! is_array( $_POST['mbf_facebook_ads'] ) ) {
			return;
		}

		$fields = mbf_get_facebook_ads_admin_fields();
		$input  = wp_unslash( $_POST['mbf_facebook_ads'] );

		foreach ( $fields as $key => $config ) {
			$value = isset( $input[ $key ] ) ? trim( (string) $input[ $key ] ) : '';

			if ( 'url' === $config['type'] || 'image' === $config['type'] ) {
				$value = '' !== $value ? esc_url_raw( $value ) : '';
			} elseif ( 'textarea' === $config['type'] ) {
				$value = sanitize_textarea_field( $value );
			} else {
				$value = sanitize_text_field( $value );
			}

			if ( ! empty( $config['required'] ) && '' === $value ) {
				continue;
			}

			if ( '' === $value ) {
				delete_post_meta( $post_id, $key );
			} else {
				update_post_meta( $post_id, $key, $value );
			}
		}
	}
}
add_action( 'save_post_page', 'mbf_save_facebook_ads_meta_box' );

/**
 * ==================================
 * Facebook Ads Landing Route
 * ==================================
 */

if ( ! function_exists( 'mbf_register_facebook_ads_route' ) ) {
	/**
	 * Register a public route for the Facebook Ads landing page.
	 *
	 * @return void
	 */
	function mbf_register_facebook_ads_route() {
		add_rewrite_rule( '^facebook-ads/?$', 'index.php?capsule_facebook_ads=1', 'top' );
	}
}
add_action( 'init', 'mbf_register_facebook_ads_route' );

if ( ! function_exists( 'mbf_register_facebook_ads_query_var' ) ) {
	/**
	 * Register query vars used by the custom Facebook Ads route.
	 *
	 * @param array $vars Existing public query vars.
	 * @return array
	 */
	function mbf_register_facebook_ads_query_var( $vars ) {
		$vars[] = 'capsule_facebook_ads';
		return $vars;
	}
}
add_filter( 'query_vars', 'mbf_register_facebook_ads_query_var' );

if ( ! function_exists( 'mbf_facebook_ads_template' ) ) {
	/**
	 * Load the Facebook Ads landing template when visiting /facebook-ads.
	 *
	 * @param string $template Default resolved template.
	 * @return string
	 */
	function mbf_facebook_ads_template( $template ) {
		if ( ! get_query_var( 'capsule_facebook_ads' ) ) {
			return $template;
		}

		if ( is_admin() ) {
			return $template;
		}

		$landing_template = locate_template( 'page-facebook-ads-course.php' );
		if ( ! empty( $landing_template ) ) {
			status_header( 200 );
			return $landing_template;
		}

		return $template;
	}
}
add_filter( 'template_include', 'mbf_facebook_ads_template', 99 );

if ( ! function_exists( 'mbf_flush_rewrite_rules_on_theme_switch' ) ) {
	/**
	 * Flush rewrite rules when switching to this theme.
	 *
	 * @return void
	 */
	function mbf_flush_rewrite_rules_on_theme_switch() {
		mbf_register_facebook_ads_route();
		flush_rewrite_rules();
	}
}
add_action( 'after_switch_theme', 'mbf_flush_rewrite_rules_on_theme_switch' );

if ( ! function_exists( 'mbf_maybe_flush_rewrite_rules' ) ) {
	/**
	 * Flush rewrite rules once after deployment updates.
	 *
	 * @return void
	 */
	function mbf_maybe_flush_rewrite_rules() {
		$flush_flag = 'capsule_facebook_ads_route_flushed';
		if ( get_option( $flush_flag ) ) {
			return;
		}

		mbf_register_facebook_ads_route();
		flush_rewrite_rules( false );
		update_option( $flush_flag, '1', false );
	}
}
add_action( 'init', 'mbf_maybe_flush_rewrite_rules', 20 );

/**
 * ==================================
 * Classic Editor for Specific Types
 * ==================================
 */

if ( ! function_exists( 'mbf_disable_block_editor_for_selected_post_types' ) ) {
	/**
	 * Disable the block editor for blog posts and pages only.
	 *
	 * @param bool   $use_block_editor Whether the block editor should be used.
	 * @param string $post_type        Current post type being checked.
	 * @return bool
	 */
	function mbf_disable_block_editor_for_selected_post_types( $use_block_editor, $post_type ) {
		if ( in_array( $post_type, array( 'post', 'page' ), true ) ) {
			return false;
		}

		return $use_block_editor;
	}
}
add_filter( 'use_block_editor_for_post_type', 'mbf_disable_block_editor_for_selected_post_types', 10, 2 );
