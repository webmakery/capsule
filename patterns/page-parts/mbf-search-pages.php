<?php
/**
 * Title: Search Pages Grid
 * Slug: capsule/mbf-search-pages
 * Inserter: no
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns"
		],
		"name": "Pages",
		"patternName": "capsule/mbf-search-pages"
	},
	"className": "alignwide",
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|70",
			"margin": {
				"top": "var:preset|spacing|140",
				"bottom": "var:preset|spacing|160"
			}
		}
	}
} -->
<div
	class="wp-block-group alignwide"
	style="margin-top: var(--wp--preset--spacing--140); margin-bottom: var(--wp--preset--spacing--160)"
>
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
		<p class="has-large-font-size"><?php esc_html_e( 'Pages', 'capsule' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {
		"queryId": 54524,
		"query": {
			"perPage": 8,
			"pages": 0,
			"offset": "0",
			"postType": "page",
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
		"layout": {
			"type": "default"
		}
	} -->
	<div class="wp-block-query">
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
			"metadata": {
				"name": "Page Template"
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
			"metadata": {
				"name": "Post Card"
			},
			"className": "is-style-default",
			"style": {
				"spacing": {
					"padding": {
						"top": "var:preset|spacing|50",
						"bottom": "var:preset|spacing|50",
						"left": "var:preset|spacing|100",
						"right": "var:preset|spacing|100"
					},
					"blockGap": "var:preset|spacing|30"
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
			"backgroundColor": "mbf-layout-background",
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap"
			}
		} -->
		<div
			class="wp-block-group is-style-default has-mbf-layout-background-background-color has-background"
			style="
				border-top-left-radius: 4px;
				border-top-right-radius: 4px;
				border-bottom-left-radius: 4px;
				border-bottom-right-radius: 4px;
				padding-top: var(--wp--preset--spacing--50);
				padding-right: var(--wp--preset--spacing--100);
				padding-bottom: var(--wp--preset--spacing--50);
				padding-left: var(--wp--preset--spacing--100);
			"
		>
			<!-- wp:group {
				"metadata": {
					"name": "Image Column"
				},
				"style": {
					"layout": {
						"selfStretch": "fixed",
						"flexSize": "40px"
					}
				},
				"layout": {
					"type": "constrained",
					"contentSize": "40px"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:image {
					"id": 286,
					"width": "40px",
					"height": "40px",
					"scale": "cover",
					"sizeSlug": "full",
					"linkDestination": "none"
				} -->
				<figure class="wp-block-image size-full is-resized">
					<img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/page.webp"
						alt=""
						class="wp-image-286"
						style="object-fit: cover; width: 40px; height: 40px"
					/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {
				"level": 5
			} /-->
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
