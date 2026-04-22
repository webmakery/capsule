<?php
/**
 * Title: FluentCart Single Product
 * Slug: capsule/mbf-single-product-standard-fluentcart
 * Categories: page
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: Single product layout for FluentCart products.
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"align":"wide","className":"mbf-single-product-cols"} -->
	<div class="wp-block-columns alignwide mbf-single-product-cols">
		<!-- wp:column {"width":"735px","className":"mbf-single-product-col-gallery"} -->
		<div class="wp-block-column mbf-single-product-col-gallery" style="flex-basis:735px">
			<!-- wp:post-featured-image {"aspectRatio":"3/4","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"945px","className":"mbf-single-product-col-info"} -->
		<div class="wp-block-column mbf-single-product-col-info" style="flex-basis:945px">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"420px","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"level":1,"fontSize":"x-medium"} /-->
				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"fontSize":"small","textColor":"mbf-secondary"} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
					<!-- wp:paragraph {"fontSize":"x-small","textColor":"mbf-secondary"} -->
					<p class="has-mbf-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Insert FluentCart Product Info / Buy Section blocks here to render price, variants, and purchase actions.', 'capsule' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-content /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
