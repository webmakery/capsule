<?php
/**
 * Title: Product Categories Banner
 * Slug: capsule/mbf-product-categories-banner
 * Description: Product Categories Banner
 * Categories: mbfpatterns
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Product Categories Banner",
		"patternName": "capsule/mbf-product-categories-banner",
		"mbf": {
			"settings": {
				"stretch-mobile": false,
				"tablet-aspect-ratio": "21-9",
				"mobile-aspect-ratio": "3-4"
			}
		}
	},
	"align": "full",
	"className": "is-style-section-overlay",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignfull is-style-section-overlay">
	<!-- wp:terms-query {
		"termQuery": {
			"perPage": 6,
			"taxonomy": "product_cat",
			"order": "asc",
			"orderBy": "name",
			"include": [],
			"hideEmpty": true,
			"showNested": false,
			"inherit": false
		},
		"align": "full",
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-terms-query alignfull">
		<!-- wp:term-template {
			"align": "full",
			"style": {
				"spacing": {
					"padding": {
						"right": "0",
						"left": "0",
						"top": "var:preset|spacing|140",
						"bottom": "0"
					}
				}
			},
			"layout": {
				"type": "default"
			}
		} -->
		<!-- wp:term-name {
			"style": {
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|mbf-layout-background"
						}
					}
				},
				"spacing": {
					"padding": {
						"top": "0",
						"bottom": "0",
						"left": "0",
						"right": "0"
					}
				},
				"typography": {
					"textTransform": "capitalize"
				}
			},
			"textColor": "mbf-layout-background",
			"fontSize": "large"
		} /-->

		<!-- wp:group {
			"metadata": {
				"name": "Term Content"
			},
			"align": "full",
			"className": "is-style-default",
			"layout": {
				"type": "constrained",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group alignfull is-style-default">
			<!-- wp:group {
				"lock": {
					"move": false,
					"remove": false
				},
				"metadata": {
					"name": "Outer Container"
				},
				"align": "full",
				"className": "is-style-default",
				"layout": {
					"type": "constrained",
					"justifyContent": "left"
				}
			} -->
			<div class="wp-block-group alignfull is-style-default">
				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": true
					},
					"metadata": {
						"name": "Thumbnail"
					},
					"align": "full",
					"className": "is-style-default",
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group alignfull is-style-default">
					<!-- wp:image {
						"lock": {
							"move": true,
							"remove": true
						},
						"metadata": {
							"bindings": {
								"url": {
									"source": "mbf/product-category-image",
									"args": {
										"key": "url"
									}
								}
							}
						},
						"align": "full"
					} -->
					<figure class="wp-block-image alignfull"><img alt="" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": true
					},
					"metadata": {
						"name": "Overlay Content"
					},
					"align": "full",
					"className": "is-style-default",
					"style": {
						"spacing": {
							"padding": {
								"top": "var:preset|spacing|140",
								"bottom": "var:preset|spacing|140",
								"left": "0",
								"right": "0"
							}
						}
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div
					class="wp-block-group alignfull is-style-default"
					style="
						padding-top: var(--wp--preset--spacing--140);
						padding-right: 0;
						padding-bottom: var(--wp--preset--spacing--140);
						padding-left: 0;
					"
				>
					<!-- wp:group {
						"lock": {
							"move": true,
							"remove": false
						},
						"metadata": {
							"name": "Centered Content"
						},
						"align": "full",
						"layout": {
							"type": "flex",
							"flexWrap": "nowrap",
							"orientation": "vertical",
							"verticalAlignment": "space-between",
							"justifyContent": "left"
						}
					} -->
					<div class="wp-block-group alignfull">
						<!-- wp:group {
							"metadata": {
								"name": "Content Bottom"
							},
							"className": "is-type-mbf-stick-bottom",
							"layout": {
								"type": "constrained",
								"contentSize": "375px",
								"justifyContent": "left"
							}
						} -->
						<div class="wp-block-group is-type-mbf-stick-bottom">
							<!-- wp:term-description {
								"align": "wide",
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
							} /-->

							<!-- wp:buttons {
								"style": {
									"spacing": {
										"margin": {
											"top": "var:preset|spacing|100"
										}
									}
								}
							} -->
							<div class="wp-block-buttons" style="margin-top: var(--wp--preset--spacing--100)">
								<!-- wp:button {
									"metadata": {
										"bindings": {
											"url": {
												"source": "core/term-data",
												"args": {
													"field": "link"
												}
											}
										}
									},
									"className": "is-type-mbf-button-featured is-style-fill",
									"style": {
										"typography": {
											"textTransform": "uppercase",
											"fontStyle": "normal",
											"fontWeight": "800"
										}
									},
									"fontSize": "x-small"
								} -->
								<div class="wp-block-button is-type-mbf-button-featured is-style-fill">
									<a
										class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button"
										style="font-style: normal; font-weight: 800; text-transform: uppercase"
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
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:term-template -->
	</div>
	<!-- /wp:terms-query -->
</div>
<!-- /wp:group -->
