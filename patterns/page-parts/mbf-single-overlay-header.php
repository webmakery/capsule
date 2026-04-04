<?php
/**
 * Title: Single Overlay Header
 * Slug: capsule/mbf-single-overlay-header
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Single Overlay Header",
		"categories": [
			"mbfpatterns",
			"banner"
		],
		"patternName": "capsule/mbf-single-overlay-header",
		"mbf": {
			"settings": {
				"desktop-aspect-ratio": "21-9",
				"tablet-aspect-ratio": "21-9",
				"mobile-aspect-ratio": "3-4",
				"stretch-mobile": true
			}
		}
	},
	"align": "full",
	"layout": {
		"type": "constrained"
	}
} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {
		"lock": {
			"move": true,
			"remove": true
		},
		"metadata": {
			"name": "Outer Container"
		},
		"align": "full",
		"layout": {
			"type": "constrained",
			"contentSize": "100%"
		}
	} -->
	<div class="wp-block-group alignfull">
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
			<!-- wp:post-featured-image {
				"aspectRatio": "16/9",
				"lock": {
					"move": false,
					"remove": false
				},
				"align": "full",
				"style": {
					"spacing": {
						"margin": {
							"top": "0",
							"bottom": "0",
							"right": "0",
							"left": "0"
						}
					}
				}
			} /-->
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
			"className": "is-style-section-4 is-style-section-overlay",
			"style": {
				"spacing": {
					"padding": {
						"top": "var:preset|spacing|100",
						"bottom": "var:preset|spacing|100",
						"left": "var:preset|spacing|100",
						"right": "var:preset|spacing|100"
					}
				}
			},
			"backgroundColor": "mbf-overlay",
			"layout": {
				"type": "flex",
				"orientation": "vertical",
				"justifyContent": "center",
				"verticalAlignment": "space-between"
			}
		} -->
		<div
			class="wp-block-group alignfull is-style-section-4 is-style-section-overlay has-mbf-overlay-background-color has-background"
			style="
				padding-top: var(--wp--preset--spacing--100);
				padding-right: var(--wp--preset--spacing--100);
				padding-bottom: var(--wp--preset--spacing--100);
				padding-left: var(--wp--preset--spacing--100);
			"
		>
			<!-- wp:group {
				"lock": {
					"move": false,
					"remove": false
				},
				"metadata": {
					"name": "Top Content"
				},
				"align": "wide",
				"layout": {
					"type": "constrained",
					"contentSize": "694px"
				}
			} -->
			<div class="wp-block-group alignwide">
				<!-- wp:post-title {
					"textAlign": "center",
					"level": 1,
					"lock": {
						"move": false,
						"remove": true
					},
					"style": {
						"spacing": {
							"padding": {
								"bottom": "0"
							}
						},
						"typography": {
							"textTransform": "uppercase"
						}
					},
					"fontSize": "x-large"
				} /-->

				<!-- wp:group {
					"metadata": {
						"name": "Excerpt Container"
					},
					"style": {
						"spacing": {
							"margin": {
								"top": "0",
								"bottom": "0"
							},
							"blockGap": "0"
						}
					},
					"layout": {
						"type": "constrained",
						"contentSize": "558px"
					}
				} -->
				<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0">
					<!-- wp:post-excerpt {
						"textAlign": "center",
						"excerptLength": 20,
						"lock": {
							"move": true,
							"remove": false
						},
						"style": {
							"spacing": {
								"margin": {
									"top": "var:preset|spacing|30"
								}
							},
							"elements": {
								"link": {
									"color": {
										"text": "var:preset|color|mbf-secondary"
									}
								}
							},
							"typography": {
								"lineHeight": "1.6",
								"fontStyle": "normal",
								"fontWeight": "400"
							}
						},
						"textColor": "mbf-secondary",
						"fontSize": "x-medium"
					} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {
				"metadata": {
					"name": "Content Bottom"
				},
				"className": "is-type-mbf-stick-bottom is-style-default",
				"style": {
					"spacing": {
						"padding": {
							"top": "var:preset|spacing|30",
							"bottom": "var:preset|spacing|30",
							"left": "var:preset|spacing|30",
							"right": "var:preset|spacing|30"
						}
					},
					"border": {
						"radius": {
							"topLeft": "4px",
							"topRight": "4px",
							"bottomLeft": "4px",
							"bottomRight": "4px"
						}
					}
				},
				"backgroundColor": "mbf-site-background",
				"layout": {
					"type": "constrained"
				}
			} -->
			<div
				class="wp-block-group is-type-mbf-stick-bottom is-style-default has-mbf-site-background-background-color has-background"
				style="
					border-top-left-radius: 4px;
					border-top-right-radius: 4px;
					border-bottom-left-radius: 4px;
					border-bottom-right-radius: 4px;
					padding-top: var(--wp--preset--spacing--30);
					padding-right: var(--wp--preset--spacing--30);
					padding-bottom: var(--wp--preset--spacing--30);
					padding-left: var(--wp--preset--spacing--30);
				"
			>
				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": false
					},
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|30"
						}
					},
					"layout": {
						"type": "flex",
						"flexWrap": "nowrap",
						"justifyContent": "space-between"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {
						"term": "category",
						"textAlign": "center",
						"separator": "",
						"lock": {
							"move": true,
							"remove": false
						},
						"className": "is-style-post-terms-badge"
					} /-->

					<!-- wp:group {
						"templateLock": false,
						"lock": {
							"move": true,
							"remove": false
						},
						"align": "wide",
						"style": {
							"spacing": {
								"blockGap": "var:preset|spacing|30",
								"margin": {
									"top": "0",
									"bottom": "0"
								}
							}
						},
						"layout": {
							"type": "flex",
							"flexWrap": "nowrap",
							"justifyContent": "center",
							"verticalAlignment": "center"
						}
					} -->
					<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: 0">
						<!-- wp:post-date {
							"textAlign": "left",
							"lock": {
								"move": true,
								"remove": false
							},
							"metadata": {
								"bindings": {
									"datetime": {
										"source": "core/post-data",
										"args": {
											"field": "date"
										}
									}
								}
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
							"textColor": "mbf-secondary",
							"fontSize": "x-small"
						} /-->

						<!-- wp:group {
							"lock": {
								"move": true,
								"remove": false
							},
							"style": {
								"spacing": {
									"blockGap": "var:preset|spacing|10"
								},
								"elements": {
									"link": {
										"color": {
											"text": "var:preset|color|mbf-secondary"
										}
									}
								}
							},
							"textColor": "mbf-secondary",
							"fontSize": "x-small",
							"layout": {
								"type": "flex",
								"flexWrap": "nowrap"
							}
						} -->
						<div class="wp-block-group has-mbf-secondary-color has-text-color has-link-color has-x-small-font-size">
							<!-- wp:paragraph {
								"className": "has-small-font-size",
								"fontSize": "x-small"
							} -->
							<p class="has-small-font-size has-x-small-font-size"><?php esc_html_e( 'by', 'capsule' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:post-author-name {
								"isLink": true,
								"lock": {
									"move": true,
									"remove": false
								},
								"fontSize": "x-small"
							} /-->
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
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
