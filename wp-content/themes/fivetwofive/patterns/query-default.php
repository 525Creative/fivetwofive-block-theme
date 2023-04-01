<?php
/**
 * Title: List of posts in one column.
 * Slug: fivetwofive/query-default
 * Categories: fivetwofive-query
 * Viewport Width: 1280
 */
?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"wide"} -->
	<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"max(15vw, 30vh)","align":"wide"} /-->
	<!-- wp:post-title {"isLink":true} /-->
	<!-- wp:post-excerpt /-->
	<!-- wp:post-date {"isLink":true} /-->

	<!-- wp:spacer {"height":"var(--wp--preset--spacing--40)"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->
	<!-- wp:query-pagination-next {"label":"Older Posts"} /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->