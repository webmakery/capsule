<?php
/**
 * Title: Social Links
 * Slug: capsule/mbf-social-links
 * Inserter: no
 */
?>

<!-- wp:group {
	"lock": {
		"move": true,
		"remove": true
	},
	"metadata": {
		"name": "Social Links",
		"patternName": "capsule/mbf-social-links"
	},
	"align": "full",
	"style": {
		"spacing": {
			"padding": {
				"right": "0",
				"left": "0"
			},
			"blockGap": "var:preset|spacing|30"
		}
	},
	"layout": {
		"type": "flex",
		"flexWrap": "wrap",
		"justifyContent": "left"
	}
} -->
<div class="wp-block-group alignfull" style="padding-right: 0; padding-left: 0">
	<!-- wp:paragraph {
		"fontSize": "medium"
	} -->
	<p class="has-medium-font-size">
		<?php echo esc_html__( 'Stay Tuned', 'capsule' ); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {
		"metadata": {
			"name": "Social Icons"
		},
		"style": {
			"spacing": {
				"blockGap": "2px"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "nowrap",
			"justifyContent": "center"
		}
	} -->
	<div class="wp-block-group">
		<!-- wp:image {
			"lightbox": {
				"enabled": false
			},
			"id": 1144,
			"width": "40px",
			"height": "40px",
			"scale": "cover",
			"sizeSlug": "full",
			"linkDestination": "custom"
		} -->
		<figure class="wp-block-image size-full is-resized">
			<a href="/">
				<img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-instagram.webp"
					alt="Instagram"
					class="wp-image-1144"
					style="object-fit: cover; width: 40px; height: 40px"
				/>
			</a>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {
			"lightbox": {
				"enabled": false
			},
			"id": 215,
			"width": "40px",
			"height": "40px",
			"scale": "cover",
			"sizeSlug": "full",
			"linkDestination": "custom"
		} -->
		<figure class="wp-block-image size-full is-resized">
			<a href="/">
				<img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-threads.webp"
					alt="Threads"
					class="wp-image-215"
					style="object-fit: cover; width: 40px; height: 40px"
				/>
			</a>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {
			"lightbox": {
				"enabled": false
			},
			"id": 216,
			"width": "40px",
			"height": "40px",
			"scale": "cover",
			"sizeSlug": "full",
			"linkDestination": "custom"
		} -->
		<figure class="wp-block-image size-full is-resized">
			<a href="/">
				<img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-x.webp"
					alt="X"
					class="wp-image-216"
					style="object-fit: cover; width: 40px; height: 40px"
				/>
			</a>
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
