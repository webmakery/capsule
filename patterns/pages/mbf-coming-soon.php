<?php
/**
 * Title: Coming Soon
 * Slug: capsule/mbf-coming-soon
 * Categories: woo-commerce, mbfpages
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: Coming soon page pattern.
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"woo-commerce",
			"mbfpages"
		],
		"patternName": "capsule/mbf-coming-soon",
		"name": "Coming Soon"
	},
	"align": "full",
	"className": "alignfull is-style-default",
	"style": {
		"spacing": {
			"padding": {
				"right": "0",
				"left": "0",
				"top": "0",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group alignfull is-style-default"
	style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
>
	<!-- wp:group {
		"metadata": {
			"name": "Inner Content"
		},
		"align": "full",
		"className": "is-style-section-4",
		"style": {
			"spacing": {
				"padding": {
					"top": "0",
					"bottom": "0",
					"left": "0",
					"right": "0"
				},
				"blockGap": "var:preset|spacing|20"
			},
			"dimensions": {
				"minHeight": "100%"
			},
			"background": {
				"backgroundImage": {
					"url": "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp",
					"id": 612,
					"source": "file",
					"title": "2f90f8a042af59fe34a51cabbed58b60531aa5cb"
				},
				"backgroundSize": "cover"
			}
		},
		"gradient": "mbf-gradient",
		"layout": {
			"type": "flex",
			"orientation": "vertical",
			"justifyContent": "center",
			"verticalAlignment": "center"
		}
	} -->
	<div
		class="wp-block-group alignfull is-style-section-4 has-mbf-gradient-gradient-background has-background"
		style="min-height: 100%; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
	>
		<!-- wp:group {
			"className": "is-style-default",
			"layout": {
				"type": "constrained",
				"contentSize": "230px"
			}
		} -->
		<div class="wp-block-group is-style-default">
			<!-- wp:heading {
				"textAlign": "center",
				"level": 1,
				"style": {
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "var:preset|spacing|20"
						}
					}
				}
			} -->
			<h1
				class="wp-block-heading has-text-align-center"
				style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--20)"
			>
				<?php echo esc_html__( 'Coming Soon', 'capsule' ); ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {
				"align": "center",
				"style": {
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "0"
						}
					},
					"typography": {
						"fontStyle": "normal",
						"fontWeight": "400"
					}
				},
				"fontSize": "x-medium",

			} -->
			<p
				class="has-text-align-center  has-x-medium-font-size"
				style="margin-top: 0; margin-bottom: 0; font-style: normal; font-weight: 400"
			>
				<?php echo esc_html__( 'Our Store is in the works and will be launching soon', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
