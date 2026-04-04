<?php
/**
 * Title: Single Footer
 * Slug: capsule/mbf-single-footer
 * Inserter: no
 */
?>

<!-- wp:group {
	"lock": {
		"move": false,
		"remove": false
	},
	"metadata": {
		"name": "Single Footer",
		"patternName": "capsule/mbf-single-footer"
	},
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|30"
		}
	},
	"layout": {
		"type": "constrained",
		"contentSize": "694px",
		"wideSize": "694px"
	}
} -->
<div class="wp-block-group">
	<!-- wp:group {
		"metadata": {
			"name": "Tags"
		},
		"style": {
			"spacing": {
				"padding": {
					"right": "var:preset|spacing|30",
					"left": "var:preset|spacing|30"
				}
			}
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div
		class="wp-block-group"
		style="padding-right: var(--wp--preset--spacing--30); padding-left: var(--wp--preset--spacing--30)"
	>
		<!-- wp:post-terms {
			"term": "post_tag",
			"separator": "",
			"className": "is-style-default",
			"style": {
				"spacing": {
					"margin": {
						"bottom": "var:preset|spacing|30"
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
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|40",
				"margin": {
					"top": "0",
					"bottom": "0"
				},
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
		"backgroundColor": "mbf-layout-background",
		"layout": {
			"type": "flex",
			"flexWrap": "nowrap",
			"justifyContent": "space-between"
		}
	} -->
	<div
		class="wp-block-group has-mbf-layout-background-background-color has-background"
		style="
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
			border-bottom-left-radius: 4px;
			border-bottom-right-radius: 4px;
			margin-top: 0;
			margin-bottom: 0;
			padding-top: var(--wp--preset--spacing--30);
			padding-right: var(--wp--preset--spacing--30);
			padding-bottom: var(--wp--preset--spacing--30);
			padding-left: var(--wp--preset--spacing--30);
		"
	>
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
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|30"
				}
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:post-date {
				"textAlign": "left",
				"format": "F j, Y",
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
				"className": "wp-block-post-date__modified-date"
			} /-->

			<!-- wp:group {
				"lock": {
					"move": false,
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
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'by', 'capsule' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:post-author-name {
					"isLink": true,
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
</div>
<!-- /wp:group -->
