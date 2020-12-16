<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="article-image-wrapper">
				<?php the_post_thumbnail( 'full' ); ?>
				<div class="entry-meta">
					<?php posted_on(); ?> 
				</div><!-- .entry-meta -->
			</div>
		<?php endif; ?>

	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="share-post">
			<div class="soc-links-container">
				<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Facebook" target="_blank"><span class="soc-font-icon facebook"><i class="fa fa-facebook-f"></i></span><span class="screen-reader-text">Share with Facebook</span></a>
				<a class="linkedin" <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="LinkedIn" target="_blank"><span class="soc-font-icon linkedin"><i class="fa fa-linkedin"></i></span><span class="screen-reader-text">Share with LinkedIn</span></a>
				<a class="pinterest pinit-marklet" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" title="Pinterest" target="_blank" data-pin-config="above" data-pin-do="buttonBookmark"><span class="soc-font-icon pinterest"><i class="fa fa-pinterest"></i></span><span class="screen-reader-text">Share with Pinterest</span></a>
				<a class="google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Google+" target="_blank"><span class="soc-font-icon google"><i class="fa fa-google-plus"></i></span><span class="screen-reader-text">Share with Google+</span></a>
				<a class="twitter" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Twitter" target="_blank"><span class="soc-font-icon twitter"><i class="fa fa-twitter"></i></span><span class="screen-reader-text">Share with Twitter</span></a>
			</div>
			<i class="fa fa-share-alt"></i>
			<p>Share this post</p>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
