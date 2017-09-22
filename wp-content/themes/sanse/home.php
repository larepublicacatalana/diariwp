<?php
/**
 * The "home" (blog) template file.
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

		<!-- /* BEGIN widget area --------------------- */ -->
		<div id="front-page-top-area" class="front-page-top-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'front-page-top' ); ?>
		</div><!-- #front-page-top-area -->
		<!-- /* END widget area --------------------- */ -->
	
		<?php
		/* BEGIN POST LIST */
		/* The next if was desactivated by argument 1==2. Remove the second argument for activate it again */
		if ( have_posts() && 1==2 ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>

		<?php
			endif;
			
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

			// Previous/next page navigation. Function is located in inc/template-tags.php.
			sanse_posts_pagination();

		else :
			/* Remove double slash if you want to activate the post search service */
			//get_template_part( 'template-parts/content', 'none' );

		endif;
		/* END POST LIST */
		?>

		<!-- /* BEGIN widget area --------------------- */ -->
		<div id="front-page-bottom-area" class="front-page-bottom-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'front-page-bottom' ); ?>
		</div><!-- #front-page-bottom-area -->
		<!-- /* END widget area --------------------- */ -->

		<!-- /* BEGIN widget area ALL PAGES BOTTOM --------------------- */ -->
		<div id="all-pages-bottom-area" class="all-pages-bottom-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'all-pages-bottom' ); ?>
		</div><!-- #front-page-top-area -->
		<!-- /* END widget area --------------------- */ -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
