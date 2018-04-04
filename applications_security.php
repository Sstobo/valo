<?php
/**
 * The template for displaying all pages.
 * Template Name: applications_security
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	</div class="applications-security-wrapper">
		<div class="applications-security-hero">
			<div class="applications-security-img">
			</div>

			<div class="applications-security-post">
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