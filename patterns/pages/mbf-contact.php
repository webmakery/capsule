<?php
/**
 * Title: Contact
 * Slug: capsule/mbf-contact
 * Description: Contact Page
 * Categories: mbfpatterns
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Contact",
		"categories": [
			"mbfpatterns"
		],
		"patternName": "capsule/mbf-contact"
	},
	"align": "full",
	"layout": {
		"type": "constrained",
		"justifyContent": "left"
	}
} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {
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
				"move": false,
				"remove": false
			},
			"metadata": {
				"name": "Background Image"
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
				"id": 193,
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
					class="wp-image-193"
				/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "Overlay Content"
			},
			"align": "wide",
			"className": "is-style-default",
			"layout": {
				"type": "constrained",
				"justifyContent": "left"
			}
		} -->
		<div class="wp-block-group alignwide is-style-default">
			<!-- wp:group {
				"metadata": {
					"name": "Inner Container"
				},
				"layout": {
					"type": "constrained",
					"justifyContent": "left"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:group {
					"metadata": {
						"name": "Contact Form"
					},
					"style": {
						"spacing": {
							"margin": {
								"top": "var:preset|spacing|140",
								"bottom": "var:preset|spacing|140"
							},
							"padding": {
								"top": "var:preset|spacing|110",
								"bottom": "var:preset|spacing|110",
								"left": "var:preset|spacing|110",
								"right": "var:preset|spacing|110"
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
						"type": "constrained",
						"contentSize": "699px",
						"justifyContent": "left"
					}
				} -->
				<div
					class="wp-block-group has-mbf-layout-background-background-color has-background"
					style="
						border-top-left-radius: 4px;
						border-top-right-radius: 4px;
						border-bottom-left-radius: 4px;
						border-bottom-right-radius: 4px;
						margin-top: var(--wp--preset--spacing--140);
						margin-bottom: var(--wp--preset--spacing--140);
						padding-top: var(--wp--preset--spacing--110);
						padding-right: var(--wp--preset--spacing--110);
						padding-bottom: var(--wp--preset--spacing--110);
						padding-left: var(--wp--preset--spacing--110);
					"
				>
					<!-- wp:group {
						"metadata": {
							"name": "Contact Heading"
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group">
						<!-- wp:heading {
							"style": {
								"typography": {
									"textTransform": "uppercase"
								}
							}
						} -->
						<h2 class="wp-block-heading" style="text-transform: uppercase">
							<?php echo esc_html__( 'Feel Free to contact us', 'capsule' ); ?>
						</h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {
						"metadata": {
							"name": "Contact Description"
						},
						"style": {
							"spacing": {
								"margin": {
									"top": "var:preset|spacing|10"
								}
							}
						},
						"layout": {
							"type": "constrained",
							"contentSize": "380px",
							"justifyContent": "left"
						}
					} -->
					<div class="wp-block-group" style="margin-top: var(--wp--preset--spacing--10)">
						<!-- wp:paragraph {
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
							"fontSize": "small",
							"fontFamily": "base"
						} -->
						<p class="has-mbf-secondary-color has-text-color has-link-color has-base-font-family has-small-font-size">
							<?php
							echo esc_html__(
								'Your email address will not be published. Required fields are marked *',
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {
						"metadata": {
							"name": "Contact Form 7 Shortcode"
						},
						"style": {
							"spacing": {
								"margin": {
									"top": "var:preset|spacing|100"
								}
							}
						},
						"layout": {
							"type": "constrained"
						}
					} -->
					<div class="wp-block-group" style="margin-top: var(--wp--preset--spacing--100)">
						<!-- wp:shortcode -->
						[contact-form-7 id="c77f969" title="Contact form 1"]
						<!-- /wp:shortcode -->
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
