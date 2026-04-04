<?php
/**
 * Title: Upsells
 * Slug: capsule/mbf-upsells
 * Description:
 * Categories: mbfpatterns
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Upsells",
		"categories": [
			"mbfpatterns"
		],
		"patternName": "capsule/mbf-upsells"
	},
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|70",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group" style="margin-top: var(--wp--preset--spacing--70); margin-bottom: 0">
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
			"fontSize": "small"
		} -->
		<h2 class="wp-block-heading alignwide has-small-font-size" style="margin-top: 0; margin-bottom: 0">
			<?php echo esc_html__( 'Perfect Match With', 'capsule' ); ?>
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
				"blockGap": "var:preset|spacing|50",
				"margin": {
					"top": "var:preset|spacing|50",
					"bottom": "0"
				}
			}
		},
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-top: var(--wp--preset--spacing--50); margin-bottom: 0">
		<!-- wp:woocommerce/product-collection {
			"queryId": 989,
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
				"featured": false,
				"woocommerceOnSale": false,
				"woocommerceStockStatus": [
					"instock",
					"outofstock",
					"onbackorder"
				],
				"woocommerceAttributes": [],
				"woocommerceHandPickedProducts": [],
				"filterable": false,
				"relatedBy": {
					"categories": true,
					"tags": true
				}
			},
			"tagName": "div",
			"displayLayout": {
				"type": "list",
				"columns": 4,
				"shrinkColumns": true
			},
			"dimensions": {
				"widthType": "fill",
				"fixedWidth": ""
			},
			"collection": "woocommerce/product-collection/upsells",
			"hideControls": [
				"inherit",
				"filterable"
			],
			"queryContextIncludes": [
				"collection"
			],
			"__privatePreviewState": {
				"isPreview": true,
				"previewMessage": "Actual products will vary depending on the product being viewed."
			},
			"lock": {
				"move": true,
				"remove": true
			},
			"align": "full",
			"className": "is-type-mbf-slider",
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-woocommerce-product-collection alignfull is-type-mbf-slider">
			<!-- wp:woocommerce/product-template {
				"lock": {
					"move": true,
					"remove": true
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
						"blockGap": "var:preset|spacing|40",
						"margin": {
							"top": "0",
							"bottom": "0"
						},
						"padding": {
							"top": "0.125rem",
							"bottom": "0.125rem",
							"left": "0.125rem",
							"right": "0.125rem"
						}
					}
				},
				"backgroundColor": "mbf-layout-background",
				"layout": {
					"type": "default"
				}
			} -->
			<div
				class="wp-block-group has-mbf-layout-background-background-color has-background"
				style="
					margin-top: 0;
					margin-bottom: 0;
					padding-top: 0.125rem;
					padding-right: 0.125rem;
					padding-bottom: 0.125rem;
					padding-left: 0.125rem;
				"
			>
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
						"orientation": "vertical",
						"verticalAlignment": "center"
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
								"radius": "0"
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
						"fontSize": "x-small"
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
									"bottom": "var:preset|spacing|60"
								}
							}
						},
						"layout": {
							"type": "default"
						}
					} -->
					<div class="wp-block-group" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--60)">
						<!-- wp:woocommerce/product-button {
							"textAlign": "center",
							"isDescendentOfQueryLoop": true,
							"lock": {
								"move": true,
								"remove": false
							},
							"style": {
								"border": {
									"radius": "0"
								}
							}
						} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"templateLock": false,
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
						"orientation": "vertical",
						"verticalAlignment": "center"
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
							"move": true,
							"remove": false
						},
						"textColor": "mbf-primary",
						"style": {
							"elements": {
								"link": {
									"color": {
										"text": "var:preset|color|mbf-primary"
									}
								}
							}
						},
						"fontSize": "small"
					} /-->

					<!-- wp:group {
						"lock": {
							"move": true,
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
							},
							"style": {
								"border": {
									"radius": "20px"
								}
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
