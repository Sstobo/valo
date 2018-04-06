<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<section class="hero-container-dark">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</section>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="article-image-wrapper">
				<?php the_post_thumbnail( 'large' ); ?>
					<div class="entry-meta">
			<?php red_starter_posted_on(); ?> 
		</div><!-- .entry-meta -->
			</div>
		<?php endif; ?>

	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
