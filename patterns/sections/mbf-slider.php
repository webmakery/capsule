<?php
/**
 * Title: Slider
 * Slug: capsule/mbf-hero-slider
 * Description: Responsive Slider section.
 * Categories: mbfpatterns, banner
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Slider",
		"categories": [
			"mbfpatterns",
			"banner"
		],
		"patternName": "capsule/mbf-hero-slider",
		"mbf": {
			"settings": {
				"desktop-aspect-ratio": "21-9",
				"tablet-aspect-ratio": "16-9",
				"mobile-aspect-ratio": "3-4",
				"stretch-mobile": false,
				"text_animation": true,
				"pagination": true,
				"autoplay": true
			}
		}
	},
	"style": {
		"spacing": {
			"margin": {
				"top": "0",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0">
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
				"slug": "capsule/mbf-slider-item"
			} /-->
			<!-- wp:pattern {
				"slug": "capsule/mbf-slider-item"
			} /-->
			<!-- wp:pattern {
				"slug": "capsule/mbf-slider-item"
			} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
