<?php
/**
 * Title: Shop Categories
 * Slug: capsule/mbf-product-catalog-terms
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"patternName": "capsule/mbf-product-catalog-terms",
		"name": "Shop Categories"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|120",
				"bottom": "var:preset|spacing|120"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group alignwide"
	style="margin-top: var(--wp--preset--spacing--120); margin-bottom: var(--wp--preset--spacing--120)"
>
	<!-- wp:terms-query {
		"termQuery": {
			"perPage": 6,
			"taxonomy": "product_cat",
			"order": "asc",
			"orderBy": "name",
			"include": [],
			"hideEmpty": true,
			"showNested": false,
			"inherit": false
		},
		"align": "wide"
	} -->
	<div class="wp-block-terms-query alignwide">
		<!-- wp:term-template {
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|0"
				}
			}
		} -->

		<!-- wp:term-name {
			"isLink": true,
			"style": {
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|mbf-secondary"
						},
						":hover": {
							"color": {
								"text": "var:preset|color|mbf-primary"
							}
						}
					}
				},
				"typography": {
					"textTransform": "uppercase",
					"textDecoration": "none",
					"fontStyle": "normal",
					"fontWeight": "600"
				}
			},
			"textColor": "mbf-secondary",
			"fontSize": "larger"
		} /-->
		<!-- /wp:term-template -->
	</div>
	<!-- /wp:terms-query -->
</div>
<!-- /wp:group -->
