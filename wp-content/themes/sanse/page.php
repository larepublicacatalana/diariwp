<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sanse
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="front-page-top-area" class="front-page-top-area widget-area" role="complementary">
				<?php dynamic_sidebar( 'front-page-top' ); ?>
			</div><!-- #front-page-top-area -->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<div id="front-page-bottom-area" class="front-page-bottom-area widget-area" role="complementary">
				<?php dynamic_sidebar( 'front-page-bottom' ); ?>
			</div><!-- #front-page-bottom-area -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
