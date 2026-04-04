<?php
/**
 * Title: Products
 * Slug: capsule/mbf-products
 * Description: Responsive section displaying products.
 * Categories: mbfpatterns, featured-selling
 * Block Types: woocommerce/product-collection
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns",
			"featured-selling"
		],
		"patternName": "capsule/mbf-products",
		"name": "Products"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|120",
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
	<!-- wp:woocommerce/product-collection {
		"queryId": 13,
		"query": {
			"perPage": 4,
			"pages": 1,
			"offset": 0,
			"postType": "product",
			"order": "asc",
			"orderBy": "title",
			"search": "",
			"exclude": [],
			"inherit": false,
			"taxQuery": [],
			"isProductCollectionBlock": true,
			"woocommerceOnSale": false,
			"woocommerceStockStatus": [
				"instock",
				"outofstock",
				"onbackorder"
			],
			"woocommerceAttributes": [],
			"woocommerceHandPickedProducts": []
		},
		"tagName": "div",
		"displayLayout": {
			"type": "flex",
			"columns": 4,
			"shrinkColumns": true
		},
		"dimensions": {
			"widthType": "fill",
			"fixedWidth": ""
		},
		"queryContextIncludes": [
			"collection"
		],
		"__privatePreviewState": {
			"isPreview": false,
			"previewMessage": "Actual products will vary depending on the page being viewed."
		},
		"lock": {
			"move": true,
			"remove": true
		},
		"align": "wide",
		"className": "mbf-product",
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-woocommerce-product-collection alignwide mbf-product">
		<!-- wp:woocommerce/product-template {
			"lock": {
				"move": false,
				"remove": false
			}
		} -->
		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Product Template Container"
			},
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|50",
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
			<!-- wp:group {
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Product Thumbnail"
				},
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
					"type": "flex",
					"orientation": "vertical"
				}
			} -->
			<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0">
				<!-- wp:woocommerce/product-image {
					"showSaleBadge": false,
					"isDescendentOfQueryLoop": true,
					"aspectRatio": "3/4",
					"lock": {
						"move": true,
						"remove": true
					},
					"style": {
						"border": {
							"radius": "0px"
						},
						"blockGap": "var:preset|spacing|40",
						"spacing": {
							"padding": {
								"top": "0",
								"bottom": "0",
								"left": "0",
								"right": "0"
							},
							"margin": {
								"bottom": "0",
								"top": "0",
								"left": "0",
								"right": "0"
							}
						},
						"dimensions": {
							"aspectRatio": "3/4"
						}
					}
				} -->
				<!-- wp:woocommerce/product-sale-badge {
					"isDescendentOfQueryLoop": true,
					"align": "left",
					"lock": {
						"move": true,
						"remove": false
					},
					"fontSize": "x-small",
					"style": {
						"spacing": {
							"margin": {
								"right": "0.125rem",
								"left": "0.125rem",
								"top": "0.125rem",
								"bottom": "0.125rem"
							}
						}
					}
				} /-->
				<!-- /wp:woocommerce/product-image -->

				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": false
					},
					"metadata": {
						"name": "Product Button Container"
					},
					"style": {
						"spacing": {
							"margin": {
								"top": "0",
								"bottom": "0.375rem"
							}
						}
					},
					"layout": {
						"type": "default"
					}
				} -->
				<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0.375rem">
					<!-- wp:woocommerce/product-button {
						"textAlign": "right",
						"isDescendentOfQueryLoop": true,
						"lock": {
							"move": true,
							"remove": false
						}
					} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {
				"lock": {
					"move": false,
					"remove": false
				},
				"metadata": {
					"name": "Product Info"
				},
				"style": {
					"spacing": {
						"blockGap": "0",
						"margin": {
							"top": "0",
							"bottom": "0"
						},
						"padding": {
							"right": "var:preset|spacing|50"
						}
					}
				},
				"layout": {
					"type": "flex",
					"orientation": "vertical"
				}
			} -->
			<div
				class="wp-block-group"
				style="margin-top: 0; margin-bottom: 0; padding-right: var(--wp--preset--spacing--50)"
			>
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
						"isLink": true,
						"lock": {
							"move": false,
							"remove": false
						},
						"style": {
							"spacing": {
								"margin": {
									"bottom": "var:preset|spacing|50"
								}
							},
							"typography": {
								"fontStyle": "normal",
								"fontWeight": "700"
							}
						},
						"fontSize": "small",
						"__woocommerceNamespace": "woocommerce/product-collection/product-title"
					} /-->

				<!-- wp:woocommerce/product-price {
					"isDescendentOfQueryLoop": true,
					"lock": {
						"move": false,
						"remove": false
					},
					"textColor": "mbf-primary",
					"fontSize": "small",
					"style": {
						"elements": {
							"link": {
								"color": {
									"text": "var:preset|color|mbf-primary"
								}
							}
						}
					}
				} /-->

				<!-- wp:group {
					"lock": {
						"move": false,
						"remove": false
					},
					"metadata": {
						"name": "Product Button Container"
					},
					"className": "is-type-mbf-stick-bottom",
					"layout": {
						"type": "default"
					}
				} -->
				<div class="wp-block-group is-type-mbf-stick-bottom">
					<!-- wp:woocommerce/product-button {
						"isDescendentOfQueryLoop": true,
						"lock": {
							"move": true,
							"remove": false
						}
					} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->

		<!-- wp:woocommerce/product-collection-no-results -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'No results found', 'capsule' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->

		<!-- wp:query-pagination {
			"paginationArrow": "chevron",
			"showLabel": false,
			"layout": {
				"type": "flex",
				"justifyContent": "center"
			}
		} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:woocommerce/product-collection -->

	<!-- wp:group {
		"metadata": {
			"name": "Product Collection Bottom"
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div class="wp-block-group">
		<!-- wp:buttons {
			"layout": {
				"type": "flex",
				"justifyContent": "center"
			}
		} -->
		<div class="wp-block-buttons">
			<!-- wp:button {
				"className": "is-type-mbf-button-featured",
				"style": {
					"typography": {
						"textTransform": "uppercase"
					}
				},
				"fontSize": "x-small",
				"fontFamily": "base"
			} -->
			<div class="wp-block-button is-type-mbf-button-featured">
				<a
					class="wp-block-button__link has-base-font-family has-x-small-font-size has-custom-font-size wp-element-button"
					href="/"
					style="text-transform: uppercase"
				>
					<?php echo esc_html__( 'Shop Collection', 'capsule' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
