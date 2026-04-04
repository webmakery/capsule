<?php
/**
 * Title: Search Popup
 * Slug: capsule/mbf-search-popup
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns"
		],
		"name": "Search Popup",
		"patternName": "capsule/mbf-search-popup"
	},
	"layout": {
		"type": "constrained",
		"justifyContent": "left"
	}
} -->
<div class="wp-block-group">
	<!-- wp:group {
		"metadata": {
			"name": "Inner Content"
		},
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|40"
			}
		},
		"layout": {
			"type": "constrained",
			"contentSize": "100%",
			"justifyContent": "left"
		}
	} -->
	<div class="wp-block-group">
		<!-- wp:group {
			"metadata": {
				"name": "Search Form"
			},
			"layout": {
				"type": "constrained",
				"contentSize": "100%",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:search {
				"label": "<?php echo esc_html__( 'What are you looking for?', 'capsule' ); ?>",
				"showLabel": false,
				"placeholder": "<?php echo esc_html__( 'Search', 'capsule' ); ?>",
				"buttonText": "<?php echo esc_html__( 'Search', 'capsule' ); ?>",
				"buttonPosition": "button-inside",
				"buttonUseIcon": true,
				"align": "center"
			} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
