<?php
/**
 * Title: Search Button
 * Slug: capsule/mbf-search-button
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns"
		],
		"name": "Search Button",
		"patternName": "capsule/mbf-search-button"
	},
	"className":"mbf-hide-on-mobile",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group mbf-hide-on-mobile">
	<!-- wp:buttons {
		"layout": {
			"type": "flex",
			"justifyContent": "center"
		}
	} -->
	<div class="wp-block-buttons">
		<!-- wp:button {
			"className": "is-style-fill"
		} -->
		<div class="wp-block-button is-style-fill">
			<a class="wp-block-button__link wp-element-button">
				<?php echo esc_html__( 'Search', 'capsule' ); ?>
			</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
