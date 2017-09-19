<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sanse
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_singular() ) : // If single. ?>
	
		<header class="entry-header">
			<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
				get_template_part( 'entry', 'meta' ); // Loads the entry-meta.php file.
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'sanse' ),
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'sanse' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">,</span> ',
				) );
			?>
		</div><!-- .entry-content -->
		
		<?php get_template_part( 'entry', 'footer' ); // Loads the entry-footer.php file. ?>
	
	<?php else : ?>
		
		<div class="entry-inner">
			
			<?php 
				if ( has_post_thumbnail() ) :
					echo '<div class="article-image">';
					echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
					
					/*
					* The default image sizes of WordPress are “thumbnail”, “medium”, “large” and “full” 
					* (the size of the image you uploaded). These image sizes can be configured in 
					* the WordPress Administration Media panel under Settings > Media.
					* the_post_thumbnail( 'large' ); // Large resolution (default 640px x 640px max)
					* the_post_thumbnail( 'full' ); // Full resolution (original size uploaded)
					* the_post_thumbnail( array(100, 100) ); // Other resolutions
					*/
					the_post_thumbnail('');
					echo '</a></div><!-- .panel-image -->';
				endif;
			?>

			<header class="entry-header">
				<?php
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
			</header><!-- .entry-header -->
		
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			
			<?php
				get_template_part( 'entry-meta' );
			?>
			
		</div><!-- .entry-inner -->

	<?php endif; // End check single. ?>
	
</article><!-- #post-## -->
