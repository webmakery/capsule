<?php
/**
 * Title: Checkout Header
 * Slug: capsule/mbf-header-checkout
 * Categories: header
 * Block Types: core/template-part/header
 * Description: The simplified header used in the checkout page.
 */
?>

<!-- wp:group {
	"area": "header",
	"metadata": {
		"categories": [
			"header"
		],
		"patternName": "capsule/mbf-header-checkout",
		"name": "Checkout Header"
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group">
	<!-- wp:group {
		"align": "wide",
		"style": {
			"spacing": {
				"padding": {
					"bottom": "var:preset|spacing|20",
					"top": "var:preset|spacing|20"
				}
			},
			"dimensions": {
				"minHeight": "3.5rem"
			}
		},
		"layout": {
			"type": "flex",
			"justifyContent": "space-between"
		}
	} -->
	<div
	class="wp-block-group alignwide"
	style="
		min-height: 3.5rem;
		padding-top: var(--wp--preset--spacing--20);
		padding-bottom: var(--wp--preset--spacing--20);
	"
	>
		<!-- wp:pattern { "slug": "capsule/mbf-header-branding" } /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
