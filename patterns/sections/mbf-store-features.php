<?php
/**
 * Title: Store features with icons
 * Slug: capsule/mbf-store-features
 * Categories: mbfpatterns
 * Keywords: about, text, media
 * Description: A section with store featured services.
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Small store features row with icons",
		"categories": [
			"mbfpatterns"
		],
		"patternName": "capsule/mbf-store-features"
	},
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|40"
		}
	},
	"layout": {
		"type": "flex",
		"orientation": "vertical"
	}
} -->
<div class="wp-block-group">
	<!-- wp:group {
		"metadata": {
			"name": "Feature Wrapper"
		},
		"layout": {
			"type": "flex",
			"flexWrap": "nowrap",
			"justifyContent": "left"
		}
	} -->
	<div class="wp-block-group">
		<!-- wp:group {
			"metadata": {
				"name": "Feature Content"
			},
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|10"
				}
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"verticalAlignment": "center"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"layout": {
					"type": "constrained"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {
					"className": "has-x-small-font-size"
				} -->
				<p class="has-x-small-font-size"><?php echo esc_html__( 'Free Shipping on All Orders Over $200', 'capsule' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
