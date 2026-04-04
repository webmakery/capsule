<?php
/**
 * Title: Cart Cross Sells
 * Slug: capsule/mbf-cart-cross-sells
 * Description:
 * Categories: mbfpatterns
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Cart Cross Sells",
		"categories": [
			"mbfpatterns"
		],
		"patternName": "capsule/mbf-cart-cross-sells"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top":"0",
				"bottom":"0"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">

	<!-- wp:woocommerce/cart-cross-sells-block -->
	<div class="wp-block-woocommerce-cart-cross-sells-block">
		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Headline"
			},
			"align": "wide",
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|20"
				}
			},
			"layout": {
				"type": "constrained",
				"flexWrap": "nowrap",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Heading"
				},
				"level": 5,
				"align": "wide",
				"style": {
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "var:preset|spacing|20"
						}
					}
				}
			} -->
			<h5 class="wp-block-heading alignwide" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--20)">
				<?php echo esc_html__( 'Recommended for You', 'capsule' ); ?>
			</h5>
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
					},
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "var:preset|spacing|60"
						}
					}
				},
				"textColor": "mbf-secondary",
				"fontSize": "x-medium"
			} -->
			<p
				class="has-mbf-secondary-color has-text-color has-link-color has-x-medium-font-size"
				style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--60); font-style: normal; font-weight: 400"
			>
				<?php echo esc_html__( 'Top-rated gear, ready to ship.', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:woocommerce/cart-cross-sells-products-block {
			"columns": 6
		} -->
		<div class="wp-block-woocommerce-cart-cross-sells-products-block"></div>
		<!-- /wp:woocommerce/cart-cross-sells-products-block -->
	</div>
	<!-- /wp:woocommerce/cart-cross-sells-block -->

</div>
<!-- /wp:group -->
