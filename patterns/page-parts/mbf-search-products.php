<?php
/**
 * Title: Search Products Grid
 * Slug: capsule/mbf-search-products
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns"
		],
		"name": "Products",
		"patternName": "capsule/mbf-search-products"
	},
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|70",
			"margin": {
				"top": "var:preset|spacing|140",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top: var(--wp--preset--spacing--140); margin-bottom: 0">
	<!-- wp:group {
		"metadata": {
			"name": "Section Heading"
		},
		"align": "wide",
		"layout": {
			"type": "constrained",
			"justifyContent": "left"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {
			"fontSize": "large"
		} -->
		<p class="has-large-font-size"><?php esc_html_e( 'Products', 'capsule' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {
		"queryId": 50385,
		"query": {
			"perPage": 6,
			"pages": 0,
			"offset": "0",
			"postType": "product",
			"order": "desc",
			"orderBy": "date",
			"author": "",
			"search": "",
			"exclude": [],
			"sticky": "",
			"inherit": false,
			"parents": [],
			"format": []
		},
		"align": "wide",
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-query alignwide">
		<!-- wp:query-no-results -->
		<!-- wp:paragraph {
			"align": "center",
			"metadata": {
				"patternName": "capsule/hidden-no-search-results",
				"name": "404"
			},
			"style": {
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|mbf-secondary"
						}
					}
				}
			},
			"textColor": "mbf-secondary"
		} -->
		<p class="has-text-align-center has-mbf-secondary-color has-text-color has-link-color">
			<?php echo esc_html__( 'No results were found using that search.', 'capsule' ); ?>
		</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

		<!-- wp:woocommerce/product-template {
			"lock": {
				"move": false,
				"remove": false
			},
			"className": "wc-block-product-template__responsive columns-6"
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

		<!-- wp:spacer {
			"height": "var:preset|spacing|120"
		} -->
		<div style="height: var(--wp--preset--spacing--120)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {
			"paginationArrow": "chevron",
			"showLabel": false,
			"style": {
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|mbf-primary"
						}
					}
				}
			},
			"textColor": "mbf-primary",
			"layout": {
				"type": "flex",
				"justifyContent": "center",
				"flexWrap": "wrap",
				"orientation": "horizontal"
			}
		} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers {
			"fontSize": "medium"
		} /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
