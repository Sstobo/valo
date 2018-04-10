<?php
/**
 * The template for displaying all pages.
 * Template Name: about_team
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="content-wrapper">
					<?php while (have_posts()) : the_post(); ?>
					<div class="management-team-container">
					<h2>Management Team</h2>
					<div class="title-blue-line"></div>
					</div>
						<?php get_template_part('template-parts/content', 'page'); ?>
					  <?php endwhile; // End of the loop.?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
