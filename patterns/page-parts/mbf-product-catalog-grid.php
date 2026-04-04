<?php
/**
 * Title: Product Catalog Grid
 * Slug: capsule/mbf-product-catalog-grid
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"patternName": "capsule/mbf-product-catalog-grid",
		"name": "Product Catalog Grid"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|70"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top: var(--wp--preset--spacing--70)">
	<!-- wp:group {
		"metadata": {
			"name": "Catalog Wrapper"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"margin": {
					"top": "0",
					"bottom": "0"
				},
				"blockGap": "var:preset|spacing|60"
			}
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
		<!-- wp:pattern {
			"slug": "capsule/mbf-product-catalog-filters"
		} /-->

		<!-- wp:woocommerce/product-collection {
			"queryId": 7,
			"query": {
				"woocommerceAttributes": [],
				"woocommerceStockStatus": [
					"instock",
					"outofstock",
					"onbackorder"
				],
				"taxQuery": [],
				"isProductCollectionBlock": true,
				"perPage": 18,
				"pages": 0,
				"offset": 0,
				"postType": "product",
				"order": "asc",
				"orderBy": "title",
				"author": "",
				"search": "",
				"exclude": [],
				"sticky": "",
				"inherit": true,
				"filterable": true
			},
			"tagName": "div",
			"displayLayout": {
				"type": "flex",
				"columns": 6,
				"shrinkColumns": true
			},
			"dimensions": {
				"widthType": "fill"
			},
			"queryContextIncludes": [
				"collection"
			],
			"__privatePreviewState": {
				"isPreview": false,
				"previewMessage": "Actual products will vary depending on the page being viewed."
			},
			"align": "wide"
		} -->
		<div class="wp-block-woocommerce-product-collection alignwide">
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

			<!-- wp:query-pagination {
				"paginationArrow": "chevron",
				"showLabel": false,
				"layout": {
					"type": "flex",
					"justifyContent": "center"
				}
			} -->
			<!-- wp:query-pagination-previous {
				"label": "Previous"
			} /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next {
				"label": "Next"
			} /-->
			<!-- /wp:query-pagination -->

			<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:group {
				"layout": {
					"type": "flex",
					"orientation": "vertical",
					"justifyContent": "left",
					"flexWrap": "wrap"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {
					"fontSize": "x-medium"
				} -->
				<p class="has-x-medium-font-size">
					<?php esc_html_e( 'No results found. You can try', 'capsule' ); ?>
					<a class="wc-link-clear-any-filters" href="/">
						<?php esc_html_e( 'clearing any filters', 'capsule' ); ?>
					</a>
					<?php esc_html_e( 'or head to our', 'capsule' ); ?>
					<a class="wc-link-stores-home" href="/"><?php esc_html_e( "store's home.", 'capsule' ); ?></a>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:woocommerce/product-collection-no-results -->
		</div>
		<!-- /wp:woocommerce/product-collection -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
