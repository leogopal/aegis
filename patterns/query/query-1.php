<?php
/**
 * Blog 1 Block Pattern
 */
return array(
	'title'	  => __( 'Blog 1', 'aegis' ),
	'categories' => array( 'aegis-query' ),
	'content'	=> '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"5%","left":"5%"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-right:5%;padding-left:5%">
		<!-- wp:group {"layout":{"inherit":false}} -->
		<div class="wp-block-group">
			<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-query alignwide">
				<!-- wp:post-template {"align":"wide"} -->
				<!-- wp:post-featured-image {"isLink":true} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
				<div class="wp-block-group" style="padding-bottom:3rem">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"20px","bottom":"15px","left":"20px"}}},"backgroundColor":"secondary","className":"negative-margin is-style-default","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group negative-margin is-style-default has-secondary-background-color has-background" style="padding-top:30px;padding-right:20px;padding-bottom:15px;padding-left:20px">
						<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} /-->

						<!-- wp:post-terms {"term":"category","textAlign":"right","fontSize":"tiny"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-aegis-post-title-border","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

					<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-default"} /-->
				</div>
				<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

				<!-- wp:query-pagination-numbers /-->

				<!-- wp:query-pagination-next {"fontSize":"small"} /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);