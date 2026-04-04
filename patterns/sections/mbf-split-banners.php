<?php
/**
 * Title: Split Banner Section
 * Slug: capsule/mbf-split-banners
 * Description: Split Banner Section
 * Categories: mbfpatterns, banner
 */
?>

<!-- wp:group {
	"metadata": {
		"categories": [
			"mbfpatterns",
			"banner"
		],
		"patternName": "capsule/mbf-split-banners",
		"name": "Split Banner Section",
		"mbf": {
			"settings": {
				"desktop-aspect-ratio": "4-3",
				"tablet-aspect-ratio": "4-3",
				"mobile-aspect-ratio": "3-4",
				"stretch-mobile": false,
				"columns": "2"
			}
		}
	},
	"align": "wide"
} -->
<div class="wp-block-group alignwide">
	<!-- wp:group {
		"lock": {
			"move": true,
			"remove": true
		},
		"metadata": {
			"name": "Outer Container"
		},
		"align": "full",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|10"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "nowrap"
		}
	} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {
			"templateLock": false,
			"lock": {
				"move": false,
				"remove": false
			},
			"metadata": {
				"name": "Banner"
			},
			"align": "full",
			"className": "is-style-default",
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group alignfull is-style-default">
			<!-- wp:group {
				"templateLock": "all",
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Thumbnail"
				},
				"align": "full",
				"className": "is-style-section-4",
				"layout": {
					"type": "constrained"
				}
			} -->
			<div class="wp-block-group alignfull is-style-section-4">
				<!-- wp:image {
					"lightbox": {
						"enabled": false
					},
					"id": 189,
					"sizeSlug": "full",
					"linkDestination": "custom",
					"lock": {
						"move": true,
						"remove": true
					},
					"align": "full"
				} -->
				<figure class="wp-block-image alignfull size-full">
					<a href="/">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
							alt=""
							class="wp-image-189"
						/>
					</a>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {
				"templateLock": "all",
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
							"top": "var:preset|spacing|120",
							"bottom": "var:preset|spacing|120",
							"left": "var:preset|spacing|120",
							"right": "var:preset|spacing|120"
						}
					}
				},
				"layout": {
					"type": "constrained",
					"justifyContent": "center"
				}
			} -->
			<div
				class="wp-block-group alignfull is-style-section-4 is-style-section-overlay"
				style="
					padding-top: var(--wp--preset--spacing--120);
					padding-right: var(--wp--preset--spacing--120);
					padding-bottom: var(--wp--preset--spacing--120);
					padding-left: var(--wp--preset--spacing--120);
				"
			>
				<!-- wp:group {
					"metadata": {
						"name": "Content Top"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {
						"metadata": {
							"name": "Badge"
						},
						"className": "is-type-mbf-label",
						"fontSize": "x-small",
						"fontFamily": "base"
					} -->
					<p class="is-type-mbf-label has-base-font-family has-x-small-font-size"><?php echo esc_html__( 'Sale', 'capsule' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": false
					},
					"metadata": {
						"name": "Content Bottom"
					},
					"className": "is-type-mbf-stick-bottom",
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|30"
						}
					},
					"layout": {
						"type": "flex",
						"flexWrap": "nowrap",
						"orientation": "vertical",
						"justifyContent": "center"
					}
				} -->
				<div class="wp-block-group is-type-mbf-stick-bottom">
					<!-- wp:group {
						"metadata": {
							"name": "Heading"
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:heading -->
						<h2 class="wp-block-heading"><?php echo esc_html__( 'Power in Motion', 'capsule' ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {
						"metadata": {
							"name": "Description"
						},
						"layout": {
							"type": "constrained",
							"contentSize": "375px"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {
							"align": "center",
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
							"fontFamily": "base"
						} -->
						<p class="has-text-align-center has-mbf-secondary-color has-text-color has-link-color has-base-font-family"><?php echo esc_html__( 'High-performance footwear built with advanced cushioning, responsive support, and durable construction.', 'capsule' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {
							"textAlign": "center",
							"className": "is-style-mbf-button-secondary is-type-mbf-button-featured"
						} -->
						<div class="wp-block-button is-style-mbf-button-secondary is-type-mbf-button-featured">
							<a class="wp-block-button__link has-text-align-center wp-element-button" href="/"><?php echo esc_html__( 'Explore sale', 'capsule' ); ?></a>
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

		<!-- wp:group {
			"templateLock": false,
			"lock": {
				"move": false,
				"remove": false
			},
			"metadata": {
				"name": "Banner"
			},
			"align": "full",
			"className": "is-style-default",
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group alignfull is-style-default">
			<!-- wp:group {
				"templateLock": "all",
				"lock": {
					"move": true,
					"remove": true
				},
				"metadata": {
					"name": "Thumbnail"
				},
				"align": "full",
				"className": "is-style-section-4",
				"layout": {
					"type": "constrained"
				}
			} -->
			<div class="wp-block-group alignfull is-style-section-4">
				<!-- wp:image {
					"lightbox": {
						"enabled": false
					},
					"id": 14,
					"sizeSlug": "full",
					"linkDestination": "custom",
					"lock": {
						"move": true,
						"remove": true
					},
					"align": "full"
				} -->
				<figure class="wp-block-image alignfull size-full">
					<a href="/">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
							alt=""
							class="wp-image-14"
						/>
					</a>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {
				"templateLock": "all",
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
							"top": "var:preset|spacing|120",
							"bottom": "var:preset|spacing|120",
							"left": "var:preset|spacing|120",
							"right": "var:preset|spacing|120"
						}
					}
				},
				"layout": {
					"type": "constrained",
					"justifyContent": "center"
				}
			} -->
			<div
				class="wp-block-group alignfull is-style-section-4 is-style-section-overlay"
				style="
					padding-top: var(--wp--preset--spacing--120);
					padding-right: var(--wp--preset--spacing--120);
					padding-bottom: var(--wp--preset--spacing--120);
					padding-left: var(--wp--preset--spacing--120);
				"
			>
				<!-- wp:group {
					"metadata": {
						"name": "Content Top"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {
						"metadata": {
							"name": "Badge"
						},
						"className": "is-type-mbf-label",
						"fontSize": "x-small",
						"fontFamily": "base"
					} -->
					<p class="is-type-mbf-label has-base-font-family has-x-small-font-size"><?php echo esc_html__( 'Sale', 'capsule' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"lock": {
						"move": true,
						"remove": false
					},
					"metadata": {
						"name": "Content Bottom"
					},
					"className": "is-type-mbf-stick-bottom",
					"style": {
						"spacing": {
							"blockGap": "var:preset|spacing|30"
						}
					},
					"layout": {
						"type": "flex",
						"flexWrap": "nowrap",
						"orientation": "vertical",
						"justifyContent": "center"
					}
				} -->
				<div class="wp-block-group is-type-mbf-stick-bottom">
					<!-- wp:group {
						"metadata": {
							"name": "Heading"
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:heading -->
						<h2 class="wp-block-heading"><?php echo esc_html__( 'New Drop. New Rules', 'capsule' ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {
						"metadata": {
							"name": "Description"
						},
						"layout": {
							"type": "constrained",
							"contentSize": "375px"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {
							"align": "center",
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
							"fontFamily": "base"
						} -->
						<p class="has-text-align-center has-mbf-secondary-color has-text-color has-link-color has-base-font-family"><?php echo esc_html__( 'New season pieces added to the collection, available in updated colors and fits.', 'capsule' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {
							"textAlign": "center",
							"className": "is-style-mbf-button-secondary is-type-mbf-button-featured"
						} -->
						<div class="wp-block-button is-style-mbf-button-secondary is-type-mbf-button-featured">
							<a class="wp-block-button__link has-text-align-center wp-element-button" href="/"><?php echo esc_html__( 'Explore sale', 'capsule' ); ?></a>
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
