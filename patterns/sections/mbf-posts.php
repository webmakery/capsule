<?php
/**
 * Title: Posts
 * Slug: capsule/mbf-posts
 * Description: Responsive section displaying posts.
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
		"patternName": "capsule/mbf-posts",
		"name": "Posts"
	},
	"style": {
		"spacing": {
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
<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0">
	<!-- wp:group {
		"lock": {
			"move": true,
			"remove": true
		},
		"metadata": {
			"name": "Section Header"
		},
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|20",
				"margin": {
					"top": "0",
					"bottom": "var:preset|spacing|60"
				}
			}
		},
		"align": "wide",
		"layout": {
			"type": "flex",
			"flexWrap": "wrap",
			"justifyContent": "space-between",
			"verticalAlignment": "bottom"
		}
	} -->
	<div class="wp-block-group alignwide" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--60)">
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

			<!-- wp:paragraph {
				"style": {
					"elements": {
						"link": {
							"color": {
								"text": "var:preset|color|mbf-secondary"
							}
						}
					},
					"typography": {
						"fontStyle": "normal",
						"fontWeight": "400"
					}
				},
				"textColor": "mbf-secondary",
				"fontSize": "x-medium"
			} -->
			<p
				class="has-mbf-secondary-color has-text-color has-link-color has-x-medium-font-size"
				style="font-style: normal; font-weight: 400"
			>
				<?php echo esc_html__( 'Catch up on fresh articles and insights.', 'capsule' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Section Header Link"
			},
			"layout": {
				"type": "constrained",
				"justifyContent": "right"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {
				"fontSize": "small"
			} -->
			<p class="has-small-font-size">
				<a href="/"><?php echo esc_html__( 'Read All', 'capsule' ); ?></a>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {
		"queryId": 0,
		"query": {
			"perPage": 4,
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
		"align": "wide",
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-query alignwide">
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
					"blockGap": "var:preset|spacing|40"
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
							"blockGap": "0.125rem",
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
						"fontSize": "small"
					} /-->

					<!-- wp:post-title {
						"isLink": true,
						"lock": {
							"move": false,
							"remove": false
						},
						"fontSize": "x-medium"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
