<?php
/**
 * Title: Loft Film Style Page Template
 * Slug: capsule/mbf-loftfilm-template
 * Categories: page, mbfpages
 * Keywords: starter, landing, marketing
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Description: Reusable long-form page structure with hero, features, testimonials, process, CTA, and footer-ready hierarchy.
 */
?>

<!-- wp:group {
	"metadata": {
		"name": "Loft Film Style Page",
		"categories": [
			"page",
			"mbfpages"
		],
		"patternName": "capsule/mbf-loftfilm-template"
	},
	"tagName": "main",
	"className": "is-type-mbf-section-wrapper",
	"style": {
		"spacing": {
			"blockGap": "var:preset|spacing|160",
			"margin": {
				"top": "0",
				"bottom": "var:preset|spacing|160"
			}
		}
	},
	"align": "full",
	"layout": {
		"type": "flex",
		"orientation": "vertical"
	}
} -->
<main class="wp-block-group alignfull is-type-mbf-section-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--160)">
	<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"}} -->
	<section class="wp-block-group alignfull">
		<!-- HERO: Replace heading, copy, video/image, and buttons. -->
		<!-- wp:pattern {"slug":"capsule/mbf-banner"} /-->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","align":"wide","layout":{"type":"constrained"}} -->
	<section class="wp-block-group alignwide">
		<!-- FEATURES: Replace cards/icons/copy while preserving block hierarchy. -->
		<!-- wp:pattern {"slug":"capsule/mbf-advantages"} /-->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"16px"}},"backgroundColor":"mbf-layout-background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-mbf-layout-background-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><!-- Feature 1 title --></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><!-- Feature 1 description --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"16px"}},"backgroundColor":"mbf-layout-background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-mbf-layout-background-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><!-- Feature 2 title --></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><!-- Feature 2 description --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"16px"}},"backgroundColor":"mbf-layout-background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-mbf-layout-background-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><!-- Feature 3 title --></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><!-- Feature 3 description --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","align":"wide","layout":{"type":"constrained"}} -->
	<section class="wp-block-group alignwide">
		<!-- TESTIMONIALS: Swap testimonial cards/media while keeping the slider structure. -->
		<!-- wp:pattern {"slug":"capsule/mbf-testimonials"} /-->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
	<section class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><!-- Process section heading --></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><!-- Process intro copy --></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"top"} -->
		<div class="wp-block-columns are-vertically-aligned-top">
			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><!-- Step 1 title --></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><!-- Step 1 details --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><!-- Step 2 title --></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><!-- Step 2 details --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><!-- Step 3 title --></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><!-- Step 3 details --></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"}} -->
	<section class="wp-block-group alignfull">
		<!-- CTA: Replace CTA copy, image/video, and button destination. -->
		<!-- wp:pattern {"slug":"capsule/mbf-banner-small"} /-->
	</section>
	<!-- /wp:group -->

	<!-- FOOTER is rendered by the page template's existing footer template part. -->
</main>
<!-- /wp:group -->
