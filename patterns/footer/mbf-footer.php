<?php
/**
 * Title: Footer
 * Slug: capsule/mbf-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: The site footer with logo, description and navigation.
 */

?>

<!-- wp:pattern {
	"slug": "capsule/mbf-advantages"
} /-->

<!-- wp:group {
	"metadata": {
		"categories": [
			"footer"
		],
		"patternName": "capsule/mbf-footer",
		"name": "Footer"
	},
	"align": "full",
	"className": "is-style-section-primary",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|160",
				"bottom": "0"
			},
			"padding": {
				"top": "var:preset|spacing|140",
				"bottom": "var:preset|spacing|140"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group alignfull is-style-section-primary"
	style="
		margin-top: var(--wp--preset--spacing--160);
		margin-bottom: 0;
		padding-top: var(--wp--preset--spacing--140);
		padding-bottom: var(--wp--preset--spacing--140);
	"
>
	<!-- wp:group {
		"lock": {
			"move": true,
			"remove": true
		},
		"metadata": {
			"name": "Footer Outter Container"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"padding": {
					"top": "0",
					"bottom": "0",
					"left": "0",
					"right": "0"
				}
			}
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div class="wp-block-group alignwide" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
		<!-- wp:group {
			"metadata": {
				"name": "Footer Top"
			},
			"align": "wide",
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|80"
				}
			},
			"layout": {
				"type": "flex",
				"flexWrap": "wrap",
				"justifyContent": "space-between",
				"verticalAlignment": "top"
			}
		} -->
		<div class="wp-block-group alignwide">
			<!-- wp:pattern {
				"slug": "capsule/mbf-footer-content"
			} /-->
			<!-- wp:pattern {
				"slug": "capsule/mbf-footer-columns"
			} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Footer Bottom"
			},
			"align": "wide",
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|80",
					"margin": {
						"top": "var:preset|spacing|150"
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
		<div class="wp-block-group alignwide" style="margin-top: var(--wp--preset--spacing--150)">
			<!-- wp:pattern {
				"slug": "capsule/mbf-footer-copyright"
			} /-->

			<!-- wp:pattern {
				"slug": "capsule/mbf-footer-bottom-right"
			} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
