<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
    <div class="news-image-wrapper">
			<a href="<?php esc_url( get_permalink() ) ?>">
				<?php the_post_thumbnail( 'large' ); ?>
			</a>
    </div>
	<?php endif; ?>
	<?php the_title( sprintf( '<h2 class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
		foreach((get_the_category()) as $category) { 
  		echo $category->cat_name . ' '; 
		}						
		the_excerpt();
		echo sprintf('<a class="read-more" href="%s">', esc_url( get_permalink() ) ) . 'Read More</a>';?>
</article><!-- #post-## -->

			