<?php
/**
 * Title: Page
 * Slug: capsule/mbf-page
 * Categories: page, mbfpages
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: A template for a website page.
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Page Title"
	},
	"style": {
		"spacing": {
			"blockGap": "0",
			"margin": {
				"top": "0",
				"bottom": "var:preset|spacing|110"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--110)">
	<!-- wp:post-title {
		"level": 1,
		"align": "wide",
		"style": {
			"typography": {
				"textTransform": "uppercase"
			}
		},
		"fontSize": "xxx-large"
	} /-->

	<!-- wp:post-featured-image {
		"style": {
			"spacing": {
				"margin": {
					"top": "var:preset|spacing|120",
					"bottom": "0"
				}
			},
			"border": {
				"radius": {
					"topLeft": "4px",
					"topRight": "4px",
					"bottomLeft": "4px",
					"bottomRight": "4px"
				}
			}
		}
	} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {
	"metadata": {
		"name": "Content Container"
	},
	"align": "full",
	"layout": {
		"type": "constrained",
		"contentSize": "694px",
		"wideSize": "1680px"
	}
} -->
<div class="wp-block-group alignfull">
	<!-- wp:post-content {
		"align": "wide",
		"layout": {
			"type": "constrained",
			"justifyContent": "left"
		}
	} /-->
</div>
<!-- /wp:group -->
