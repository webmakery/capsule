<?php
/**
 * Title: Banner
 * Slug: capsule/mbf-banner
 * Description: Rresponsive banner section
 * Categories: mbfpatterns, banner
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Banner",
		"categories": [
			"mbfpatterns",
			"banner"
		],
		"patternName": "capsule/mbf-banner",
		"mbf": {
			"settings": {
				"desktop-aspect-ratio": "16-9",
				"tablet-aspect-ratio": "16-9",
				"mobile-aspect-ratio": "3-4",
				"stretch-mobile": false,
				"text_animation": true
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
				"id": 187,
				"sizeSlug": "full",
				"linkDestination": "custom",
				"lock": {
					"move": true,
					"remove": true
				},
				"align": "full"
			} -->
			<figure class="wp-block-image alignfull size-full">
				<img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-image-0001.webp"
					alt=""
					class="wp-image-187"
				/>
			</figure>
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
			"className": "is-style-section-4 is-style-section-overlay",
			"style": {
				"spacing": {
					"padding": {
						"top": "var:preset|spacing|140",
						"bottom": "var:preset|spacing|140",
						"left": "var:preset|spacing|110",
						"right": "var:preset|spacing|110"
					}
				}
			},
			"backgroundColor": "mbf-overlay",
			"layout": {
				"type": "constrained",
				"justifyContent": "center"
			}
		} -->
		<div
			class="wp-block-group alignfull is-style-section-4 is-style-section-overlay has-mbf-overlay-background-color has-background"
			style="
				padding-top: var(--wp--preset--spacing--140);
				padding-right: var(--wp--preset--spacing--110);
				padding-bottom: var(--wp--preset--spacing--140);
				padding-left: var(--wp--preset--spacing--110);
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
				"align": "wide",
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"orientation": "vertical",
					"verticalAlignment": "space-between",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {
					"metadata": {
						"name": "Content Top"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:group {
						"metadata": {
							"name": "Label"
						},
						"layout": {
							"type": "constrained",
							"contentSize": "375px"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {
							"align": "center",
							"className": "is-type-mbf-label",
							"fontSize": "x-small",
							"fontFamily": "base"
						} -->
						<p class="has-text-align-center is-type-mbf-label has-base-font-family has-x-small-font-size"><?php echo esc_html__( 'FW’25', 'capsule' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content Center"
					},
					"className": "is-type-mbf-stick-bottom",
					"layout": {
						"type": "constrained"
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
						<!-- wp:heading {
							"textAlign": "center",
							"style": {
								"typography": {
									"textTransform": "uppercase"
								}
							}
						} -->
						<h2 class="wp-block-heading has-text-align-center" style="text-transform: uppercase"><?php esc_html_e( 'Built on Better, Stronger Basics', 'capsule' ); ?></h2>
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
						<p class="has-text-align-center has-mbf-secondary-color has-text-color has-link-color has-base-font-family"><?php	esc_html_e( 'Core pieces upgraded with stronger materials and refined tailoring. Made to perform consistently across seasons.', 'capsule' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content Bottom"
					},
					"className": "is-type-mbf-stick-bottom",
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group is-type-mbf-stick-bottom">
					<!-- wp:group {
						"metadata": {
							"name": "Images"
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:columns {
							"verticalAlignment": "center",
							"style": {
								"spacing": {
									"blockGap": {
										"top": "var:preset|spacing|100",
										"left": "var:preset|spacing|100"
									}
								}
							}
						} -->
						<div class="wp-block-columns are-vertically-aligned-center">
							<!-- wp:column {
								"verticalAlignment": "center",
								"width": "208px",
								"layout": {
									"type": "constrained"
								}
							} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 208px">
								<!-- wp:group {
									"style": {
										"spacing": {
											"blockGap": "var:preset|spacing|30"
										}
									},
									"layout": {
										"type": "constrained"
									}
								} -->
								<div class="wp-block-group">
									<!-- wp:image {
										"id": 353,
										"width": "64px",
										"height": "64px",
										"scale": "cover",
										"sizeSlug": "full",
										"linkDestination": "none",
										"align": "center"
									} -->
									<figure class="wp-block-image aligncenter size-full is-resized">
										<img
											src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shipping.webp"
											alt=""
											class="wp-image-353"
											style="object-fit: cover; width: 64px; height: 64px"
										/>
									</figure>
									<!-- /wp:image -->

									<!-- wp:paragraph {
										"align": "center",
										"fontSize": "small",
										"fontFamily": "base"
									} -->
									<p class="has-text-align-center has-base-font-family has-small-font-size"><?php esc_html_e( 'Lightweight Comfort', 'capsule' ); ?></p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {
								"verticalAlignment": "center",
								"width": "208px",
								"layout": {
									"type": "constrained"
								}
							} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 208px">
								<!-- wp:group {
									"style": {
										"spacing": {
											"blockGap": "var:preset|spacing|30"
										}
									},
									"layout": {
										"type": "constrained"
									}
								} -->
								<div class="wp-block-group">
									<!-- wp:image {
										"id": 366,
										"width": "64px",
										"height": "64px",
										"scale": "cover",
										"sizeSlug": "full",
										"linkDestination": "none",
										"align": "center"
									} -->
									<figure class="wp-block-image aligncenter size-full is-resized">
										<img
											src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/time.webp"
											alt=""
											class="wp-image-366"
											style="object-fit: cover; width: 64px; height: 64px"
										/>
									</figure>
									<!-- /wp:image -->

									<!-- wp:paragraph {
										"align": "center",
										"fontSize": "small",
										"fontFamily": "base"
									} -->
									<p class="has-text-align-center has-base-font-family has-small-font-size"><?php esc_html_e( 'Advanced Durability', 'capsule' ); ?></p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {
								"verticalAlignment": "center",
								"width": "208px",
								"layout": {
									"type": "constrained"
								}
							} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 208px">
								<!-- wp:group {
									"style": {
										"spacing": {
											"blockGap": "var:preset|spacing|30"
										}
									},
									"layout": {
										"type": "constrained"
									}
								} -->
								<div class="wp-block-group">
									<!-- wp:image {
										"id": 367,
										"width": "64px",
										"height": "64px",
										"scale": "cover",
										"sizeSlug": "full",
										"linkDestination": "none",
										"align": "center"
									} -->
									<figure class="wp-block-image aligncenter size-full is-resized">
										<img
											src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/square.webp"
											alt=""
											class="wp-image-367"
											style="object-fit: cover; width: 64px; height: 64px"
										/>
									</figure>
									<!-- /wp:image -->

									<!-- wp:paragraph {
										"align": "center",
										"fontSize": "small",
										"fontFamily": "base"
									} -->
									<p class="has-text-align-center has-base-font-family has-small-font-size"><?php esc_html_e( 'Smart Performance', 'capsule' ); ?></p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
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
