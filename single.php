<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="hero-container-dark">
				<?php the_title( '<h1 class="entry-title header-white">', '</h1>' ); ?>
			</section>

			<section class="news-page-flex-container">
				<section class="article-container">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

						<?php the_post_navigation(array('prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i><span class="post-nav-direction-header">Previous</span> <span class="post-title">%title</span>'),
																						'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i><span class="post-nav-direction-header">Next</span><span class="post-title">%title</span>'),
																						'screen_reader_text' => __( 'Continue Reading' ),)); ?>

					<?php endwhile; // End of the loop. ?>
				</section>

				<div class="request-consultation-container">
					<?php echo do_shortcode('[contact-form-7 id="23" title="News Request Consulation"]');?>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
