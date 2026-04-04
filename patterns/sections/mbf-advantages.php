<?php
/**
 * Title: Advantages
 * Slug: capsule/mbf-advantages
 * Description: Advantages
 * Categories: mbfpatterns
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Advantages",
		"categories": [
			"page",
			"mbfpages"
		],
		"patternName": "capsule/mbf-advantages"
	},
	"style": {
		"spacing": {
			"padding": {
				"top": "var:preset|spacing|30",
				"bottom": "var:preset|spacing|30"
			}
		}
	},
	"backgroundColor": "mbf-secondary",
	"layout": {
		"type": "constrained"
	}
} -->
<div
	class="wp-block-group has-mbf-secondary-background-color has-background"
	style="padding-top: var(--wp--preset--spacing--30); padding-bottom: var(--wp--preset--spacing--30)"
>
	<!-- wp:group {
		"metadata": {
			"name": "Advantages Outer Container"
		},
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|20"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "wrap"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {
			"metadata": {
				"name": "Advantages One"
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"justifyContent": "center"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|30"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"verticalAlignment": "center",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:group {
					"metadata": {
						"name": "Image"
					},
					"layout": {
						"type": "constrained",
						"contentSize": "32px"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:image {
						"id": 233,
						"scale": "cover",
						"sizeSlug": "full",
						"linkDestination": "none"
					} -->
					<figure class="wp-block-image size-full">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-payment.webp"
							alt=""
							class="wp-image-233"
							style="object-fit: cover"
						/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {
						"style": {
							"elements": {
								"link": {
									"color": {
										"text": "var:preset|color|mbf-layout-background"
									}
								}
							}
						},
						"textColor": "mbf-layout-background",
						"fontSize": "small"
					} -->
					<p class="has-mbf-layout-background-color has-text-color has-link-color has-small-font-size">
						<?php echo esc_html__( 'Secure Checkout &amp; Buyer Protection', 'capsule' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Advantages One"
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"justifyContent": "center"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|30"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"verticalAlignment": "center",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:group {
					"metadata": {
						"name": "Image"
					},
					"layout": {
						"type": "constrained",
						"contentSize": "32px"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:image {
						"id": 236,
						"scale": "cover",
						"sizeSlug": "full",
						"linkDestination": "none"
					} -->
					<figure class="wp-block-image size-full">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-shipping.webp"
							alt=""
							class="wp-image-236"
							style="object-fit: cover"
						/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {
						"style": {
							"elements": {
								"link": {
									"color": {
										"text": "var:preset|color|mbf-layout-background"
									}
								}
							}
						},
						"textColor": "mbf-layout-background",
						"fontSize": "small"
					} -->
					<p class="has-mbf-layout-background-color has-text-color has-link-color has-small-font-size">
						<?php echo esc_html__( 'Free Express Shipping Over $250', 'capsule' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Advantages One"
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"justifyContent": "center"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|30"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"verticalAlignment": "center",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:group {
					"metadata": {
						"name": "Image"
					},
					"layout": {
						"type": "constrained",
						"contentSize": "32px"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:image {
						"id": 237,
						"scale": "cover",
						"sizeSlug": "full",
						"linkDestination": "none"
					} -->
					<figure class="wp-block-image size-full">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-returns.webp"
							alt=""
							class="wp-image-237"
							style="object-fit: cover"
						/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {
						"style": {
							"elements": {
								"link": {
									"color": {
										"text": "var:preset|color|mbf-layout-background"
									}
								}
							}
						},
						"textColor": "mbf-layout-background",
						"fontSize": "small"
					} -->
					<p class="has-mbf-layout-background-color has-text-color has-link-color has-small-font-size">
						<?php echo esc_html__( '30-Day Hassle-Free Returns', 'capsule' ); ?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Advantages One"
			},
			"layout": {
				"type": "flex",
				"flexWrap": "nowrap",
				"justifyContent": "center"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"style": {
					"spacing": {
						"blockGap": "var:preset|spacing|30"
					}
				},
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap",
					"verticalAlignment": "center",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:group {
					"metadata": {
						"name": "Image"
					},
					"layout": {
						"type": "constrained",
						"contentSize": "32px"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:image {
						"id": 238,
						"scale": "cover",
						"sizeSlug": "full",
						"linkDestination": "none"
					} -->
					<figure class="wp-block-image size-full">
						<img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-support.webp"
							alt=""
							class="wp-image-238"
							style="object-fit: cover"
						/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {
					"metadata": {
						"name": "Content"
					},
					"layout": {
						"type": "constrained"
					}
				} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {
						"style": {
							"elements": {
								"link": {
									"color": {
										"text": "var:preset|color|mbf-layout-background"
									}
								}
							}
						},
						"textColor": "mbf-layout-background",
						"fontSize": "small"
					} -->
					<p class="has-mbf-layout-background-color has-text-color has-link-color has-small-font-size">
						<?php echo esc_html__( '24/7 Always-On Support', 'capsule' ); ?>
					</p>
					<!-- /wp:paragraph -->
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
