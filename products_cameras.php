<?php
/**
 * The template for displaying all pages.
 * Template Name: product_cameras
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="content-wrapper">

				<section class="products-two-main-cameras-wrapper">
					<h3>VALO's two main IP cameras
						<br> have the following set of features:</h3>
					<div class="sub-title-blue-line">
					</div>
					<div class="products-two-main-cameras-container">
						<div class="products-two-main-cameras-left-container">
							<div class="products-two-main-cameras-left-top">
								<p><span>Repositable IP Dome Cameras</span></br>1080p HD resolution Built-in 3-9mm Lens Embedded Intelligence Technology Remote pan/tilt &amp; zoom (3x) control
									Preset positions Wide Dynamic Range (WDR) True day/night performance Zoom and focus directly from PC Video motion
									detection</p>
								<div class="products-two-main-cameras-icon">
									<i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<!-- products-two-main-cameras-left-container -->

						<div class="products-two-main-cameras-center-container">
							<img class="animation-icon" srcset="<?php echo get_template_directory_uri() . '/assets/images/security-camera.png'?>" />
						</div>
						<div class="products-two-main-cameras-right-container">
							<div class="products-two-main-cameras-right-top">
								<div class="products-two-main-cameras-icon">
									<i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i>
								</div>
								<p><span>Outdoor Dome IP Cameras</span></br>1080p HD Resolution Improved picture quality Remote zoom and focus control 1080p and 720p resolutions Improved low-light
									performance True day/night performance 18 IR LEDs (IR Models) External alarm I/O IP66 rated for outdoor use</p>
							</div>
						</div>
					</div>
					<!-- products-two-main-cameras-container -->

				</section>
				<!-- products-two-main-cameras-wrapper -->

			</section>
			<!-- #content-wrapper -->

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>