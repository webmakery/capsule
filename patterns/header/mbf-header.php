<?php
/**
 * Title: Header
 * Slug: capsule/mbf-header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: The site header.
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"header"
		],
		"patternName": "capsule/mbf-header",
		"name": "Header"
	},
	"className": "is-style-section-default",
	"style": {
		"spacing": {
			"blockGap": "0",
			"padding": {
				"top": "0",
				"bottom": "0"
			}
		},
		"border": {
			"bottom": {
				"color": "var:preset|color|mbf-border",
				"width": "1px"
			},
			"top": {},
			"right": {},
			"left": {}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group is-style-section-default"
	style="
		border-bottom-color: var(--wp--preset--color--mbf-border);
		border-bottom-width: 1px;
		padding-top: 0;
		padding-bottom: 0;
	"
>
	<!-- wp:group {
		"metadata": {
			"name": "Header Main"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "0",
				"padding": {
					"top": "var:preset|spacing|60",
					"bottom": "var:preset|spacing|60",
					"right": "0",
					"left": "0"
				}
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "wrap",
			"justifyContent": "space-between",
			"verticalAlignment": "center"
		}
	} -->
	<div
		class="wp-block-group alignwide"
		style="
			padding-top: var(--wp--preset--spacing--60);
			padding-right: 0;
			padding-bottom: var(--wp--preset--spacing--60);
			padding-left: 0;
		"
	>
		<!-- wp:pattern {
			"slug": "capsule/mbf-header-col-left"
		} /-->
		<!-- wp:pattern {
			"slug": "capsule/mbf-header-col-center"
		} /-->
		<!-- wp:pattern {
			"slug": "capsule/mbf-header-col-right"
		} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
