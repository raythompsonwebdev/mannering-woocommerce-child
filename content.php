
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    
	<?php
	/**
	 * Functions hooked in to storefront_loop_post action.
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_content         - 30
	 */
	do_action( 'storefront_loop_post' );
	?>


</article><!-- #post-<?php the_ID(); ?> -->

