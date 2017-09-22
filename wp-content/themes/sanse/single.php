<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sanse
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- /* BEGIN widget area POST PAGE TOP --------------------- */ -->
		<div id="post-page-top-area" class="post-page-top-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'post-page-top' ); ?>
		</div><!-- #front-page-top-area -->
		<!-- /* END widget area --------------------- */ -->

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'sanse' ) . sanse_get_svg( array( 'icon' => 'arrow-circle-right' ) ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'sanse' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . sanse_get_svg( array( 'icon' => 'arrow-circle-left' ) ) . esc_html__( 'Previous', 'sanse' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'sanse' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

?>
			<!-- /* BEGIN widget area POST PAGE TOP --------------------- */ -->
			<div id="post-page-middle-area" class="post-page-middle-area widget-area" role="complementary">
				<?php dynamic_sidebar( 'post-page-middle' ); ?>
			</div><!-- #front-page-top-area -->
			<!-- /* END widget area --------------------- */ -->
<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<!-- /* BEGIN widget area POST PAGE BOTTOM --------------------- */ -->
		<div id="post-page-bottom-area" class="post-page-bottom-area widget-area" role="complementary">
			<?php dynamic_sidebar( 'post-page-bottom' ); ?>
		</div><!-- #front-page-top-area -->
		<!-- /* END widget area --------------------- */ -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
