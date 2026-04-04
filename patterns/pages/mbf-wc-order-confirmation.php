<?php
/**
 * Title: WooCommerce Order Confirmation
 * Slug: capsule/mbf-wc-order-confirmation
 * Categories: page
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: The WooCommerce order confirmation page template.
 */
?>

<!-- wp:group {
	"tagName": "main",
	"metadata": {
		"name": "WooCommerce Order Confirmation",
		"patternName": "capsule/mbf-wc-order-confirmation"
	},
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|120",
			"margin": {
				"top": "var:preset|spacing|120",
				"bottom": "var:preset|spacing|160"
			}
		}
	},
	"layout": {
		"inherit": true,
		"type": "constrained"
	}
} -->
<main
	class="wp-block-group"
	style="margin-top: var(--wp--preset--spacing--120); margin-bottom: var(--wp--preset--spacing--160)"
>
	<!-- wp:group {
		"metadata": {
			"name": "Order received"
		},
		"align": "wide",
		"style": {
			"border": {
				"radius": "20px"
			}
		},
		"gradient": "mbf-gradient",
		"layout": {
			"type": "constrained",
			"justifyContent": "left"
		}
	} -->
	<div class="wp-block-group alignwide has-mbf-gradient-gradient-background has-background" style="border-radius: 20px">
		<!-- wp:woocommerce/order-confirmation-status /-->

		<!-- wp:woocommerce/order-confirmation-additional-information /-->

		<!-- wp:woocommerce/order-confirmation-summary {
			"style": {
				"spacing": {}
			}
		} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {
		"metadata": {
			"name": "Order details"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": {
					"left": "var:preset|spacing|130"
				}
			}
		}
	} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {
			"width": "839px"
		} -->
		<div class="wp-block-column" style="flex-basis: 839px">
			<!-- wp:woocommerce/order-confirmation-totals-wrapper {
				"align": "wide"
			} -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Order details', 'capsule' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/order-confirmation-totals {
				"lock": {
					"remove": true
				},
				"borderColor": "mbf-border",
				"style": {
					"spacing": {
						"margin": {
							"top": "var:preset|spacing|30",
							"bottom": "var:preset|spacing|50"
						}
					}
				}
			} /-->
			<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

			<!-- wp:woocommerce/order-confirmation-downloads-wrapper {
				"align": "wide"
			} -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Downloads', 'capsule' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/order-confirmation-downloads {
				"lock": {
					"remove": true
				},
				"borderColor": "mbf-border",
				"style": {
					"spacing": {
						"margin": {
							"top": "var:preset|spacing|30",
							"bottom": "var:preset|spacing|50"
						}
					}
				}
			} /-->
			<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

			<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {
				"align": "wide",
				"style": {
					"spacing": {
						"padding": {
							"right": "0",
							"left": "0"
						}
					}
				}
			} -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Additional information', 'capsule' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/order-confirmation-additional-fields /-->
			<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {
			"width": "417px"
		} -->
		<div class="wp-block-column" style="flex-basis: 417px">
			<!-- wp:group {
				"align": "wide",
				"style": {
					"layout": {
						"selfStretch": "fit",
						"flexSize": null
					},
					"spacing": {
						"blockGap": "var:preset|spacing|110"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "wrap",
					"justifyContent": "space-between",
					"verticalAlignment": "top"
				}
			} -->
			<div class="wp-block-group alignwide">
				<!-- wp:woocommerce/order-confirmation-shipping-wrapper {
					"align": "wide"
				} -->
				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php esc_html_e( 'Shipping address', 'capsule' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:woocommerce/order-confirmation-shipping-address {
					"lock": {
						"remove": true
					},
					"borderColor": "mbf-border",
					"style": {
						"spacing": {
							"padding": {
								"top": "var:preset|spacing|60",
								"bottom": "var:preset|spacing|60",
								"left": "var:preset|spacing|100",
								"right": "var:preset|spacing|100"
							}
						}
					},
					"textColor": "mbf-secondary"
				} /-->
				<!-- /wp:woocommerce/order-confirmation-shipping-wrapper -->

				<!-- wp:woocommerce/order-confirmation-billing-wrapper {
					"align": "wide"
				} -->
				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php esc_html_e( 'Billing address', 'capsule' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:woocommerce/order-confirmation-billing-address {
					"lock": {
						"remove": true
					},
					"borderColor": "mbf-border",
					"style": {
						"spacing": {
							"padding": {
								"top": "var:preset|spacing|60",
								"bottom": "var:preset|spacing|60",
								"left": "var:preset|spacing|100",
								"right": "var:preset|spacing|100"
							}
						}
					},
					"textColor": "mbf-secondary"
				} /-->
				<!-- /wp:woocommerce/order-confirmation-billing-wrapper -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->
