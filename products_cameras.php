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

				<!-- parallax top banner -->
				<div class="camera-banner">
					<h2>Smart Cameras + Software</h2>
					<p><span class="uppercase">Valo</span> offers Internet Protocol (IP) cameras that integrate with its Smart City platform. These cameras have a wide variety of applications including people or vehicle monitoring and counting, intrusion and threat detection, loitering detection, and identifying abandoned objects.</p>
				</div>
				<!-- close camera banner -->

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
							<img class="animation-icon" srcset="<?php echo get_template_directory_uri() . '/assets/images/valo-security-camera.png'?>" />
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

				<!-- video control banner -->
				<section class="video-control">
					<h2>Video Control</h2>
					<p><span class="uppercase">Valo's</span> video control software acts as a central platform for managing cameras and videos. This intelligent and powerful Video Management Software (VMS) supports most cameras, and has a wide selection of advanced features and add-ons, allowing for highly-efficient video monitoring and surveillance. Features of the video controls include:</p>
				</section>

				<!-- close video control banner -->

				<section class="controls">
					<div class="intuitive">
					<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/intelligent-power.png'?>" />
						<h3>Intuitive + User Friendly</h3>
						<p>Interface allows users to easily understand the configuration process and start using the software</p>
					</div>

					<div class="event">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/cctv.png'?>" />
						<h3>Event + Action Management</h3>
						<p>Automated video surveillance process with an alarm and action manger</p>

					</div>

					<div class="core">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/processing-power.png'?>" />
						<h3>64-Bit Core</h3>
						<p>Use the full power of system hardware</p>
					</div>

					<div class="failover">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/cpu.png'?>" />
						<h3>Failover</h3>
						<p>Continuous monitoring of server status and failover management from the central server</p>

					</div>

					<div class="ready">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/digital-camera.png'?>" />
						<h3>4k Ready</h3>
						<p>4K ready VMS application with 4K recording and playback</p>

					</div>

					<div class="archive">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/public-safety.png'?>" />
						<h3>Archive Replication</h3>
						<p>Advanced mirror recording with scheduled transfers to ensure safety of data at all times</p>

					</div>


					<div class="powerful">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/open-data.png'?>" />
						<h3>Powerful Analytics</h3>
						<p>Modules for advanced video analytics and face recognition</p>


					</div>

					<div class="integration">
						<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software/automation.png'?>" />
						<h3>Integration + API</h3>
						<p>Combine video surveillance with third party software with integration possibilities</p>
					</div>

				</section>

				<div class="facial">

					<div class="facial-image">
						
					</div>

					<div class="facial-text">
						<h2>Facial Recognition</h2>
						<p>Valo supplies face recognition software which is designed to work with video controls. This biometric application provides system performance and reliability.</p>

							<p>The facial recognition software has live face-detection, simultaneous multiple face recognition, and fast face matching in one-to-one and one-to-many modes. This software is idea for security monitoring and law enforcement applications.</p>
					</div>
				</div>

			</section>
			<!-- #content-wrapper -->

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>