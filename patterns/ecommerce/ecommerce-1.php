<?php
/**
 * eCommerce 1 Block Pattern
 */
return array(
	'title'	  => __( 'eCommerce 1', 'aegis' ),
	'description' => __( 'A simple block pattern for displaying a product grid.', 'aegis' ),
    'categories' => array( 'aegis-ecommerce' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"30px","bottom":"var:preset|spacing|40","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:30px;padding-bottom:var(--wp--preset--spacing--40);padding-left:30px">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"backgroundColor":"secondary","className":"product-card is-style-aegis-hover-shadow"} -->
		<div class="wp-block-column product-card is-style-aegis-hover-shadow has-secondary-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
			<!-- wp:image {"align":"center","className":"size-large is-style-aegis-effect-2-image"} -->
			<figure class="wp-block-image aligncenter size-large is-style-aegis-effect-2-image">
			<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder_420x625_darkcolor.webp" alt="' . esc_attr__( 'Describe the main elements of the image and its context.', 'aegis' ) . '" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"textColor":"foreground","fontSize":"tiny"} -->
				<p class="has-foreground-color has-text-color has-tiny-font-size" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'aegis' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><strong>' . esc_html__( '$00.00', 'aegis' ) . '</strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"className":"has-large-font-size"} -->
			<h2 class="wp-block-heading has-large-font-size">' . esc_html__( 'Product Name', 'aegis' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_html__( 'A range of 50-150 characters is common for grid view descriptions. This is just enough to give a brief overview of the product without overwhelming the viewer.', 'aegis' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-aegis-button-shadow","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-aegis-button-shadow has-small-font-size" style="font-style:normal;font-weight:600">
				<a class="wp-block-button__link wp-element-button">' . esc_html__( 'Call to Action', 'aegis' ) . '</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"backgroundColor":"foreground","textColor":"background","className":"product-card is-style-aegis-hover-shadow"} -->
		<div class="wp-block-column product-card is-style-aegis-hover-shadow has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
			<!-- wp:image {"align":"center","className":"size-large is-style-aegis-effect-2-image"} -->
			<figure class="wp-block-image aligncenter size-large is-style-aegis-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder_420x625_lightcolor.webp" alt="' . esc_attr__( 'Describe the main elements of the image and its context.', 'aegis' ) . '" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"textColor":"secondary","fontSize":"tiny"} -->
				<p class="has-secondary-color has-text-color has-tiny-font-size" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'aegis' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><strong>' . esc_html__( '$00.00', 'aegis' ) . '</strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"className":"has-large-font-size"} -->
			<h2 class="wp-block-heading has-large-font-size">' . esc_html__( 'Product Name', 'aegis' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_html__( 'A range of 50-150 characters is common for grid view descriptions. This is just enough to give a brief overview of the product without overwhelming the viewer.', 'aegis' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"secondary","textColor":"foreground","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-aegis-button-shadow","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-aegis-button-shadow has-small-font-size" style="font-style:normal;font-weight:600">
				<a class="wp-block-button__link has-foreground-color has-secondary-background-color has-text-color has-background wp-element-button">' . esc_html__( 'Call to Action', 'aegis' ) . '</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"backgroundColor":"secondary","className":"product-card is-style-aegis-hover-shadow"} -->
		<div class="wp-block-column product-card is-style-aegis-hover-shadow has-secondary-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
			<!-- wp:image {"align":"center",className":"size-large is-style-aegis-effect-2-image"} -->
			<figure class="wp-block-image aligncenter size-large is-style-aegis-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder_420x625_darkcolor.webp" alt="' . esc_attr__( 'Describe the main elements of the image and its context.', 'aegis' ) . '" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"textColor":"foreground","fontSize":"tiny"} -->
				<p class="has-foreground-color has-text-color has-tiny-font-size" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'aegis' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><strong>' . esc_html__( '$00.00', 'aegis' ) . '</strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"className":"has-large-font-size"} -->
			<h2 class="wp-block-heading has-large-font-size">' . esc_html__( 'Product Name', 'aegis' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . esc_html__( 'A range of 50-150 characters is common for grid view descriptions. This is just enough to give a brief overview of the product without overwhelming the viewer.', 'aegis' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-aegis-button-shadow","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-aegis-button-shadow has-small-font-size" style="font-style:normal;font-weight:600">
				<a class="wp-block-button__link wp-element-button">' . esc_html__( 'Call to Action', 'aegis' ) . '</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);