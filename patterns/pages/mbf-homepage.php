<?php
/**
 * Title: Homepage
 * Slug: capsule/mbf-homepage
 * Categories: page, mbfpages
 * Keywords: starter
 * Block Types: core/post-content
 * Template Types: front-page, index, home
 * Post Types: page, wp_template
 * Description: The homepage template.
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Homepage",
		"categories": [
			"page",
			"mbfpages"
		],
		"patternName": "capsule/mbf-homepage"
	},
	"className": "is-type-mbf-section-wrapper",
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|160",
			"margin": {
				"top": "0",
				"bottom":"var:preset|spacing|160"
			}
		}
	},
	"align": "full",
	"layout": {
		"type": "flex",
		"orientation": "vertical"
	}
} -->
<div
	class="wp-block-group alignfull is-type-mbf-section-wrapper"
	style="margin-top: 0; margin-bottom:var(--wp--preset--spacing--160)"
>
	<!-- wp:pattern { "slug": "capsule/mbf-hero-slider" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-product-carousel-with-description" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-about-banner" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-products" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-product-categories-banner" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-product-carousel-with-description" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-split-banners" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-testimonials" } /-->
	<!-- wp:pattern { "slug": "capsule/mbf-post-carousel" } /-->

</div>
<!-- /wp:group -->
