<?php
/**
 * Theme Demos
 *
 * @package Apparel
 */

/**
 * Register Demos of Theme
 */
function mbf_demos_list() {

	$plugins = array(
		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'path'     => 'woocommerce/woocommerce.php',
			'required' => true,
			'desc'     => esc_html__( 'An eCommerce toolkit that helps you sell anything. Beautifully.', 'capsule' ),
		),
		array(
			'name'     => 'Regenerate Thumbnails',
			'slug'     => 'regenerate-thumbnails',
			'path'     => 'regenerate-thumbnails/regenerate-thumbnails.php',
			'required' => false,
			'desc'     => esc_html__( 'Regenerate the thumbnails for one or more of your image uploads. Useful when changing their sizes or your theme.', 'capsule' ),
		),
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'path'     => 'contact-form-7/wp-contact-form-7.php',
			'required' => false,
			'desc'     => esc_html__( 'Just another contact form plugin. Simple but flexible.', 'capsule' ),
		),
	);

	$demos = array(
		'capsule' => array(
			'name'      => esc_html__( 'Capsule', 'capsule' ),
			'preview'   => 'https://capsule.merchantsbestfriends.com/',
			'thumbnail' => get_template_directory_uri() . '/screenshot.jpg',
			'plugins'   => $plugins,
			'import'    => array(
				'content'    => array(
					array(
						'label' => esc_html__( 'Homepage', 'capsule' ),
						'url'   => 'https://cloud.merchantsbestfriends.com/demo-content/capsule/homepage.xml',
						'type'  => 'homepage',
					),
					array(
						'label' => esc_html__( 'Blog', 'capsule' ),
						'url'   => 'https://cloud.merchantsbestfriends.com/demo-content/capsule/blog.xml',
						'type'  => 'blog',
					),
					array(
						'label' => esc_html__( 'Additional Pages', 'capsule' ),
						'url'   => 'https://cloud.merchantsbestfriends.com/demo-content/capsule/additional-pages.xml',
						'type'  => 'additional',
					),
					array(
						'label' => esc_html__( 'Demo Content', 'capsule' ),
						'url'   => 'https://cloud.merchantsbestfriends.com/demo-content/capsule/content.xml',
						'desc'  => esc_html__( 'Enabling this option will import demo posts, categories, and secondary pages. It\'s recommended to disable this option for existing', 'capsule' ),
					),
				),
			),
		),
	);

	return $demos;
}
add_filter( 'mbf_register_demos_list', 'mbf_demos_list' );

/**
 * Assign Homepage page during demo import.
 *
 * @param int   $post_id New post ID.
 * @param array $data    Raw data imported for the post.
 */
function mbf_hook_import_homepage( $post_id, $data ) {
	if ( isset( $data['post_title'] ) && 'Homepage' === $data['post_title'] ) {
		// Set show_on_front.
		update_option( 'show_on_front', 'page' );

		// Set page_on_front.
		update_option( 'page_on_front', (int) $post_id );
	}
}
add_action( 'wxr_importer.db.post', 'mbf_hook_import_homepage', 10, 2 );

/**
 * Assign Latest Posts page during demo import.
 *
 * @param int   $post_id New post ID.
 * @param array $data    Raw data imported for the post.
 */
function mbf_hook_import_latest_posts( $post_id, $data ) {
	if ( isset( $data['post_title'] ) && 'Blog' === $data['post_title'] ) {
		// Set show_on_front.
		update_option( 'show_on_front', 'page' );

		// Set page_for_posts.
		update_option( 'page_for_posts', (int) $post_id );
	}
}
add_action( 'wxr_importer.db.post', 'mbf_hook_import_latest_posts', 10, 2 );

/**
 * Assign Navigation menus during demo import.
 *
 * @param int   $post_id New post ID.
 * @param array $data    Raw data imported for the post.
 */
function mbf_hook_import_navigation() {

	$navs = array(
		100001 => array(
			'nav_title'      => 'Primary menu',
			'template_title' => 'Header',
		),
		200002 => array(
			'nav_title'      => 'Footer Menu',
			'template_title' => 'Footer',
		),
		300003 => array(
			'nav_title'      => 'Footer Bottom Menu',
			'template_title' => 'Footer',
		),
	);

	$template        = null;
	$content_updated = false;

	foreach ( $navs as $ref => $nav ) {
		if (
			isset( $data['post_title'] ) && $nav['template_title'] === $data['post_title'] &&
			isset( $data['post_type'] ) && 'wp_template_part' === $data['post_type'] &&
			isset( $data['post_status'] ) && 'publish' === $data['post_status']
		) {

			if ( null === $template ) {
				$template = get_post( $post_id );

				if ( ! $template ) {
					return;
				}
			}

			$nav_id = mbf_get_page_id_by_title( 'wp_navigation', $nav['nav_title'] );

			if ( ! $nav_id ) {
				continue;
			}

			$template->post_content = preg_replace(
				'/"ref"\s*:\s*' . preg_quote( (string) $ref, '/' ) . '\b/',
				'"ref":' . $nav_id,
				$template->post_content
			);

			$content_updated = true;
		}
	}

	if ( $content_updated ) {
		wp_update_post(
			wp_slash(
				array(
					'ID'           => $post_id,
					'post_content' => $template->post_content,
				)
			)
		);
	}
}
add_action( 'mbf_finish_import', 'mbf_hook_import_navigation', 10, 2 );

