<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sanse
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- /* BEGIN widget area ALL PAGES TOP --------------------- */ -->
		<div id="all-pages-top-area" class="all-pages-top-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'all-pages-top' ); ?>
		</div><!-- #front-page-top-area -->
		<!-- /* END widget area --------------------- */ -->

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			echo '<div class="grid-wrapper">';
				while ( have_posts() ) : the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) );

				endwhile;
			echo '</div><!-- .grid-wrapper -->';

			// Previous/next page navigation.
			sanse_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		<!-- /* BEGIN widget area ALL PAGES BOTTOM --------------------- */ -->
		<div id="all-pages-bottom-area" class="all-pages-bottom-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'all-pages-bottom' ); ?>
		</div><!-- #front-page-top-area -->
		<!-- /* END widget area --------------------- */ -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
