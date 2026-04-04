<?php
/**
 * Title: Our Story
 * Slug: capsule/mbf-our-story
 * Description: Our Story
 * Categories: mbfpatterns
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Our Story",
		"categories": [
			"page",
			"mbfpages"
		],
		"patternName": "capsule/mbf-our-story"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|160",
				"bottom": "var:preset|spacing|160"
			}
		}
	},
	"layout": {
		"type": "constrained",
		"contentSize": "1257px",
		"justifyContent": "left"
	}
} -->
<div
	class="wp-block-group alignwide"
	style="margin-top: var(--wp--preset--spacing--160); margin-bottom: var(--wp--preset--spacing--160)"
>
	<!-- wp:group {
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|120"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "wrap",
			"verticalAlignment": "top",
			"justifyContent": "space-between"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {
			"metadata": {
				"name": "Story Heading"
			},
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|30"
				}
			},
			"layout": {
				"type": "constrained",
				"contentSize": "557px",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {
				"className": "is-type-mbf-label",
				"style": {
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "0",
							"left": "0",
							"right": "0"
						}
					}
				},
				"fontSize": "x-small",
				"fontFamily": "base"
			} -->
			<p
				class="is-type-mbf-label has-base-font-family has-x-small-font-size"
				style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0"
			>
				<?php esc_html_e( 'Our Story', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {
				"level": 1,
				"style": {
					"typography": {
						"textTransform": "uppercase"
					}
				}
			} -->
			<h1 class="wp-block-heading" style="text-transform: uppercase">
				<?php esc_html_e( 'BUILT FOR DAILY WEAR. DESIGNED WITH CLEAR INTENT. ', 'capsule' ); ?>
			</h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Story Content"
			},
			"layout": {
				"type": "constrained",
				"contentSize": "556px"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"metadata": {
					"name": "Images"
				},
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|10",
						"margin": {
							"top": "var:preset|spacing|110",
							"bottom": "var:preset|spacing|80"
						}
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap"
				}
			} -->
			<div
				class="wp-block-group"
				style="margin-top: var(--wp--preset--spacing--110); margin-bottom: var(--wp--preset--spacing--80)"
			>
				<!-- wp:image {
					"id": 325,
					"aspectRatio": "3/4",
					"scale": "cover",
					"sizeSlug": "full",
					"linkDestination": "none"
				} -->
				<figure class="wp-block-image size-full">
					<img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
						alt=""
						class="wp-image-325"
						style="aspect-ratio: 3/4; object-fit: cover"
					/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:image {
					"id": 324,
					"aspectRatio": "3/4",
					"scale": "cover",
					"sizeSlug": "full",
					"linkDestination": "none"
				} -->
				<figure class="wp-block-image size-full">
					<img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
						alt=""
						class="wp-image-324"
						style="aspect-ratio: 3/4; object-fit: cover"
					/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:image {
					"id": 323,
					"aspectRatio": "3/4",
					"scale": "cover",
					"sizeSlug": "full",
					"linkDestination": "none"
				} -->
				<figure class="wp-block-image size-full">
					<img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
						alt=""
						class="wp-image-323"
						style="aspect-ratio: 3/4; object-fit: cover"
					/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {
				"level": 4
			} -->
			<h4 class="wp-block-heading">
				<?php esc_html_e( 'We create modern apparel shaped by structure, movement, and everyday use. Our collections
				focus on clean silhouettes, practical design, and pieces built to fit seamlessly into real routines.', 'capsule'
				); ?>
			</h4>
			<!-- /wp:heading -->

			<!-- wp:group {
				"metadata": {
					"name": "Paragraphs"
				},
				"layout": {
					"type": "constrained",
					"contentSize": "480px",
					"justifyContent": "left"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {
					"style": {
						"spacing": {
							"margin": {
								"top": "var:preset|spacing|50"
							}
						}
					},
					"fontFamily": "base"
				} -->
				<p class="has-base-font-family" style="margin-top: var(--wp--preset--spacing--50)">
					<?php esc_html_e( 'From the beginning, our goal has been simple: develop clothing that works consistently
					across different settings. Each release is developed around strong core categories — tops, bottoms, footwear,
					and accessories — designed to function as part of a complete wardrobe rather than standalone statements.',
					'capsule' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {
					"style": {
						"spacing": {
							"margin": {
								"top": "var:preset|spacing|50"
							}
						}
					},
					"fontFamily": "base"
				} -->
				<p class="has-base-font-family" style="margin-top: var(--wp--preset--spacing--50)">
					<?php esc_html_e( 'Our approach combines updated seasonal direction with reliable everyday staples. We refine
					fit, streamline design, and focus on versatility so each piece can transition easily from day to night. The
					result is a collection built for repeat wear, steady rotation, and long-term relevance. ', 'capsule' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
