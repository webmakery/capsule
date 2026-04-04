<?php
/**
 * Title: Slider Item
 * Slug: capsule/mbf-slider-item
 * Description: A slider banner used in the Hero Slider section.
 * Categories: mbfpatterns, banner
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Slider Item",
		"patternName": "capsule/mbf-slider-item",
		"categories": [
			"mbfpatterns",
			"banner"
		]
	},
	"className": "is-type-mbf-slider__item",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group is-type-mbf-slider__item">
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
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group alignfull">
			<!-- wp:image {
				"id": 190,
				"sizeSlug": "full",
				"linkDestination": "none",
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
					class="wp-image-190"
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
			"align": "wide",
			"className": "is-style-section-4 is-style-section-overlay",
			"style": {
				"spacing": {
					"padding": {
						"top": "var:preset|spacing|130",
						"bottom": "var:preset|spacing|130",
						"left": "var:preset|spacing|110",
						"right": "var:preset|spacing|110"
					}
				}
			},
			"layout": {
				"type": "constrained",
				"justifyContent": "center"
			}
		} -->
		<div
			class="wp-block-group alignwide is-style-section-4 is-style-section-overlay"
			style="
				padding-top: var(--wp--preset--spacing--130);
				padding-right: var(--wp--preset--spacing--110);
				padding-bottom: var(--wp--preset--spacing--130);
				padding-left: var(--wp--preset--spacing--110);
			"
		>
			<!-- wp:group {
				"metadata": {
					"name": "Content Bottom"
				},
				"align": "wide",
				"className": "is-type-mbf-stick-bottom",
				"style": {
					"spacing": {
						"padding": {
							"right": "0",
							"bottom": "0",
							"left": "0",
							"top": "0"
						},
						"blockGap": "var:preset|spacing|20"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"verticalAlignment": "bottom",
					"justifyContent": "space-between"
				}
			} -->
			<div
				class="wp-block-group alignwide is-type-mbf-stick-bottom"
				style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
			>
				<!-- wp:group {
					"metadata": {
						"name": "Content"
					},
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|110"
						}
					},
					"layout": {
						"type": "constrained",
						"contentSize": "550px",
						"justifyContent": "left"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:heading {
						"style": {
							"typography": {
								"textTransform": "uppercase"
							}
						}
					} -->
					<h2 class="wp-block-heading" style="text-transform: uppercase"><?php echo esc_html__( 'The New Essentials: Minimal, Effortless, Yours', 'capsule' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {
							"className": "is-style-fill is-type-mbf-button-featured",
							"style": {
								"typography": {
									"textTransform": "uppercase",
									"fontStyle": "normal",
									"fontWeight": "800"
								}
							},
							"fontSize": "x-small"
						} -->
						<div class="wp-block-button is-style-fill is-type-mbf-button-featured">
							<a
								class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button"
								style="font-style: normal; font-weight: 800; text-transform: uppercase"
							><?php echo esc_html__( 'Shop Collection', 'capsule' ); ?></a>
						</div>
						<!-- /wp:button -->

						<!-- wp:button {
							"className": "is-type-mbf-button-featured is-style-mbf-button-secondary",
							"style": {
								"typography": {
									"textTransform": "uppercase",
									"fontStyle": "normal",
									"fontWeight": "800"
								}
							},
							"fontSize": "x-small"
						} -->
						<div class="wp-block-button is-type-mbf-button-featured is-style-mbf-button-secondary">
							<a
								class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button"
								style="font-style: normal; font-weight: 800; text-transform: uppercase"
							><?php echo esc_html__( 'View All items', 'capsule' ); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
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
