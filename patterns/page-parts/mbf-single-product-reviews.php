<?php
/**
 * Title: Product Reviews
 * Slug: capsule/mbf-single-product-reviews
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"patternName": "capsule/mbf-single-product-reviews",
		"name": "Product reviews"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|120",
				"bottom": "0"
			}
		}
	},
	"layout": {
		"type": "constrained",
		"contentSize": "",
		"wideSize": "49rem"
	}
} -->
<div class="wp-block-group alignwide" style="margin-top: var(--wp--preset--spacing--120); margin-bottom: 0">
	<!-- wp:woocommerce/product-reviews {
		"className": "is-type-mbf-separated"
	} -->
	<div class="wp-block-woocommerce-product-reviews is-type-mbf-separated">
		<!-- wp:woocommerce/product-reviews-title {
			"showReviewsCount": false,
			"level": 6,
			"style": {
				"spacing": {
					"margin": {
						"bottom": "var:preset|spacing|50"
					}
				}
			},
			"fontSize": "small",
			"fontFamily": "base"
		} /-->

		<!-- wp:woocommerce/product-review-template {
			"lock": {
				"move": true,
				"remove": true
			}
		} -->
		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Review Header"
			},
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|40"
				}
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"justifyContent": "space-between"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:woocommerce/product-review-date {
				"isLink": false,
				"style": {
					"spacing": {
						"padding": {
							"bottom": "0",
							"top": "0"
						}
					}
				},
				"fontSize": "x-small"
			} /-->

			<!-- wp:woocommerce/product-review-rating /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Review Content"
			},
			"style": {
				"spacing": {
					"blockGap": "0"
				}
			},
			"layout": {
				"type": "flex",
				"orientation": "vertical"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:woocommerce/product-review-content /-->

			<!-- wp:woocommerce/product-review-author-name {
				"isLink": false,
				"style": {
					"spacing": {
						"padding": {
							"bottom": "0",
							"top": "0"
						}
					}
				}
			} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:woocommerce/product-review-template -->

		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Reviews Pagination Container"
			},
			"style": {
				"spacing": {
					"margin": {
						"top": "var:preset|spacing|50",
						"bottom": "var:preset|spacing|50"
					}
				}
			},
			"layout": {
				"type": "constrained"
			}
		} -->
		<div
			class="wp-block-group"
			style="margin-top: var(--wp--preset--spacing--50); margin-bottom: var(--wp--preset--spacing--50)"
		>
			<!-- wp:woocommerce/product-reviews-pagination {
				"lock": {
					"move": true,
					"remove": true
				},
				"layout": {
					"type": "flex",
					"justifyContent": "space-between"
				}
			} -->
			<!-- wp:woocommerce/product-reviews-pagination-previous /-->

			<!-- wp:woocommerce/product-reviews-pagination-next /-->
			<!-- /wp:woocommerce/product-reviews-pagination -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Reviews Form Container"
			},
			"style": {
				"spacing": {
					"padding": {
						"top": "var:preset|spacing|50",
						"bottom": "0"
					}
				}
			},
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--50); padding-bottom: 0">
			<!-- wp:woocommerce/product-review-form {
				"lock": {
					"move": true,
					"remove": true
				}
			} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:woocommerce/product-reviews -->
</div>
<!-- /wp:group -->
