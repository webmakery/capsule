<?php
/**
 * Title: Testimonials
 * Slug: capsule/mbf-testimonials
 * Description: Responsive carousel section with custom reviews
 * Categories: mbfpatterns, testimonials, reviews
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Testimonials",
		"categories": [
			"mbfpatterns",
			"testimonials",
			"reviews"
		],
		"patternName": "capsule/mbf-testimonials"
	},
	"style": {
		"spacing": {
			"margin": {
				"top": "0",
				"bottom": "0"
			}
		}
	},
	"align": "wide",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
	<!-- wp:group {
		"metadata": {
			"name": "Section Header"
		},
		"align": "full",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|30",
				"margin": {
					"top": "0",
					"bottom": "var:preset|spacing|70"
				}
			}
		},
		"layout": {
			"type": "flex",
			"orientation": "vertical",
			"justifyContent": "left"
		}
	} -->
	<div class="wp-block-group alignfull" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--70)">
		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": false
			},
			"metadata": {
				"name": "Heading Container"
			},
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:heading {
				"textAlign": "center",
				"level": 3
			} -->
			<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Loved in Real Life', 'capsule' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

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
				"name": "Slider Main"
			},
			"align": "full",
			"className": "is-type-mbf-slider",
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group alignfull is-type-mbf-slider">
			<!-- wp:group {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Slider Wrapper"
				},
				"align": "full",
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|10"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap"
				}
			} -->
			<div class="wp-block-group alignfull">
				<!-- wp:pattern {
					"slug": "capsule/mbf-testimonial-card"
				} /-->
				<!-- wp:pattern {
					"slug": "capsule/mbf-testimonial-card"
				} /-->
				<!-- wp:pattern {
					"slug": "capsule/mbf-testimonial-card"
				} /-->
				<!-- wp:pattern {
					"slug": "capsule/mbf-testimonial-card"
				} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
