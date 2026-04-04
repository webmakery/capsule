<?php
/**
 * Title: 404
 * Slug: capsule/mbf-404
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns"
		],
		"name": "Page not found",
		"patternName": "capsule/mbf-404"
	},
	"align": "full",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|160",
				"bottom": "var:preset|spacing|130"
			}
		}
	},
	"layout": {
		"type": "constrained",
		"contentSize": "560px"
	}
} -->
<div
	class="wp-block-group alignfull"
	style="margin-top: var(--wp--preset--spacing--160); margin-bottom: var(--wp--preset--spacing--130)"
>
	<!-- wp:group {
		"align": "wide",
		"layout": {
			"type": "constrained",
			"contentSize": "480px"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {
			"className": "alignwide has-text-align-center has-xx-large-font-size",
			"style": {
				"typography": {
					"textTransform": "uppercase"
				}
			}
		} -->
		<h1
			class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"
			id="page-not-found"
			style="margin-top: 0; margin-bottom: 0; text-transform: uppercase"
		>
			<?php echo esc_html__( '404. Page Not Found', 'capsule' ); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p
			class="has-text-align-center has-mbf-secondary-color has-text-color has-link-color has-medium-font-size"
			style="margin-top: var(--wp--preset--spacing--30); margin-bottom: var(--wp--preset--spacing--70)"
		>
			<?php echo esc_html__( 'The page you were looking for could not be found. It might have been removed, renamed, or
			did not exist in the first place. Perhaps searching can help.', 'capsule' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:search {
		"label": "Search",
		"showLabel": false,
		"placeholder": "Search",
		"buttonText": "Search",
		"metadata": {
			"patternName": "capsule/mbf-search-form",
			"name": "Search Form"
		},
		"borderColor": "mbf-secondary"
	} /-->
</div>
<!-- /wp:group -->
