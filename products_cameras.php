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
					<p><span class="uppercase">VALO</span> offers Internet Protocol (IP) cameras that integrate with its Smart City platform. These cameras have a wide variety of applications including people or vehicle monitoring and counting, intrusion and threat detection, loitering detection, and identifying abandoned objects.</p>
				</div>
				<!-- close camera banner -->

				<!-- camera section -->
				<section class="camera-animate">
					<h2> <span class="uppercase">VALO's</span> two main IP cameras have the following set of features</h2>
						<div class="camera-container">

							<div class="camera-image">
								<img alt="A security camera" class="animation-icon" srcset="<?php echo get_template_directory_uri() . '/assets/images/valo-security-camera.png'?>" />
							</div> <!-- cameraimage -->

							<div class="camera-text">
								<div class="camera-text-container">
								 <i class="fa fa-check" aria-hidden="true"></i>
									<div class="text-container">
										<h3>Repositable IP Dome Cameras</h3>
											<ul class="specs-list">
												<li>1080p HD Resolution +</li>
												<li>Embedded Intelligence Technology</li>
												<li>Remote Pan/Tilt & Zoom (3x) Control</li>
												<li>Wide Dynamic Range (WDR)</li>
												<li>True Day/Night Performance</li>
											</ul>
									</div> <!-- repo-container-->

								</div> <!-- close repositable -->

								<div class="camera-text">
								<div class="camera-text-container">
								 <i class="fa fa-check" aria-hidden="true"></i>
									<div class="text-container">
										<h3>Outdoor Dome IP Cameras</h3>
											<ul class="specs-list">
												<li>1080p & 720p HD Resolution</li>
												<li>True Day/Night Performance</li>
												<li>18 IR LEDs (IR Models)</li>
												<li>External Alarm I/O</li>
												<li>IP66 Rated for Outdoor Use</li>
											</ul>
									</div> <!-- repo-container-->

								</div> <!-- close repositable -->
							</div> <!-- camera-text-->
						</div> <!--cameracontainer -->
				</section>

				<!-- close camera section -->

				<!-- video control banner -->
				<section class="video-control">
					<h2>Video Control</h2>
					<p><span class="uppercase">VALO's</span> video control software acts as a central platform for managing cameras and videos. This intelligent and powerful Video Management Software (VMS) supports most cameras, and has a wide selection of advanced features and add-ons, allowing for highly-efficient video monitoring and surveillance. Features of the video controls include:</p>
				</section>

				<!-- close video control banner -->

				<section class="controls">
					<div class="intuitive">
					<img alt="Power button" src="<?php echo get_template_directory_uri() . '/assets/camera-software//intuitive-user-friendly-01.svg'?>" />
						<h3>Intuitive + User Friendly</h3>
						<p>Interface allows users to easily understand the configuration process and start using the software</p>
					</div>

					<div class="event">
						<img alt="Video Camera" src="<?php echo get_template_directory_uri() . '/assets/camera-software//event-and-action-mgmt-01.svg'?>" />
						<h3>Event + Action Management</h3>
						<p>Automated video surveillance process with an alarm and action manger</p>

					</div>

					<div class="core">
						<img alt="64 bit core" src="<?php echo get_template_directory_uri() . '/assets/camera-software//64-bit-core-01.svg'?>" />
						<h3>64-Bit Core</h3>
						<p>Use the full power of system hardware</p>
					</div>

					<div class="failover">
						<img alt="Mobile Phone" src="<?php echo get_template_directory_uri() . '/assets/camera-software/failover-01.svg'?>" />
						<h3>Failover</h3>
						<p>Continuous monitoring of server status and failover management from the central server</p>

					</div>

					<div class="ready">
						<img alt="Digital Camera" src="<?php echo get_template_directory_uri() . '/assets/camera-software/4k-ready.svg'?>" />
						<h3>4k Ready</h3>
						<p>4K ready VMS application with 4K recording and playback</p>

					</div>

					<div class="archive">
						<img alt="Government building" src="<?php echo get_template_directory_uri() . '/assets/camera-software/archive-replication-01.svg'?>" />
						<h3>Archive Replication</h3>
						<p>Advanced mirror recording with scheduled transfers to ensure safety of data at all times</p>

					</div>


					<div class="powerful">
						<img alt="A Graph" src="<?php echo get_template_directory_uri() . '/assets/camera-software/analytics-01.svg'?>" />
						<h3>Powerful Analytics</h3>
						<p>Modules for advanced video analytics and face recognition</p>


					</div>

					<div class="integration">
						<img alt="Gears" src="<?php echo get_template_directory_uri() . '/assets/camera-software/integration-01.svg'?>" />
						<h3>Integration + API</h3>
						<p>Combine video surveillance with third party software with integration possibilities</p>
					</div>

				</section>

				<div class="facial">

					<div class="facial-image">
						
					</div>

					<div class="facial-text">
						<h2>Facial Recognition</h2>
						<p>VALO supplies face recognition software which is designed to work with video controls. This biometric application provides system performance and reliability.</p>

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