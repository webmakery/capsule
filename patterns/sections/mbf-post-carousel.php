<?php
/**
 * Title: Post Carousel
 * Slug: capsule/mbf-post-carousel
 * Description: Responsive Carousel section displaying posts.
 * Categories: mbfpatterns, posts
 * Block Types: core/query
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns",
			"posts"
		],
		"patternName": "capsule/mbf-post-carousel",
		"name": "Post Carousel"
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
			"name": "Section Header"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"margin": {
					"top": "0",
					"bottom": "var:preset|spacing|70"
				}
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "wrap",
			"justifyContent": "space-between",
			"verticalAlignment": "center"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--70)">
		<!-- wp:group {
			"lock": {
				"move": true,
				"remove": true
			},
			"metadata": {
				"name": "Section Heading"
			},
			"align": "wide",
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|20"
				}
			},
			"layout": {
				"type": "default"
			}
		} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {
				"level": 2,
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
				<?php echo esc_html__( 'Latest Stories', 'capsule' ); ?>
			</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group">
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
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-buttons" style="margin-top: 0; margin-bottom: 0">
				<!-- wp:button {
					"className": "is-type-mbf-button-featured is-style-mbf-button-secondary",
					"style": {
						"spacing": {
							"padding": {
								"left": "0",
								"right": "0",
								"top": "0",
								"bottom": "0"
							}
						}
					}
				} -->
				<div class="wp-block-button is-type-mbf-button-featured is-style-mbf-button-secondary">
					<a
						class="wp-block-button__link wp-element-button"
						href="/"
						style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
					>
						Read all
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {
		"lock": {
			"move": true,
			"remove": true
		},
		"metadata": {
			"name": "Post Query Container"
		},
		"align": "wide",
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
				},
				"blockGap": "var:preset|spacing|10"
			}
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div
		class="wp-block-group alignwide"
		style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0"
	>
		<!-- wp:query {
			"queryId": 0,
			"query": {
				"perPage": 8,
				"pages": 0,
				"offset": "0",
				"postType": "post",
				"order": "desc",
				"orderBy": "date",
				"author": "",
				"search": "",
				"exclude": [],
				"sticky": "",
				"inherit": false
			},
			"lock": {
				"move": true,
				"remove": true
			},
			"className": "is-type-mbf-slider",
			"align": "full",
			"layout": {
				"type": "default"
			}
		} -->
		<div class="wp-block-query alignfull is-type-mbf-slider">
			<!-- wp:post-template {
				"lock": {
					"move": false,
					"remove": false
				},
				"align": "full",
				"style": {
					"spacing": {
						"blockGap": "0.125rem"
					}
				},
				"layout": {
					"type": "grid",
					"columnCount": 6,
					"minimumColumnWidth": null
				}
			} -->
			<!-- wp:group {
				"lock": {
					"move": false,
					"remove": false
				},
				"metadata": {
					"name": "Post Card"
				},
				"className": "is-style-default",
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|50"
					}
				},
				"layout": {
					"type": "flex",
					"orientation": "vertical"
				}
			} -->
			<div class="wp-block-group is-style-default">
				<!-- wp:group {
					"lock": {
						"move": false,
						"remove": false
					},
					"metadata": {
						"name": "Post Thumbnail"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {
						"isLink": true,
						"aspectRatio": "3/4",
						"sizeSlug": "large",
						"lock": {
							"move": false,
							"remove": false
						},
						"style": {
							"spacing": {
								"margin": {
									"bottom": "0"
								}
							}
						}
					} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"lock": {
						"move": false,
						"remove": false
					},
					"metadata": {
						"name": "Post Content"
					},
					"className": "is-type-mbf-stick-bottom",
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|30"
						}
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group is-type-mbf-stick-bottom">
					<!-- wp:group {
						"lock": {
							"move": false,
							"remove": false
						},
						"metadata": {
							"name": "Post Info"
						},
						"style": {
							"spacing": {
								"blockGap": "var:preset|spacing|110",
								"margin": {
									"top": "0"
								},
								"padding": {
									"right": "var:preset|spacing|70"
								}
							}
						},
						"layout": {
							"type": "flex",
							"orientation": "vertical",
							"flexWrap": "nowrap"
						}
					} -->
					<div class="wp-block-group" style="margin-top: 0; padding-right: var(--wp--preset--spacing--70)">
						<!-- wp:post-date {
							"lock": {
								"move": false,
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

						<!-- wp:post-title {
							"isLink": true,
							"lock": {
								"move": false,
								"remove": false
							},
							"fontSize": "medium"
						} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {
						"excerptLength": 16,
						"style": {
							"spacing": {
								"padding": {
									"right": "var:preset|spacing|120"
								}
							}
						}
					} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
