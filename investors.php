<?php
/**
 * The template for displaying all pages.
 * Template Name: investors
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="investors-wrapper">
				<div class="investors-main">
					<div class="investors-left">
					<h1>Investor Presentation</h1>
			<div class="title-blue-line"></div>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h2>Learn More with Our Corporate Presentation</h2>	
				<a href="<?php echo get_page_link( get_page_by_title( Download )->ID ); ?>"class="button-main button-with-shadow" id="banner-contact-button">Download Now</a>
				
					</div>
					<div class="investors-right"></div>
				</div>
			</div>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_footer(); ?>