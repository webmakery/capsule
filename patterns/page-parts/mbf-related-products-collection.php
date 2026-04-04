<?php
/**
 * Title: Related products collection
 * Slug: capsule/mbf-related-products-collection
 * Categories: mbfpatterns
 * Keywords: woo-commerce, featured, featured-selling, call-to-action
 * Description: A section with a heading and a 4 column product grid.
 * Inserter: no
 */
?>
<!-- wp:group {
	"metadata": {
		"name": "Related products collection",
		"categories": [
			"mbfpatterns"
		],
		"patternName": "capsule/mbf-related-products-collection"
	},
	"style": {
		"spacing": {
			"margin": {
				"top": "0",
				"bottom": "0"
			}
		}
	},
	"align": "wide",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
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
			"align": "wide",
			"style": {
				"spacing": {
					"margin": {
						"top": "0",
						"bottom": "0"
					}
				}
			},
			"fontSize": "large"
		} -->
		<h2 class="wp-block-heading alignwide has-large-font-size" style="margin-top: 0; margin-bottom: 0">
			<?php echo esc_html__( 'You May Also Like', 'capsule' ); ?>
		</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {
		"lock": {
			"move": true,
			"remove": true
		},
		"metadata": {
			"name": "Carousel Container"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|40",
				"margin": {
					"top": "var:preset|spacing|60",
					"bottom": "0"
				}
			}
		},
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-top: var(--wp--preset--spacing--60); margin-bottom: 0">
		<!-- wp:woocommerce/product-collection {
			"lock": {
				"move": true,
				"remove": true
			},
			"queryId": 1,
			"query": {
				"perPage": 12,
				"pages": 0,
				"offset": 0,
				"postType": "product",
				"order": "asc",
				"orderBy": "title",
				"search": "",
				"exclude": [],
				"inherit": false,
				"taxQuery": [],
				"isProductCollectionBlock": true,
				"featured": false,
				"woocommerceOnSale": false,
				"woocommerceStockStatus": [
					"instock",
					"outofstock",
					"onbackorder"
				],
				"woocommerceAttributes": [],
				"woocommerceHandPickedProducts": [],
				"filterable": true,
				"relatedBy": {
					"categories": true,
					"tags": true
				}
			},
			"tagName": "div",
			"displayLayout": {
				"type": "flex",
				"columns": 6,
				"shrinkColumns": true
			},
			"dimensions": {
				"widthType": "fill",
				"fixedWidth": ""
			},
			"collection": "woocommerce/product-collection/related",
			"queryContextIncludes": [
				"collection"
			],
			"__privatePreviewState": {
				"isPreview": false,
				"previewMessage": "Actual products will vary depending on the page being viewed."
			},
			"className": "is-type-mbf-slider",
			"align": "full",
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="is-type-mbf-slider wp-block-woocommerce-product-collection alignfull">
			<!-- wp:woocommerce/product-template {
				"lock": {
					"move": false,
					"remove": false
				},
				"align": "full"
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
			<p><?php echo esc_html__( 'No results found', 'capsule' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- /wp:woocommerce/product-collection-no-results -->
		</div>
		<!-- /wp:woocommerce/product-collection -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
