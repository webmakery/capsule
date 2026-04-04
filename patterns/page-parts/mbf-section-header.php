<?php
/**
 * Title: Section Header
 * Slug: capsule/mbf-section-header
 * Description: Section Header
 * Categories: mbfpatterns
 * Inserter: no
 */
?>

<!-- wp:columns {
	"verticalAlignment": null,
	"metadata": {
		"name": "Section Header",
		"categories": [
			"mbfpatterns"
		],
		"patternName": "capsule/mbf-section-header"
	},
	"align": "wide",
	"className": "is-columns-adaptive-2",
	"style": {
		"spacing": {
			"margin": {
				"top": "0",
				"bottom": "0"
			}
		}
	}
} -->
<div class="wp-block-columns alignwide is-columns-adaptive-2" style="margin-top: 0; margin-bottom: 0">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {
			"metadata": {
				"name": "Section Heading"
			},
			"style": {
				"spacing": {
					"padding": {
						"right": "var:preset|spacing|100"
					}
				}
			},
			"layout": {
				"type": "constrained",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group" style="padding-right: var(--wp--preset--spacing--100)">
			<!-- wp:heading {
				"level": 3,
				"align": "wide",
				"style": {
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "0"
						}
					}
				}
			} -->
			<h3 class="wp-block-heading alignwide" style="margin-top: 0; margin-bottom: 0">
				<?php echo esc_html__( 'Bestsellers', 'capsule' ); ?>
			</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Description Content"
			},
			"className": "position-static",
			"layout": {
				"type": "constrained",
				"contentSize": "375px",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group position-static">
			<!-- wp:paragraph {
				"className": "has-medium-font-size",
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
				"fontSize": "small"
			} -->
			<p class="has-mbf-secondary-color has-text-color has-link-color has-small-font-size">
				<?php echo esc_html__( 'The most purchased styles across categories, chosen for design, function, and durability.', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {
		"verticalAlignment": "bottom"
	} -->
	<div class="wp-block-column is-vertically-aligned-bottom">
		<!-- wp:buttons {
			"style": {
				"spacing": {
					"margin": {
						"top": "0",
						"bottom": "0"
					}
				}
			},
			"layout": {
				"type": "flex",
				"verticalAlignment": "bottom",
				"justifyContent": "right"
			}
		} -->
		<div class="wp-block-buttons" style="margin-top: 0; margin-bottom: 0">
			<!-- wp:button {
				"className": "is-type-mbf-button-featured is-style-mbf-button-secondary",
				"style": {
					"spacing": {
						"padding": {
							"left": "0",
							"right": "0",
							"top": "0",
							"bottom": "0"
						}
					}
				}
			} -->
			<div class="wp-block-button is-type-mbf-button-featured is-style-mbf-button-secondary">
				<a
					class="wp-block-button__link wp-element-button"
					href="/"
					style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
				>
					<?php echo esc_html__( 'Shop all', 'capsule' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
