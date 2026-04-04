<?php
/**
 * Title: Small Banner
 * Slug: capsule/mbf-banner-small
 * Description: Rresponsive banner section
 * Categories: mbfpatterns, banner
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Small Banner",
		"categories": [
			"mbfpatterns",
			"banner"
		],
		"patternName": "capsule/mbf-banner-small",
		"mbf": {
			"settings": {
				"desktop-aspect-ratio": "3-4",
				"tablet-aspect-ratio": "3-4",
				"mobile-aspect-ratio": "3-4",
				"stretch-mobile": false,
				"text_animation": true
			}
		}
	},
	"align": "full",
	"style": {
		"border": {
			"radius": {
				"topLeft": "4px",
				"topRight": "4px",
				"bottomLeft": "4px",
				"bottomRight": "4px"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group alignfull"
	style="
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
	"
>
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
				"id": 187,
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
					class="wp-image-187"
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
			"className": "is-style-section-4 is-style-section-overlay",
			"style": {
				"spacing": {
					"padding": {
						"top": "var:preset|spacing|100",
						"bottom": "var:preset|spacing|100",
						"left": "var:preset|spacing|100",
						"right": "var:preset|spacing|100"
					}
				}
			},
			"backgroundColor": "mbf-overlay",
			"layout": {
				"type": "constrained",
				"justifyContent": "center"
			}
		} -->
		<div
			class="wp-block-group alignfull is-style-section-4 is-style-section-overlay has-mbf-overlay-background-color has-background"
			style="
				padding-top: var(--wp--preset--spacing--100);
				padding-right: var(--wp--preset--spacing--100);
				padding-bottom: var(--wp--preset--spacing--100);
				padding-left: var(--wp--preset--spacing--100);
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
				"align": "wide",
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"orientation": "vertical",
					"verticalAlignment": "space-between",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {
					"metadata": {
						"name": "Content Top"
					},
					"layout": {
						"type": "constrained",
						"justifyContent": "left"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:group {
						"metadata": {
							"name": "Label"
						},
						"layout": {
							"type": "constrained",
							"contentSize": "375px",
							"justifyContent": "left"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {
							"align": "center",
							"className": "is-type-mbf-label",
							"fontSize": "x-small",
							"fontFamily": "base"
						} -->
						<p class="has-text-align-center is-type-mbf-label has-base-font-family has-x-small-font-size"><?php esc_html_e( 'New Drop', 'capsule' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content Center"
					},
					"className": "is-type-mbf-stick-bottom",
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group is-type-mbf-stick-bottom">
					<!-- wp:group {
						"metadata": {
							"name": "Heading"
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:heading {
							"level": 4
						} -->
						<h4 class="wp-block-heading"><?php esc_html_e( 'The New Essentials: Minimal, Effortless, Yours', 'capsule' ); ?></h4>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
