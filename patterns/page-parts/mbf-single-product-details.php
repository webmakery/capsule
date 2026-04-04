<?php
/**
 * Title: Product Details
 * Slug: capsule/mbf-single-product-details
 * Inserter: no
 */
?>

<!-- wp:woocommerce/product-details -->
<div class="wp-block-woocommerce-product-details alignwide">
	<!-- wp:accordion {
		"autoclose": true,
		"className": "is-type-mbf-style-2",
		"style": {
			"spacing": {
				"blockGap": "0"
			}
		}
	} -->
	<div role="group" class="wp-block-accordion is-type-mbf-style-2">
		<!-- wp:accordion-item {
			"openByDefault": true
		} -->
		<div class="wp-block-accordion-item is-open">
			<!-- wp:accordion-heading {
				"level": 3
			} -->
			<h3 class="wp-block-accordion-heading">
				<button type="button" class="wp-block-accordion-heading__toggle">
					<span class="wp-block-accordion-heading__toggle-title">
						<?php esc_html_e( 'Description', 'capsule' ); ?>
					</span>
					<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
				</button>
			</h3>
			<!-- /wp:accordion-heading -->

			<!-- wp:accordion-panel -->
			<div role="region" class="wp-block-accordion-panel"><!-- wp:woocommerce/product-description /--></div>
			<!-- /wp:accordion-panel -->
		</div>
		<!-- /wp:accordion-item -->

		<!-- wp:accordion-item -->
		<div class="wp-block-accordion-item">
			<!-- wp:accordion-heading {
				"level": 3
			} -->
			<h3 class="wp-block-accordion-heading">
				<button type="button" class="wp-block-accordion-heading__toggle">
					<span class="wp-block-accordion-heading__toggle-title">
						<?php esc_html_e( 'Specification', 'capsule' ); ?>
					</span>
					<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
				</button>
			</h3>
			<!-- /wp:accordion-heading -->

			<!-- wp:accordion-panel -->
			<div role="region" class="wp-block-accordion-panel"><!-- wp:woocommerce/product-specifications /--></div>
			<!-- /wp:accordion-panel -->
		</div>
		<!-- /wp:accordion-item -->

		<!-- wp:accordion-item -->
		<div class="wp-block-accordion-item">
			<!-- wp:accordion-heading {
				"level": 3
			} -->
			<h3 class="wp-block-accordion-heading">
				<button type="button" class="wp-block-accordion-heading__toggle">
					<span class="wp-block-accordion-heading__toggle-title">
						<?php esc_html_e( 'Return Policy', 'capsule' ); ?>
					</span>
					<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
				</button>
			</h3>
			<!-- /wp:accordion-heading -->

			<!-- wp:accordion-panel -->
			<div role="region" class="wp-block-accordion-panel">
				<!-- wp:group {
					"metadata": {
						"name": "Return Policy"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p>
						<?php esc_html_e( 'Returns are accepted within 30 days of delivery. Items must be unused and in original
						condition.', 'capsule' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:accordion-panel -->
		</div>
		<!-- /wp:accordion-item -->
	</div>
	<!-- /wp:accordion -->
</div>
<!-- /wp:woocommerce/product-details -->
