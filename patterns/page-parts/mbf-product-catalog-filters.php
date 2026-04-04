<?php
/**
 * Title: Catalog Sorting and Filters
 * Slug: capsule/mbf-product-catalog-filters
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"patternName": "capsule/mbf-product-catalog-filters",
		"name": "Catalog Sorting and Filters"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"bottom": "var:preset|spacing|70"
			}
		}
	},
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignwide" style="margin-bottom: var(--wp--preset--spacing--70)">
	<!-- wp:group {
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|110"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "nowrap",
			"justifyContent": "space-between"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {
			"metadata": {
				"name": "Filter Wrapper"
			},
			"className": "position-static",
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|50"
				}
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap"
			}
		} -->
		<div class="wp-block-group position-static">
			<!-- wp:woocommerce/product-filters {
				"style": {
					"spacing": {
						"blockGap": "0"
					}
				}
			} -->
			<div
				class="wp-block-woocommerce-product-filters wc-block-product-filters"
				style="
					--wc-product-filters-text-color: #111;
					--wc-product-filters-background-color: #fff;
					--wc-product-filter-block-spacing: 0;
				"
			>
				<!-- wp:accordion {
					"className": "is-type-mbf-style-3",
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|120"
						}
					}
				} -->
				<div role="group" class="wp-block-accordion is-type-mbf-style-3">
					<!-- wp:accordion-item {
						"openByDefault": true
					} -->
					<div class="wp-block-accordion-item is-open">
						<!-- wp:accordion-heading {
							"level": 4
						} -->
						<h4 class="wp-block-accordion-heading">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title">
									<?php esc_html_e( 'Status', 'capsule' ); ?>
								</span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h4>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {
							"style": {
								"spacing": {
									"padding": {
										"top": "var:preset|spacing|50",
										"bottom": "0"
									}
								}
							}
						} -->
						<div
							role="region"
							class="wp-block-accordion-panel"
							style="padding-top: var(--wp--preset--spacing--50); padding-bottom: 0"
						>
							<!-- wp:woocommerce/product-filter-status -->
							<div class="wp-block-woocommerce-product-filter-status">
								<!-- wp:woocommerce/product-filter-checkbox-list -->
								<div
									class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"
								></div>
								<!-- /wp:woocommerce/product-filter-checkbox-list -->
							</div>
							<!-- /wp:woocommerce/product-filter-status -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {
						"openByDefault": true
					} -->
					<div class="wp-block-accordion-item is-open">
						<!-- wp:accordion-heading {
							"level": 4
						} -->
						<h4 class="wp-block-accordion-heading">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title">
									<?php esc_html_e( 'Color', 'capsule' ); ?>
								</span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h4>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {
							"style": {
								"spacing": {
									"padding": {
										"top": "var:preset|spacing|50",
										"bottom": "0"
									}
								}
							}
						} -->
						<div
							role="region"
							class="wp-block-accordion-panel"
							style="padding-top: var(--wp--preset--spacing--50); padding-bottom: 0"
						>
							<!-- wp:woocommerce/product-filter-attribute -->
							<div class="wp-block-woocommerce-product-filter-attribute">
								<!-- wp:woocommerce/product-filter-checkbox-list -->
								<div
									class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"
								></div>
								<!-- /wp:woocommerce/product-filter-checkbox-list -->
							</div>
							<!-- /wp:woocommerce/product-filter-attribute -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {
						"openByDefault": true
					} -->
					<div class="wp-block-accordion-item is-open">
						<!-- wp:accordion-heading {
							"level": 4
						} -->
						<h4 class="wp-block-accordion-heading">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title">
									<?php esc_html_e( 'Brand', 'capsule' ); ?>
								</span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h4>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {
							"style": {
								"spacing": {
									"padding": {
										"top": "var:preset|spacing|50",
										"bottom": "0"
									}
								}
							}
						} -->
						<div
							role="region"
							class="wp-block-accordion-panel"
							style="padding-top: var(--wp--preset--spacing--50); padding-bottom: 0"
						>
							<!-- wp:woocommerce/product-filter-taxonomy {
								"taxonomy": "product_brand"
							} -->
							<div class="wp-block-woocommerce-product-filter-taxonomy">
								<!-- wp:woocommerce/product-filter-checkbox-list -->
								<div
									class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"
								></div>
								<!-- /wp:woocommerce/product-filter-checkbox-list -->
							</div>
							<!-- /wp:woocommerce/product-filter-taxonomy -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {
						"openByDefault": true
					} -->
					<div class="wp-block-accordion-item is-open">
						<!-- wp:accordion-heading {
							"level": 4
						} -->
						<h4 class="wp-block-accordion-heading">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title">
									<?php esc_html_e( 'Rating', 'capsule' ); ?>
								</span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h4>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {
							"style": {
								"spacing": {
									"padding": {
										"top": "var:preset|spacing|50",
										"bottom": "0"
									}
								}
							}
						} -->
						<div
							role="region"
							class="wp-block-accordion-panel"
							style="padding-top: var(--wp--preset--spacing--50); padding-bottom: 0"
						>
							<!-- wp:woocommerce/product-filter-rating -->
							<div class="wp-block-woocommerce-product-filter-rating">
								<!-- wp:woocommerce/product-filter-checkbox-list -->
								<div
									class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"
								></div>
								<!-- /wp:woocommerce/product-filter-checkbox-list -->
							</div>
							<!-- /wp:woocommerce/product-filter-rating -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {
						"openByDefault": true
					} -->
					<div class="wp-block-accordion-item is-open">
						<!-- wp:accordion-heading {
							"level": 4
						} -->
						<h4 class="wp-block-accordion-heading">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title">
									<?php esc_html_e( 'Price', 'capsule' ); ?>
								</span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h4>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {
							"style": {
								"spacing": {
									"padding": {
										"top": "var:preset|spacing|50",
										"bottom": "0"
									}
								}
							}
						} -->
						<div
							role="region"
							class="wp-block-accordion-panel"
							style="padding-top: var(--wp--preset--spacing--50); padding-bottom: 0"
						>
							<!-- wp:woocommerce/product-filter-price -->
							<div class="wp-block-woocommerce-product-filter-price">
								<!-- wp:woocommerce/product-filter-price-slider -->
								<div
									class="wp-block-woocommerce-product-filter-price-slider wc-block-product-filter-price-slider"
								></div>
								<!-- /wp:woocommerce/product-filter-price-slider -->
							</div>
							<!-- /wp:woocommerce/product-filter-price -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->
				</div>
				<!-- /wp:accordion -->

				<!-- wp:woocommerce/product-filter-active {
					"style": {
						"spacing": {
							"margin": {
								"top": "0",
								"bottom": "0"
							},
							"padding": {
								"left": "var:preset|spacing|50"
							}
						}
					}
				} -->
				<div
					class="wp-block-woocommerce-product-filter-active"
					style="margin-top: 0; margin-bottom: 0; padding-left: var(--wp--preset--spacing--50)"
				>
					<!-- wp:woocommerce/product-filter-removable-chips -->
					<div
						class="wp-block-woocommerce-product-filter-removable-chips wc-block-product-filter-removable-chips"
					></div>
					<!-- /wp:woocommerce/product-filter-removable-chips -->

					<!-- wp:woocommerce/product-filter-clear-button -->
					<!-- wp:buttons {
						"style": {
							"spacing": {
								"margin": {
									"top": "0",
									"bottom": "0"
								}
							}
						},
						"layout": {
							"type": "flex",
							"verticalAlignment": "stretched"
						}
					} -->
					<div class="wp-block-buttons" style="margin-top: 0; margin-bottom: 0">
						<!-- wp:button {
							"textAlign": "center",
							"className": "wc-block-product-filter-clear-button is-style-fill is-type-mbf-button-featured",
							"style": {
								"typography": {
									"textDecoration": "none"
								},
								"outline": "none",
								"fontSize": "medium"
							}
						} -->
						<div class="wp-block-button wc-block-product-filter-clear-button is-style-fill is-type-mbf-button-featured">
							<a class="wp-block-button__link has-text-align-center wp-element-button" style="text-decoration: none">
								<?php esc_html_e( 'Clear All', 'capsule' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
					<!-- /wp:woocommerce/product-filter-clear-button -->
				</div>
				<!-- /wp:woocommerce/product-filter-active -->
			</div>
			<!-- /wp:woocommerce/product-filters -->

			<!-- wp:woocommerce/product-results-count {
				"fontSize": "small"
			} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Product Grid Sorting"
			},
			"className": "alignwide",
			"style": {
				"spacing": {
					"margin": {
						"top": "0",
						"bottom": "0"
					},
					"blockGap": "var:preset|spacing|110"
				},
				"dimensions": {
					"minHeight": ""
				}
			},
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
			<!-- wp:group {
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|30"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {
					"style": {
						"elements": {
							"link": {
								"color": {
									"text": "var:preset|color|mbf-secondary"
								}
							}
						}
					},
					"textColor": "mbf-secondary",
					"fontSize": "small"
				} -->
				<p class="has-mbf-secondary-color has-text-color has-link-color has-small-font-size">
					<?php echo esc_html__( 'Sort by:', 'capsule' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:woocommerce/catalog-sorting {
					"style": {
						"layout": {
							"selfStretch": "fit",
							"flexSize": null
						}
					}
				} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
