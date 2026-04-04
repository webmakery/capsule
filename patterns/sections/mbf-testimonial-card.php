<?php
/**
 * Title: Testimonial Card
 * Slug: capsule/mbf-testimonial-card
 * Description: A review card used in the Testimonials carousel section.
 * Categories: mbfpatterns, testimonials, reviews
 */
?>

<!-- wp:columns {
	"verticalAlignment": null,
	"isStackedOnMobile": false,
	"metadata": {
		"name": "Testimonial Card",
		"categories": [
			"mbfpatterns",
			"testimonials",
			"reviews"
		],
		"patternName": "capsule/mbf-testimonial-card"
	},
	"className": "is-type-mbf-slider__item",
	"style": {
		"spacing": {
			"margin": {
				"top": "0",
				"bottom": "0"
			},
			"padding": {
				"top": "var:preset|spacing|120",
				"bottom": "var:preset|spacing|120",
				"left": "var:preset|spacing|120",
				"right": "var:preset|spacing|120"
			}
		}
	},
	"backgroundColor": "mbf-layout-background"
} -->
<div
	class="wp-block-columns is-not-stacked-on-mobile is-type-mbf-slider__item has-mbf-layout-background-background-color has-background"
	style="
		margin-top: 0;
		margin-bottom: 0;
		padding-top: var(--wp--preset--spacing--120);
		padding-right: var(--wp--preset--spacing--120);
		padding-bottom: var(--wp--preset--spacing--120);
		padding-left: var(--wp--preset--spacing--120);
	"
>
	<!-- wp:column {
		"verticalAlignment": "top",
		"lock": {
			"move": false,
			"remove": true
		},
		"metadata": {
			"name": "Review Content"
		}
	} -->
	<div class="wp-block-column is-vertically-aligned-top">
		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Review Content Inner"
			},
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|40"
				}
			},
			"layout": {
				"type": "constrained",
				"contentSize": "516px",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Review Title"
				},
				"style": {
					"elements": {
						"link": {
							"color": {
								"text": "var:preset|color|mbf-secondary"
							}
						}
					}
				},
				"textColor": "mbf-secondary",
				"fontSize": "medium",
				"fontFamily": "base"
			} -->
			<p class="has-mbf-secondary-color has-text-color has-link-color has-base-font-family has-medium-font-size">
				<?php echo esc_html__( 'Review Title', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {
				"lock": {
					"move": true,
					"remove": true
				},
				"style": {
					"spacing": {
						"margin": {
							"top": "var:preset|spacing|30"
						}
					}
				},
				"fontSize": "large"
			} -->
			<p class="has-large-font-size" style="margin-top: var(--wp--preset--spacing--30)">
				<?php echo esc_html__( 'Review text', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Review Author"
				},
				"style": {
					"elements": {
						"link": {
							"color": {
								"text": "var:preset|color|mbf-secondary"
							}
						}
					},
					"spacing": {
						"margin": {
							"top": "var:preset|spacing|160"
						}
					}
				},
				"textColor": "mbf-secondary",
				"fontSize": "small"
			} -->
			<p
				class="has-mbf-secondary-color has-text-color has-link-color has-small-font-size"
				style="margin-top: var(--wp--preset--spacing--160)"
			>
				<?php echo esc_html__( 'Review Author', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {
		"verticalAlignment": "bottom",
		"width": "80px",
		"lock": {
			"move": false,
			"remove": true
		},
		"metadata": {
			"name": "Review Image"
		}
	} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis: 80px">
		<!-- wp:image {
			"id": 158,
			"width": "120px",
			"height": "120px",
			"scale": "cover",
			"sizeSlug": "full",
			"linkDestination": "none",
			"lock": {
				"move": true,
				"remove": true
			}
		} -->
		<figure class="wp-block-image size-full is-resized">
			<img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
				alt=""
				class="wp-image-158"
				style="object-fit: cover; width: 120px; height: 120px"
			/>
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
