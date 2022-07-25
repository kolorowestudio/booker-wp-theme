<?php
/**
 * Video trailer block pattern
 */
return array(
	'title'      => __( 'Video trailer', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"12rem","right":"0px","bottom":"12rem","left":"0px"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-top:12rem;padding-right:0px;padding-bottom:12rem;padding-left:0px">

				<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"4rem","right":"4rem","bottom":"4rem","left":"4rem"}}},"backgroundColor":"primary","textColor":"foreground","layout":{"inherit":true}} -->
				<div class="wp-block-group alignwide has-foreground-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:4rem;padding-right:4rem;padding-bottom:4rem;padding-left:4rem"><!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="has-x-large-font-size" id="extended-trailer">' . esc_html__( 'Extended Trailer', 'twentytwentytwo' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>' . esc_html__( 'A film about hobbyist bird watchers, a catalog of different birds, paired with the noises they make. Each bird is listed by their scientific name so things seem more official.', 'twentytwentytwo' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"10%"} -->
				<div class="wp-block-column is-video-mobile" style="flex-basis:10%">
				</div><!-- /wp:column -->

				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column is-video-mobile" style="flex-basis:40%"><!-- wp:video -->
				<figure class="wp-block-video is-video-mobile-inner is-mobile-frame"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure>
				<!-- /wp:video --></div><!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large is-video-mobile-secondary is-mobile-frame"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-salmon.jpg" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '"/></figure><!-- /wp:image -->
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group -->',
);
