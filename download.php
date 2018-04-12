<?php
/**
 * The template for displaying all pages.
 * Template Name: download
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="download-wrapper">

        <div class="download-header">
        <h1>Download our latest investor information package</h1>
        </div>
        <div class="title-blue-line"></div>
        
        <div class="download-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
            </div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
