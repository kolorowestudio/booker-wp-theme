<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Booker Header', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:template-part {"slug":"booker-header","theme":"twentytwentytwo-child"} /-->

					<!-- wp:template-part {"slug":"hero","theme":"twentytwentytwo-child","tagName":"section","className":"hero-section"} /-->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"main","displayLayout":{"type":"list"},"className":"is-portfolio-list","layout":{"inherit":false}} -->
					<main class="wp-block-query is-portfolio-list"><!-- wp:template-part {"slug":"portfolio-post-template","theme":"twentytwentytwo-child"} /-->',
);
