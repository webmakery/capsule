<?php
/**
 * Title: Blog Home Header
 * Slug: capsule/mbf-bloghome-header
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Blog Home Header",
		"patternName": "capsule/mbf-bloghome-header"
	},
	"align": "full",
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|20"
		}
	},
	"layout": {
		"type": "constrained",
		"contentSize": ""
	}
} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {
		"metadata": {
			"name": "Inner Container"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|20",
				"margin": {
					"top": "0",
					"bottom": "0"
				}
			}
		},
		"layout": {
			"type": "flex",
			"orientation": "vertical"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
		<!-- wp:heading {
			"level": 1,
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Heading"
			}
		} -->
		<h1 class="wp-block-heading"><?php echo esc_html__( 'Blog', 'capsule' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Subheading"
			},
			"style": {
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|mbf-secondary"
						}
					}
				},
				"typography": {
					"fontStyle": "normal",
					"fontWeight": "400"
				}
			},
			"textColor": "mbf-secondary",
			"fontSize": "medium"
		} -->
		<p
			class="has-mbf-secondary-color has-text-color has-link-color has-medium-font-size"
			style="font-style: normal; font-weight: 400"
		>
			<?php
			echo esc_html__(
				'Stay updated with the latest trends, reviews, and innovations in the tech world.',
				'capsule'
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
