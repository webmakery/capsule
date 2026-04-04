<?php
/**
 * Title: Footer Copyright
 * Slug: capsule/mbf-footer-copyright
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Footer Copyright",
		"patternName": "capsule/mbf-footer-copyright"
	},
	"align": "full",
	"style": {
		"spacing": {
			"padding": {
				"right": "0",
				"left": "0"
			},
			"blockGap": "var:preset|spacing|40"
		}
	},
	"layout": {
		"type": "flex",
		"flexWrap": "wrap",
		"justifyContent": "right"
	}
} -->
<div class="wp-block-group alignfull" style="padding-right: 0; padding-left: 0">
	<!-- wp:paragraph {
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
		"fontSize": "x-small"
	} -->
	<p class="has-mbf-secondary-color has-text-color has-link-color has-x-small-font-size">
		<?php echo esc_html__( '© 2026 — Capsule. All Rights Reserved.', 'capsule' ); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
