<?php
/**
 * Title: WooCommerce Page Cart
 * Slug: capsule/mbf-page-cart
 * Categories: page
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: The WooCommerce cart page template.
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"page"
		],
		"patternName": "capsule/mbf-page-cart",
		"name": "WooCommerce Page Cart"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|120",
				"bottom": "var:preset|spacing|160"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group alignwide"
	style="margin-top: var(--wp--preset--spacing--120); margin-bottom: var(--wp--preset--spacing--160)"
>
	<!-- wp:group {
		"metadata": {
			"name": "Cart Heading"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|20",
				"margin": {
					"bottom": "var:preset|spacing|60"
				}
			}
		},
		"layout": {
			"type": "constrained",
			"justifyContent": "left",
			"contentSize": "480px"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-bottom: var(--wp--preset--spacing--60)">
		<!-- wp:heading {
			"level": 1,
			"align": "wide",
			"style": {
				"spacing": {
					"margin": {
						"bottom": "var:preset|spacing|20"
					}
				}
			}
		} -->
		<h1 class="wp-block-heading alignwide" style="margin-bottom: var(--wp--preset--spacing--20)">
			<?php esc_html_e( 'Your Cart', 'capsule' ); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {
			"style": {
				"spacing": {
					"margin": {
						"top": "0",
						"bottom": "0"
					}
				},
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|mbf-secondary"
						}
					}
				}
			},
			"textColor": "mbf-secondary",
			"fontSize": "medium"
		} -->
		<p
			class="has-mbf-secondary-color has-text-color has-link-color has-medium-font-size"
			style="margin-top: 0; margin-bottom: 0"
		>
			<?php
			esc_html_e(
				'Review your selected items below. You can update quantities, remove products, or continue to
			checkout when ready.',
				'capsule'
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/cart -->
	<div class="wp-block-woocommerce-cart alignwide is-loading">
		<!-- wp:woocommerce/filled-cart-block -->
		<div class="wp-block-woocommerce-filled-cart-block">
			<!-- wp:woocommerce/cart-items-block -->
			<div class="wp-block-woocommerce-cart-items-block">
				<!-- wp:paragraph {
					"metadata": {
						"name": "Cart Item Heading"
					},
					"style": {
						"border": {
							"bottom": {
								"color": "var:preset|color|mbf-border",
								"width": "1px"
							}
						},
						"spacing": {
							"padding": {
								"bottom": "var:preset|spacing|50"
							},
							"margin": {
								"top": "0",
								"bottom": "var:preset|spacing|50"
							}
						}
					},
					"fontSize": "xx-medium"
				} -->
				<p
					class="has-xx-medium-font-size"
					style="
						border-bottom-color: var(--wp--preset--color--mbf-border);
						border-bottom-width: 1px;
						margin-top: 0;
						margin-bottom: var(--wp--preset--spacing--50);
						padding-bottom: var(--wp--preset--spacing--50);
					"
				>
					<?php esc_html_e( 'Products', 'capsule' ); ?>
				</p>
				<!-- /wp:paragraph -->
				<!-- wp:woocommerce/cart-line-items-block -->
				<div class="wp-block-woocommerce-cart-line-items-block"></div>
				<!-- /wp:woocommerce/cart-line-items-block -->
			</div>
			<!-- /wp:woocommerce/cart-items-block -->

			<!-- wp:woocommerce/cart-totals-block -->
			<div class="wp-block-woocommerce-cart-totals-block">
				<!-- wp:woocommerce/cart-order-summary-block -->
				<div class="wp-block-woocommerce-cart-order-summary-block">
					<!-- wp:woocommerce/cart-order-summary-heading-block -->
					<div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
					<!-- /wp:woocommerce/cart-order-summary-heading-block -->

					<!-- wp:woocommerce/cart-order-summary-coupon-form-block -->
					<div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
					<!-- /wp:woocommerce/cart-order-summary-coupon-form-block -->

					<!-- wp:woocommerce/cart-order-summary-totals-block -->
					<div class="wp-block-woocommerce-cart-order-summary-totals-block">
						<!-- wp:woocommerce/cart-order-summary-subtotal-block -->
						<div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
						<!-- /wp:woocommerce/cart-order-summary-subtotal-block -->

						<!-- wp:woocommerce/cart-order-summary-fee-block -->
						<div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
						<!-- /wp:woocommerce/cart-order-summary-fee-block -->

						<!-- wp:woocommerce/cart-order-summary-discount-block -->
						<div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
						<!-- /wp:woocommerce/cart-order-summary-discount-block -->

						<!-- wp:woocommerce/cart-order-summary-shipping-block -->
						<div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
						<!-- /wp:woocommerce/cart-order-summary-shipping-block -->

						<!-- wp:woocommerce/cart-order-summary-taxes-block -->
						<div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
						<!-- /wp:woocommerce/cart-order-summary-taxes-block -->
					</div>
					<!-- /wp:woocommerce/cart-order-summary-totals-block -->
				</div>
				<!-- /wp:woocommerce/cart-order-summary-block -->

				<!-- wp:woocommerce/cart-express-payment-block -->
				<div class="wp-block-woocommerce-cart-express-payment-block"></div>
				<!-- /wp:woocommerce/cart-express-payment-block -->

				<!-- wp:woocommerce/proceed-to-checkout-block -->
				<div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
				<!-- /wp:woocommerce/proceed-to-checkout-block -->

				<!-- wp:woocommerce/cart-accepted-payment-methods-block -->
				<div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
				<!-- /wp:woocommerce/cart-accepted-payment-methods-block -->
			</div>
			<!-- /wp:woocommerce/cart-totals-block -->

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
							"top": "0",
							"bottom": "0"
						}
					}
				},
				"layout": {
					"type": "constrained"
				}
			} -->
			<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
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
							"level": 4,
							"lock": {
								"move": true,
								"remove": true
							},
							"metadata": {
								"name": "Heading"
							},
							"align": "wide",
							"style": {
								"spacing": {
									"margin": {
										"top": "0",
										"bottom": "var:preset|spacing|60"
									}
								}
							}
						} -->
						<h4 class="wp-block-heading alignwide" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--60)">
							<?php esc_html_e( 'You May Be Interested', 'capsule' ); ?>
						</h4>
						<!-- /wp:heading -->
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
		</div>
		<!-- /wp:woocommerce/filled-cart-block -->

		<!-- wp:woocommerce/empty-cart-block -->
		<div class="wp-block-woocommerce-empty-cart-block">
			<!-- wp:group {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Empty Cart Container"
				},
				"style": {
					"spacing": {
						"padding": {
							"top": "0",
							"bottom": "0"
						},
						"blockGap": "var:preset|spacing|70"
					}
				},
				"gradient": "mbf-gradient",
				"layout": {
					"type": "flex",
					"orientation": "vertical",
					"justifyContent": "center"
				}
			} -->
			<div
				class="wp-block-group has-mbf-gradient-gradient-background has-background"
				style="padding-top: 0; padding-bottom: 0"
			>
				<!-- wp:group {
					"templateLock": "all",
					"lock": {
						"move": true,
						"remove": true
					},
					"metadata": {
						"name": "Empty Cart Content"
					},
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|20"
						}
					},
					"layout": {
						"type": "flex",
						"orientation": "vertical",
						"justifyContent": "center"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:group {
						"metadata": {
							"name": "Heading Container"
						},
						"style": {
							"spacing": {
								"blockGap": "var:preset|spacing|20"
							}
						},
						"layout": {
							"type": "constrained",
							"contentSize": "480px"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:heading {
							"textAlign": "center",
							"level": 1
						} -->
						<h1 class="wp-block-heading has-text-align-center">
							<?php esc_html_e( 'Your Cart', 'capsule' ); ?>
						</h1>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {
						"metadata": {
							"name": "Description Container"
						},
						"style": {
							"spacing": {
								"blockGap": "var:preset|spacing|20"
							}
						},
						"layout": {
							"type": "constrained",
							"contentSize": "480px"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {
							"align": "center",
							"textColor": "mbf-secondary",
							"fontSize": "medium"
						} -->
						<p class="has-text-align-center has-mbf-secondary-color has-text-color has-medium-font-size">
							<?php
							esc_html_e(
								'Looks like you haven’t added anything yet. Explore our latest arrivals, bestsellers,
							and seasonal pieces.',
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {
					"lock": {
						"move": true,
						"remove": false
					},
					"layout": {
						"type": "flex",
						"justifyContent": "center"
					}
				} -->
				<div class="wp-block-buttons">
					<!-- wp:button {
						"className": "is-type-mbf-button-animated"
					} -->
					<div class="wp-block-button is-type-mbf-button-animated">
						<a class="wp-block-button__link wp-element-button" href="/">
							<?php esc_html_e( 'Start Shopping', 'capsule' ); ?>
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {
					"align": "center",
					"lock": {
						"move": true,
						"remove": false
					},
					"className": "has-text-align-center has-mbf-secondary-color has-text-color has-link-color has-small-font-size",
					"fontSize": "small"
				} -->
				<p class="has-text-align-center has-mbf-secondary-color has-text-color has-link-color has-small-font-size">
					<?php esc_html_e( 'Have an account?', 'capsule' ); ?>
					<a href="/my-account"><?php esc_html_e( 'Log in', 'capsule' ); ?></a>
					<?php esc_html_e( 'to check out faster.', 'capsule' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:woocommerce/empty-cart-block -->
	</div>
	<!-- /wp:woocommerce/cart -->
</div>
<!-- /wp:group -->
