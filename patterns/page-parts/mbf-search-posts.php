<?php
/**
 * Title: Search Posts Grid
 * Slug: capsule/mbf-search-posts
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns"
		],
		"name": "Posts",
		"patternName": "capsule/mbf-search-posts"
	},
	"align": "wide",
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
		<p class="has-large-font-size"><?php esc_html_e( 'Posts', 'capsule' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {
		"queryId": 37782,
		"query": {
			"perPage": 6,
			"pages": 0,
			"offset": "0",
			"postType": "post",
			"order": "desc",
			"orderBy": "date",
			"author": "",
			"search": "",
			"exclude": [],
			"sticky": "",
			"inherit": false,
			"taxQuery": null,
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
