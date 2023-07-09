<?php
/**
 * Title: Page Content, Archive Portfolio default
 * Slug: myackleyV9/pagecontent-archive-portfolio-default
 * Categories: page-content
 * Block Types: core/post-content
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>This is a showcase of solutions I've helped create for clients or for other projects. My work ranges from web design, web user interfaces, and web development. I do have some past and present work on Github.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0"}},"border":{"width":"rem","radius":"0.25rem"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"heading3"} /-->

<!-- wp:post-date {"format":"n/j/Y","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"0.5rem"}},"backgroundColor":"cyan-bluish-gray","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-cyan-bluish-gray-background-color has-background" style="border-radius:0.5rem;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"post_tag","separator":"","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"query-links"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>Sorry, nothing here...</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->