<?php
/**
 * Title: About-Us page with store information
 * Slug: capsule/mbf-about-us
 * Description: About-Us Page
 * Categories: page, mbfpages
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: A page template for the About-Us page.
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "About-Us page with store information",
		"categories": [
			"page",
			"mbfpages"
		],
		"patternName": "capsule/mbf-about-us"
	},
	"align": "full",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {
			"metadata": {
				"name": "Banner",
				"categories": [
					"mbfpatterns",
					"banner"
				],
				"patternName": "capsule/mbf-banner",
				"mbf": {
					"settings": {
						"desktop-aspect-ratio": "3-1",
						"tablet-aspect-ratio": "3-1",
						"mobile-aspect-ratio": "3-4",
						"stretch-mobile": false
					}
				}
			},
			"align": "full",
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group alignfull">
			<!-- wp:group {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Outer Container"
				},
				"align": "full",
				"layout": {
					"type": "constrained"
				}
			} -->
			<div class="wp-block-group alignfull">
				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": true
					},
					"metadata": {
						"name": "Thumbnail"
					},
					"align": "full",
					"className": "is-style-section-4",
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group alignfull is-style-section-4">
					<!-- wp:image {
						"lightbox": {
							"enabled": false
						},
						"id": 194,
						"sizeSlug": "full",
						"linkDestination": "custom",
						"lock": {
							"move": true,
							"remove": true
						},
						"align": "full"
					} -->
					<figure class="wp-block-image alignfull size-full">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
							alt=""
							class="wp-image-194"
						/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": true
					},
					"metadata": {
						"name": "Overlay Content"
					},
					"align": "full",
					"className": "is-style-section-4",
					"style": {
						"spacing": {
							"padding": {
								"top": "var:preset|spacing|110",
								"bottom": "var:preset|spacing|110",
								"left": "var:preset|spacing|110",
								"right": "var:preset|spacing|110"
							}
						},
						"color": {
							"background": "#00000000"
						}
					},
					"layout": {
						"type": "constrained",
						"justifyContent": "center"
					}
				} -->
				<div
					class="wp-block-group alignfull is-style-section-4 has-background"
					style="
						background-color: #00000000;
						padding-top: var(--wp--preset--spacing--110);
						padding-right: var(--wp--preset--spacing--110);
						padding-bottom: var(--wp--preset--spacing--110);
						padding-left: var(--wp--preset--spacing--110);
					"
				>
					<!-- wp:group {
						"lock": {
							"move": true,
							"remove": false
						},
						"metadata": {
							"name": "Centered Content"
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group"></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	<!-- wp:pattern {
		"slug": "capsule/mbf-our-story"
	} /-->

	<!-- wp:pattern {
		"slug": "capsule/mbf-about-banner"
	} /-->

	<!-- wp:pattern {
		"slug": "capsule/mbf-faq"
	} /-->
</div>
<!-- /wp:group -->
