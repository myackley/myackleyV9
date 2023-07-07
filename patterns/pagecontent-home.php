<?php
/**
 * Title: Page Content, Home default
 * Slug: myackleyV9/pagecontent-home-default
 * Categories: page-content
 * Block Types: core/post-content
 */
?>

<!-- wp:group {"style":{"color":{"background":"#f7f7f7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f7f7"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"heading1"} -->
<h1 class="wp-block-heading has-heading-1-font-size">Heading One</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">One point twenty-one gigawatts. Tom, how am I gonna generate that kind of power, it can't be done, it can't. Tab? I can't give you a tab unless you order something.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">View Portfolio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"0%"},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:0rem;min-height:0%"><!-- wp:image {"id":155,"width":200,"height":200,"scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":{"topLeft":"1rem","bottomRight":"1rem"}}}} -->
<figure class="wp-block-image size-medium is-resized has-custom-border"><img src="http://localhost:8888/wordpress-mycom/wp-content/uploads/2018/09/avatar-300x300.jpeg" alt="My avatar" class="wp-image-155" style="border-top-left-radius:1rem;border-bottom-right-radius:1rem;object-fit:cover" width="200" height="200"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#e1e8ea"}},"layout":{"type":"constrained","wideSize":"100%","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#e1e8ea;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"fontSize":"heading2"} -->
<h2 class="wp-block-heading has-heading-2-font-size">Current Projects</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"medium","style":{"spacing":{"margin":{"top":"0"}},"border":{"width":"rem","radius":"0.25rem"}}} /-->

<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0"}},"typography":{"lineHeight":"1.2"}},"fontSize":"heading3"} /-->

<!-- wp:post-date {"format":"n/j/Y","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"0"}}} /-->

<!-- wp:post-excerpt {"moreText":"Read more...","showMoreOnNewLine":false,"excerptLength":16,"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"bottom":"0"},"margin":{"bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"0.5rem"}},"backgroundColor":"cyan-bluish-gray","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-cyan-bluish-gray-background-color has-background" style="border-radius:0.5rem;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"post_tag","separator":"","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"query-links"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
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

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"color":{"background":"#f2f2f2"}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#f2f2f2;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"fontSize":"heading2"} -->
<h2 class="wp-block-heading has-heading-2-font-size">Past Work</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":"2","pages":0,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"heading3"} /-->

<!-- wp:post-date {"format":"n/j/Y","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0"}},"border":{"width":"rem","radius":"0.25rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"0.5rem"}},"backgroundColor":"cyan-bluish-gray","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-cyan-bluish-gray-background-color has-background" style="border-radius:0.5rem;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"post_tag","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"query-links"} /--></div>
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

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"fontSize":"heading2"} -->
<h2 class="wp-block-heading has-heading-2-font-size">Recent Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","wideSize":""}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"heading3"} /-->

<!-- wp:post-date {"format":"n/j/Y","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>Sorry, nothing here...</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->