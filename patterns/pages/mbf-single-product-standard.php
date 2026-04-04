<?php
/**
 * Title: WooCommerce Single Product
 * Slug: capsule/mbf-single-product-standard
 * Categories: page
 * Post Types: page, wp_template
 * Viewport width: 1680
 * Description: The WooCommerce single product page template.
 */
?>

<!-- wp:group {
	"metadata": {
		"patternName": "capsule/mbf-single-product-standard",
		"name": "Single Product"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"blockGap": "0"
		}
	},
	"layout": {
		"type": "default"
	}
} -->
<div class="wp-block-group alignwide">
	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:group {
		"metadata": {
			"name": "Product Content Wrapper"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|60"
			}
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {
			"metadata": {
				"name": "Product Content"
			},
			"align": "wide",
			"className": "mbf-single-product-cols",
			"style": {
				"spacing": {
					"blockGap": {
						"top": "var:preset|spacing|160",
						"left": "0"
					}
				}
			}
		} -->
		<div class="wp-block-columns alignwide mbf-single-product-cols">
			<!-- wp:column {
				"width": "735px",
				"metadata": {
					"name": "Product Images",
					"layout": {
						"type": "default"
					}
				},
				"className": "mbf-single-product-col-gallery"
			} -->
			<div class="wp-block-column mbf-single-product-col-gallery" style="flex-basis: 735px">
				<!-- wp:group {
					"metadata": {
						"name": "Sticky Gallery"
					},
					"style": {
						"position": {
							"type": "sticky",
							"top": "calc(24px + var(--wp-admin--admin-bar--position-offset, 24px))"
						}
					},
					"layout": {
						"type": "default"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:woocommerce/product-gallery -->
					<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery">
						<!-- wp:woocommerce/product-gallery-large-image -->
						<div
							class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks"
						>
							<!-- wp:woocommerce/product-image {
								"showProductLink": false,
								"showSaleBadge": false,
								"style": {
									"dimensions": {
										"aspectRatio": "3/4"
									}
								}
							} -->
							<div class="is-loading"></div>
							<!-- /wp:woocommerce/product-image -->

							<!-- wp:woocommerce/product-gallery-large-image-next-previous -->
							<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
							<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
						</div>
						<!-- /wp:woocommerce/product-gallery-large-image -->

						<!-- wp:woocommerce/product-gallery-thumbnails {
							"thumbnailSize": "12%",
							"aspectRatio": "3/4"
						} /-->
					</div>
					<!-- /wp:woocommerce/product-gallery -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {
				"width": "945px",
				"metadata": {
					"name": "Product Info",
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|30"
						}
					}
				},
				"className": "mbf-single-product-col-info"
			} -->
			<div class="wp-block-column mbf-single-product-col-info" style="flex-basis: 945px">
				<!-- wp:group {
					"metadata": {
						"name": "Product Info Container"
					},
					"layout": {
						"type": "constrained",
						"contentSize": "420px",
						"justifyContent": "center"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:group {
						"style": {
							"spacing": {
								"blockGap": "0",
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
					<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0">
						<!-- wp:post-terms {
							"term": "product_brand",
							"lock": {
								"move": false,
								"remove": false
							},
							"style": {
								"elements": {
									"link": {
										"color": {
											"text": "var:preset|color|mbf-secondary"
										},
										":hover": {
											"color": {
												"text": "var:preset|color|mbf-secondary"
											}
										}
									}
								},
								"spacing": {
									"margin": {
										"bottom": "var:preset|spacing|20"
									}
								}
							},
							"textColor": "mbf-secondary",
							"fontSize": "x-small"
						} /-->

						<!-- wp:post-title {
							"style": {
								"spacing": {
									"margin": {
										"bottom": "var:preset|spacing|10"
									}
								},
								"typography": {
									"fontStyle": "normal",
									"fontWeight": "700"
								}
							},
							"fontSize": "x-medium",
							"__woocommerceNamespace": "woocommerce/product-query/product-title"
						} /-->

						<!-- wp:woocommerce/product-summary {
							"isDescendentOfSingleProductTemplate": true,
							"showDescriptionIfEmpty": true,
							"textColor": "mbf-secondary",
							"fontSize": "small",
							"style": {
								"typography": {
									"fontWeight": "500",
									"fontStyle": "normal"
								},
								"elements": {
									"link": {
										"color": {
											"text": "var:preset|color|mbf-secondary"
										}
									}
								},
								"spacing": {
									"margin": {
										"top": "var:preset|spacing|20",
										"bottom": "0"
									}
								}
							}
						} /-->

						<!-- wp:woocommerce/product-rating {
							"isDescendentOfSingleProductTemplate": true,
							"textColor": "mbf-secondary",
							"fontSize": "x-small",
							"style": {
								"spacing": {
									"margin": {
										"bottom": "var:preset|spacing|60"
									}
								},
								"elements": {
									"link": {
										"color": {
											"text": "var:preset|color|mbf-secondary"
										}
									}
								}
							}
						} /-->

						<!-- wp:group {
							"style": {
								"spacing": {
									"margin": {
										"top": "var:preset|spacing|120",
										"bottom": "var:preset|spacing|120"
									},
									"blockGap": "var:preset|spacing|50"
								}
							},
							"layout": {
								"type": "flex",
								"flexWrap": "nowrap",
								"justifyContent": "left"
							}
						} -->
						<div
							class="wp-block-group"
							style="margin-top: var(--wp--preset--spacing--120); margin-bottom: var(--wp--preset--spacing--120)"
						>
							<!-- wp:woocommerce/product-price {
								"isDescendentOfSingleProductTemplate": true,
								"fontSize": "medium",
								"style": {
									"typography": {
										"lineHeight": "1"
									},
									"spacing": {
										"padding": {
											"top": "0"
										}
									}
								}
							} /-->

							<!-- wp:woocommerce/product-sale-badge /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {
						"metadata": {
							"name": "Product Info Bottom"
						},
						"style": {
							"spacing": {
								"blockGap": "var:preset|spacing|120"
							}
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:woocommerce/add-to-cart-with-options /-->

						<!-- wp:post-terms {
							"term": "post_tag",
							"separator": "",
							"className": "is-style-default"
						} /-->

						<!-- wp:pattern {
							"slug": "capsule/mbf-store-features"
						} /-->

						<!-- wp:pattern {
							"slug": "capsule/mbf-single-product-details"
						} /-->

						<!-- wp:pattern {
							"slug": "capsule/mbf-single-product-reviews"
						} /-->

						<!-- wp:pattern {
							"slug": "capsule/mbf-upsells"
						} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
