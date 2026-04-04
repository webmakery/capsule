<?php
/**
 * Title: Single Post Comments
 * Slug: capsule/mbf-single-post-comments
 * Inserter: no
 */
?>

<!-- wp:group {
	"lock": {
		"move": true,
		"remove": false
	},
	"metadata": {
		"name": "Comments Container",
		"patternName": "capsule/mbf-single-post-comments"
	},
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|120"
			}
		}
	},
	"layout": {
		"type": "constrained",
		"contentSize": "694px"
	}
} -->
<div class="wp-block-group" style="margin-top: var(--wp--preset--spacing--120)">
	<!-- wp:group {
		"metadata": {
			"name": "Comment Heading"
		},
		"layout": {
			"type": "constrained"
		}
	} -->
	<div class="wp-block-group">
		<!-- wp:heading {
			"level": 3,
			"style": {
				"spacing": {
					"margin": {
						"bottom": "var:preset|spacing|60"
					}
				}
			}
		} -->
		<h3 class="wp-block-heading" style="margin-bottom: var(--wp--preset--spacing--60)">
			<?php esc_html_e( 'Share Your Thoughts', 'capsule' ); ?>
		</h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:comments {
		"style": {
			"spacing": {
				"margin": {
					"top": "0",
					"bottom": "0"
				}
			}
		}
	} -->
	<div class="wp-block-comments" style="margin-top: 0; margin-bottom: 0">
		<!-- wp:comments-title {
			"showPostTitle": false,
			"level": 3
		} /-->

		<!-- wp:post-comments-form /-->

		<!-- wp:spacer {
			"height": "var:preset|spacing|60"
		} -->
		<div style="height: var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:comment-template -->
		<!-- wp:group {
			"style": {
				"spacing": {
					"blockGap": "0"
				}
			},
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group">
			<!-- wp:group {
				"layout": {
					"type": "flex",
					"flexWrap": "nowrap"
				}
			} -->
			<div class="wp-block-group">
				<!-- wp:comment-author-name /-->

				<!-- wp:comment-date {
					"isLink": false
				} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:comment-content /-->

			<!-- wp:group {
				"style": {
					"spacing": {
						"margin": {
							"top": "0px",
							"bottom": "0px"
						}
					}
				},
				"layout": {
					"type": "flex"
				}
			} -->
			<div class="wp-block-group" style="margin-top: 0px; margin-bottom: 0px">
				<!-- wp:comment-reply-link /-->

				<!-- wp:comment-edit-link /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:separator {
				"className": "is-style-wide",
				"style": {
					"spacing": {
						"margin": {
							"top": "var:preset|spacing|70",
							"bottom": "var:preset|spacing|70"
						}
					}
				}
			} -->
			<hr
				class="wp-block-separator has-alpha-channel-opacity is-style-wide"
				style="margin-top: var(--wp--preset--spacing--70); margin-bottom: var(--wp--preset--spacing--70)"
			/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:comment-template -->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
