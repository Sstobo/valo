<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-not-found">
		<main id="main" class="site-main" role="main">

		<section class="content-wrapper">

			<header class="not-found-banner">
				<h2>Page not found</h2>
			</header>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Try typing something in the search box below' ); ?></p>

					<?php get_search_form(); ?>

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
