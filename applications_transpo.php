<?php
/**
 * The template for displaying all pages.
 * Template Name: applications_transpo
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	</div class="applications-transpo-wrapper">
		<div class="applications-transpo-hero">
			<div class="applications-transpo-img">
			</div>


			<div class="applications-transpo-post">
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<div class="title-blue-line"></div>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</div>
		</div>
	</div>

	</div class="applications-transpo-wrapper2">
		<div class="applications-transpo-hero2">
			<div class="applications-transpo-img2">
			</div>

			<div class="applications-transpo-post2">
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<div class="title-blue-line"></div>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</div>
		</div>
	</div>
	</main>
	<!-- #main -->
	</div>
	<!-- #primary -->

<?php get_footer(); ?>
