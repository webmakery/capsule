<?php
/**
 * Title: Header Right
 * Slug: capsule/mbf-header-col-right
 * Block Types: core/template-part/header
 * Description:
 * Inserter: no
 */
?>

<!-- wp:group {
	"lock": {
		"move": true,
		"remove": true
	},
	"metadata": {
		"patternName": "capsule/mbf-header-col-right",
		"name": "Header Right"
	},
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|60"
		}
	},
	"layout": {
		"type": "flex",
		"flexWrap": "wrap",
		"justifyContent": "right"
	}
} -->
<div class="wp-block-group">
	<!-- wp:group {
		"style": {
			"dimensions": {
				"minHeight": ""
			},
			"spacing": {
				"blockGap": "var:preset|spacing|20"
			}
		},
		"layout": {
			"type": "flex",
			"flexWrap": "nowrap"
		}
	} -->
	<div class="wp-block-group">
		<!-- wp:group {
			"metadata": {
				"name": "Search Button",
				"patternName": "capsule/mbf-search-button"
			},
			"layout": {
				"type": "constrained"
			}
		} -->
		<div class="wp-block-group mbf-search-button-style-icon">
			<!-- wp:buttons {
				"layout": {
					"type": "flex",
					"justifyContent": "center"
				}
			} -->
			<div class="wp-block-buttons">
				<!-- wp:button {
					"className": "is-style-fill"
				} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link wp-element-button" href="#">
						<?php echo esc_html__( 'Search', 'capsule' ); ?>
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:woocommerce/customer-account {
			"displayStyle": "text_only",
			"iconStyle": "alt",
			"iconClass": "wc-block-customer-account__account-icon"
		} /-->

		<!-- wp:woocommerce/mini-cart {
			"productCountVisibility": "always",
			"className": "order-1 md:order-0 is-style-mbf-primary-menu",
			"style": {
				"spacing": {
					"blockGap": "var:preset|spacing|40"
				}
			}
		} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
