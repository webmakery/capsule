<?php
/**
 * Title: Checkout Heading
 * Slug: capsule/mbf-checkout-heading
 * Inserter: no
 */

?>

<!-- wp:group {
	"metadata": {
		"patternName": "capsule/mbf-checkout-heading",
		"name": "Checkout Heading"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "0",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "default"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
	<!-- wp:heading {
		"level": 1,
		"style": {
			"spacing": {
				"margin": {
					"top": "var:preset|spacing|110",
					"bottom": "0"
				}
			}
		}
	} -->
	<h1
		class="wp-block-heading "
		style="margin-top: var(--wp--preset--spacing--110); margin-bottom: 0"
	>
		<?php echo esc_html__( 'Checkout', 'capsule' ); ?>
	</h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
