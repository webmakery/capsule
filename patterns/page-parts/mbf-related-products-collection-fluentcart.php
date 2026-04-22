<?php
/**
 * Title: Related products collection (FluentCart)
 * Slug: capsule/mbf-related-products-collection-fluentcart
 * Categories: mbfpatterns
 * Description: Related products slider-style section for FluentCart products.
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'You May Also Like', 'capsule' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"fluent-products","order":"desc","orderBy":"date","inherit":false},"className":"is-type-mbf-slider"} -->
	<div class="wp-block-query is-type-mbf-slider">
		<!-- wp:post-template -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
