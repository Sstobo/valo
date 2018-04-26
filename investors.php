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
			<p>VALO transforms any street light into a cost-effective modular platform for integrated smart city services at no upfront cost to the city. To learn more about VALO and its business objectives, download our investor presentation below.</p>
				<h3>Learn More with Our Corporate Presentation</h3>	
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