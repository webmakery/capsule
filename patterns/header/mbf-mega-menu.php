<?php
/**
 * Title: Mega Menu Content
 * Slug: capsule/mbf-mega-menu
 * Block Types: core/template-part/header
 * Description: Mega Menu Content.
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"header"
		],
		"patternName": "capsule/mbf-mega-menu",
		"name": "Mega Menu Content"
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group">
	<!-- wp:group {
		"metadata": {
			"name": "Left Column"
		},
		"align": "full",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|120"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "wrap",
			"verticalAlignment": "top"
		}
	} -->
	<div class="wp-block-group alignfull">
		<!-- wp:navigation-submenu {
			"label": "Shop",
			"url": "Shop",
			"kind": "custom"
		} -->
		<!-- wp:navigation-link {
			"label": "Tops",
			"type": "page",
			"url": "Tops",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "Bottoms",
			"type": "product_cat",
			"id": 33,
			"url": "https://woo-basic/product-category/bottoms/",
			"kind": "taxonomy",
			"metadata": {
				"bindings": {
					"url": {
						"source": "core/term-data",
						"args": {
							"field": "link"
						}
					}
				}
			}
		} /-->

		<!-- wp:navigation-link {
			"label": "Shoes",
			"type": "page",
			"url": "Shoes",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "New Drop",
			"type": "page",
			"url": "New%20Drop",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "Sale",
			"type": "page",
			"url": "Sale",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "Shop All",
			"type": "page",
			"url": "Shop%20All",
			"kind": "post-type"
		} /-->
		<!-- /wp:navigation-submenu -->

		<!-- wp:navigation-submenu {
			"label": "Most popular",
			"url": "Most%20popular",
			"kind": "custom"
		} -->
		<!-- wp:navigation-link {
			"label": "Urban Cargo Joggers",
			"type": "page",
			"url": "Urban%20Cargo%20Joggers",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "EcoFleece Zip Jacket",
			"type": "page",
			"url": "EcoFleece%20Zip%20Jacket",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "Glacier Down Hoodie",
			"type": "page",
			"url": "Glacier%20Down%20Hoodie",
			"kind": "post-type"
		} /-->

		<!-- wp:navigation-link {
			"label": "Rust Drift Coat",
			"type": "page",
			"url": "Rust%20Drift%20Coat",
			"kind": "post-type"
		} /-->
		<!-- /wp:navigation-submenu -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {
		"metadata": {
			"name": "Right Column"
		},
		"align": "full",
		"style": {
			"spacing": {
				"padding": {
					"right": "0",
					"left": "0",
					"top": "0",
					"bottom": "0"
				},
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
	<div
		class="wp-block-group alignfull"
		style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
	>
		<!-- wp:group {
			"metadata": {
				"name": "Banner Wrapper"
			},
			"align": "full",
			"style": {
				"spacing": {
					"padding": {
						"top": "0",
						"bottom": "0",
						"left": "0",
						"right": "0"
					}
				}
			},
			"layout": {
				"type": "constrained",
				"contentSize": "280px"
			}
		} -->
		<div class="wp-block-group alignfull" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
			<!-- wp:pattern {
				"slug": "capsule/mbf-banner-small"
			} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
