<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="content-wrapper">
				<section class="hero-container-dark">
					
					<?php the_archive_title( '<h1 class="header-white">', '</h1>' );?>
					<div>
						<a class="news-hero-links" href="<?php echo esc_url( home_url( '/' ));?>">Home</a><span>/</span><span class="news-hero-links"><?php echo get_the_archive_title()?></span>
					</div>
				</section>

				<section class="articles-container">

					<?php if ( have_posts() ) : ?>

						<div class="filtered-posts">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php
									get_template_part( 'template-parts/content-news' );
								?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>
					</div>
				</section>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
