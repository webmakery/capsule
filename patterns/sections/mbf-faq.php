<?php
/**
 * Title: FAQ
 * Slug: capsule/mbf-faq
 * Description: FAQ
 * Categories: mbfpatterns
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "FAQ",
		"categories": [
			"page",
			"mbfpages"
		],
		"patternName": "capsule/mbf-faq"
	},
	"align": "wide",
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|160",
				"bottom": "var:preset|spacing|160"
			}
		}
	},
	"layout": {
		"type": "constrained",
		"justifyContent": "left",
		"contentSize": "1400px"
	}
} -->
<div
	class="wp-block-group alignwide"
	style="margin-top: var(--wp--preset--spacing--160); margin-bottom: var(--wp--preset--spacing--160)"
>
	<!-- wp:group {
		"align": "wide",
		"style": {
			"spacing": {
				"blockGap": "var:preset|spacing|120"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "wrap",
			"verticalAlignment": "top",
			"justifyContent": "space-between"
		}
	} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {
			"metadata": {
				"name": "FAQ Heading"
			},
			"layout": {
				"type": "constrained",
				"contentSize": "557px",
				"justifyContent": "left"
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
				<?php esc_html_e( 'Find Answers to Common Questions', 'capsule' ); ?>
			</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {
			"metadata": {
				"name": "FAQ Content"
			},
			"layout": {
				"type": "constrained",
				"contentSize": "699px"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:accordion {
				"className": "is-type-mbf-style-1"
			} -->
			<div role="group" class="wp-block-accordion is-type-mbf-style-1">
				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading {
						"level": 3,
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
						"fontSize": "medium"
					} -->
					<h3
						class="wp-block-accordion-heading has-mbf-primary-color has-text-color has-link-color has-medium-font-size"
					>
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title">
								<?php esc_html_e( 'How long does it typically take to process an order?', 'capsule' ); ?>
							</span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel {
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
					} -->
					<div
						role="region"
						class="wp-block-accordion-panel has-mbf-secondary-color has-text-color has-link-color has-small-font-size"
					>
						<!-- wp:paragraph -->
						<p>
							<?php
							esc_html_e(
								"Orders are usually processed within 3 to 7 business days. You'll receive a confirmation
							and tracking details once it's shipped.",
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading {
						"level": 3,
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
						"fontSize": "medium"
					} -->
					<h3
						class="wp-block-accordion-heading has-mbf-primary-color has-text-color has-link-color has-medium-font-size"
					>
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title">
								<?php esc_html_e( 'Can I change the contents of my order?', 'capsule' ); ?>
							</span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel {
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
					} -->
					<div
						role="region"
						class="wp-block-accordion-panel has-mbf-secondary-color has-text-color has-link-color has-small-font-size"
					>
						<!-- wp:paragraph -->
						<p>
							<?php
							esc_html_e(
								'If your order hasn’t been processed yet, we may be able to update it. Please reach out
							to customer support as soon as possible with your order number so we can check the status and advise you
							on available options.',
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading {
						"level": 3,
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
						"fontSize": "medium"
					} -->
					<h3
						class="wp-block-accordion-heading has-mbf-primary-color has-text-color has-link-color has-medium-font-size"
					>
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title">
								<?php esc_html_e( 'Do you ship internationally?', 'capsule' ); ?>
							</span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel {
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
					} -->
					<div
						role="region"
						class="wp-block-accordion-panel has-mbf-secondary-color has-text-color has-link-color has-small-font-size"
					>
						<!-- wp:paragraph -->
						<p>
							<?php
							esc_html_e(
								'Yes, we offer international shipping to selected countries. Available destinations and
							rates are shown at checkout.',
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading {
						"level": 3,
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
						"fontSize": "medium"
					} -->
					<h3
						class="wp-block-accordion-heading has-mbf-primary-color has-text-color has-link-color has-medium-font-size"
					>
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title">
								<?php esc_html_e( 'Is my personal information secure during checkout?', 'capsule' ); ?>
							</span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel {
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
					} -->
					<div
						role="region"
						class="wp-block-accordion-panel has-mbf-secondary-color has-text-color has-link-color has-small-font-size"
					>
						<!-- wp:paragraph -->
						<p>
							<?php
							esc_html_e(
								'Yes, all payments and personal data are protected using secure encryption and trusted
							payment providers.',
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading {
						"level": 3,
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
						"fontSize": "medium"
					} -->
					<h3
						class="wp-block-accordion-heading has-mbf-primary-color has-text-color has-link-color has-medium-font-size"
					>
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title">
								<?php esc_html_e( 'How can I track my order?', 'capsule' ); ?>
							</span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel {
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
					} -->
					<div
						role="region"
						class="wp-block-accordion-panel has-mbf-secondary-color has-text-color has-link-color has-small-font-size"
					>
						<!-- wp:paragraph -->
						<p>
							<?php
							esc_html_e(
								'Once your order is shipped, you’ll receive an email with tracking details. You can use
							this link to follow your delivery step by step until it arrives.',
								'capsule'
							);
							?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->
			</div>
			<!-- /wp:accordion -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
