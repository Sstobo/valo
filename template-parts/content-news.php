<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<header class="entry-header">
    <div class="news-image-wrapper">
			<a href="<?php echo esc_url( get_permalink() ) ?>">
				<?php the_post_thumbnail( 'large' ); ?>
			</a>
				<div class="entry-meta">
					<?php posted_on(); ?> 
				</div><!-- .entry-meta -->
		</div>
	<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="news-content-container">
	<?php the_title( sprintf( '<h2 class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
		// foreach((get_the_category()) as $category) { 
  	// 	echo $category->cat_name . ' '; 
		// }						
		the_excerpt();
		echo sprintf('<a class="read-more" href="%s">', esc_url( get_permalink() ) ) . '<span>Read More</span> <span class="read-more-icon"><i class="fa fa-caret-right" aria-hidden-true></i></span></a>';?>
		</div>
</article><!-- #post-## -->

			