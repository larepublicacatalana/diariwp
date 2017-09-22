<div class="grid-wrapper">
<?php
$CATEGORIA_FILTRE = 'In English';
// Blog Posts Query. 
$blog_content = new WP_Query( apply_filters( 'sanse_blog_posts_arguments', array(
	'post_type'              => 'post',
	'posts_per_page'         => 2,
	'no_found_rows'          => true,
	'cat'  => get_cat_ID($CATEGORIA_FILTRE),
	'update_post_meta_cache' => false,
) ) );

if ( $blog_content->have_posts() ) : ?>
	<?php 
while ( $blog_content->have_posts() ) : $blog_content->the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-inner">
				<header class="entry-header">
				<?php
					echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
					if ( has_post_thumbnail() ) { the_post_thumbnail(); }
					echo '</a>';
					do_action( 'sanse_front_page_blog_header' );
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->

				<?php
					get_template_part( 'entry-meta' );
				?>

			</div><!-- .entry-inner -->
		</article><!-- #post-## -->
	<?php endwhile; ?>

<?php	
endif; // End loop.
wp_reset_postdata(); // Reset post data.
?>
</div>