/**
 * Create Primary Menu navigation with actual site data after import.
 *
 * @param int   $post_id New post ID.
 * @param array $data    Raw data imported for the post.
 */
function mbf_create_primary_navigation( $post_id, $data ) {
	if ( 100001 !== $post_id || ! isset( $data['post_type'] ) || 'wp_navigation' !== $data['post_type'] ) {
		return;
	}

	if ( ! ( isset( $data['post_status'] ) && 'publish' === $data['post_status'] ) ) {
		return;
	}

	$menu_items   = array();
	$is_wc_active = class_exists( 'WooCommerce' );

	$menu_items[] = '<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom"} /-->';

	if ( $is_wc_active ) {
		$shop_page_id = wc_get_page_id( 'shop' );
		if ( $shop_page_id > 0 ) {
			$shop_url       = get_permalink( $shop_page_id );
			$product_cats   = get_terms(
				array(
					'taxonomy'   => 'product_cat',
					'hide_empty' => false,
					'number'     => 6,
					'orderby'    => 'name',
					'exclude'    => array( get_option( 'default_product_cat' ) ),
				)
			);
			$shop_submenu   = array();
			$shop_submenu[] = '<!-- wp:navigation-submenu {"label":"Shop All","type":"page","id":' . $shop_page_id . ',"url":"' . esc_url( $shop_url ) . '","kind":"post-type"} -->';

			if ( ! is_wp_error( $product_cats ) && ! empty( $product_cats ) ) {
				foreach ( $product_cats as $cat ) {
					$shop_submenu[] = '<!-- wp:navigation-link {"label":"' . esc_html( $cat->name ) . '","type":"product_cat","id":' . $cat->term_id . ',"url":"' . esc_url( get_term_link( $cat ) ) . '","kind":"taxonomy"} /-->';
				}
			}

			$shop_submenu[] = '<!-- /wp:navigation-submenu -->';
			$menu_items[]   = implode( "\n\n", $shop_submenu );
		}
	}

	$blog_page_id = get_option( 'page_for_posts' );
	if ( $blog_page_id ) {
		$menu_items[] = '<!-- wp:navigation-link {"label":"Blog","type":"page","id":' . $blog_page_id . ',"url":"' . esc_url( get_permalink( $blog_page_id ) ) . '","kind":"post-type"} /-->';
	}

	$pages_submenu   = array();
	$pages_submenu[] = '<!-- wp:navigation-submenu {"label":"Pages","url":"#","kind":"custom"} -->';

	if ( $is_wc_active ) {
		$wc_pages = array(
			'cart'      => 'Cart',
			'checkout'  => 'Checkout',
			'myaccount' => 'My account',
		);

		foreach ( $wc_pages as $page_key => $page_label ) {
			$page_id = wc_get_page_id( $page_key );
			if ( $page_id > 0 ) {
				$pages_submenu[] = '<!-- wp:navigation-link {"label":"' . $page_label . '","type":"page","id":' . $page_id . ',"url":"' . esc_url( get_permalink( $page_id ) ) . '","kind":"post-type"} /-->';
			}
		}
	}

	$custom_pages = array( 'About Us', 'Contacts' );
	foreach ( $custom_pages as $page_title ) {
		$page = get_page_by_title( $page_title, OBJECT, 'page' );
		if ( $page ) {
			$pages_submenu[] = '<!-- wp:navigation-link {"label":"' . esc_html( $page_title ) . '","type":"page","id":' . $page->ID . ',"url":"' . esc_url( get_permalink( $page ) ) . '","kind":"post-type"} /-->';
		}
	}

	$pages_submenu[] = '<!-- /wp:navigation-submenu -->';
	$menu_items[]    = implode( "\n\n", $pages_submenu );

	$menu_content = implode( "\n\n", $menu_items );

	wp_update_post(
		wp_slash(
			array(
				'ID'           => $post_id,
				'post_content' => $menu_content,
			)
		)
	);
}
add_action( 'wxr_importer.db.post', 'mbf_create_primary_navigation', 20, 2 );
