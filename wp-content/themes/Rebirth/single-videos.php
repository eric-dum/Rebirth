<?php
/**
 * The template for displaying all single videos
 *
 * 
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main container-fluid max-contain" role="main">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content-video-items' );

				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
