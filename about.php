<?php
/**
 * The template for displaying all pages.
 * Template Name: about_company
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="content-wrapper">
				<div class="about-top-row-container">
					<div class="about-single-item-vision">
						<h2>
							<strong>The VALO Vision</strong>
						</h2>
						<p>VALO strives to improve people’s lives by providing better lighting and safer environments. Valo’s Smart City platform
							makes cities more efficient by collecting real-time data for city services and infrastructure, such as transportation,
							utilities, security, and pollution.
						</p>
					</div>
					<div class="about-top-row-image">
						<div class="about-vision-image">
						</div>
					</div>
				</div>
				<div class="about-our-purpose-container">
					<div class="about-our-purpose-image">
						<div class="about-purpose-image">
						</div>
					</div>
					<div class="about-single-item-purpose">
						<h2>
							<strong>Our Purpose</strong>
						</h2>
						<div class="about-purpose-blue-line"></div>
						<p>VALO is a smart city integrator that aims to better people’s lives around the world through the Internet of Things
							(IoT) technology. VALO’s products and services provide better lighting for city inhabitants which increases safety.</p>
						<p>Additionally, VALO makes cities more efficient by collecting real-time information for city assets, such as traffic,
							security, pollution, and municipal utilities.</p>
						<h3>Have a Smart City Project or Idea?</h3>
						<a href="<?php echo esc_url(home_url('about/#!/contact')); ?>">
							<button class="button-main button-with-shadow">GET STARTED WITH VALO</button>
						</a>
					</div>
				</div>
				<!-- Our purpose container -->
				<div class="about-advantage-container">
					<div class="about-the-valo-advantage">
						<img class="about-lightbulb-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/lightbulb.png'?>"
						/>
						<!-- Todo: add correct icons -->
						<!-- <i class="fa fa-lightbulb-o fa-3x" aria-hidden="true"></i>  -->
						<h2>
							<strong>The VALO Advantage</strong>
						</h2>
						<span>Installing and maintaining street lights presents numerous issues for cities and municipalities. Financial and technical
							problems related to street lights include:</span>
					</div>
					<div class="about-high-costs">
						<h1>01</h1>
						<h3>High Costs</h3>
						<p>High energy costs, and maintenance and replacement costs for existing street lighting</p>
					</div>
					<div class="about-lack-of-capital">
						<h1>02</h1>
						<h3>Lack of Capital</h3>
						<p>Lack of capital funds to change existing street lighting to new energy efficient LED street lights</p>
					</div>
					<div class="about-no-financial">
						<h1>03</h1>
						<h3>No Financial Credit</h3>
						<p>No financial credit to purchase new street lights</p>
					</div>
				</div>
				<!-- about-advantage-container -->
				<div class="about-advantage-container-two">
					<div class="about-financing">
						<h1>04</h1>
						<h3>Financing</h3>
						<p>Money required to fund new projects</p>
					</div>
					<div class="about-lack-of-data">
						<h1>05</h1>
						<h3>Lack of Data</h3>
						<p>Existing street lights provide no real-time information on city assets or services</p>
					</div>
				</div>
				<!-- about-financing -->

				<section class="about-platform-wrapper">
					<h3>Valo’s platform addresses these problems while providing
						<br> multiple benefits for cities and the people living within them:</h3>
					<div class="title-blue-line">
					</div>
					
					<div class="about-platform-container">
						<div class="about-platform-left-container">
							<div class="about-platform-left-top">
								<p>VALO installs and maintains new LED street lights for the city with no out-of-pocket costs for the city</p>
								<div class="about-icon">
									<i class="fa fa-wrench fa-2x" aria-hidden="true"></i>
								</div>
							</div>
							<div class="about-platform-left-bottom">
								<p>VALO shares cost savings with the city which provides new funds for city projects</p>
								<div class="about-icon">
									<i class="fa fa-book fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<!-- about-platform-left-container -->
						<div class="about-platform-center-container">
							<img class="about-phone-icon" srcset="<?php echo get_template_directory_uri() . '/assets/images/valo-phone.png'?>" />
						</div>
						<div class="about-platform-right-container">
							<div class="about-platform-right-top">
								<div class="about-icon">
									<i class="fa fa-money fa-2x" aria-hidden="true"></i>
								</div>
								<p>VALO creates new revenues for the city via data and advertising</p>
							</div>
							<div class="about-platform-right-bottom">
								<div class="about-icon">
									<i class="fa fa-wifi fa-2x" aria-hidden="true"></i>
								</div>
								<p>VALO provides new services for the city’s citizens, such as public WiFi</p>
							</div>
						</div>
					</div>
						<!-- about-platform-container -->
				</section>
				<!-- about-platform-wrapper -->
			</section>
			<!-- Content Wrapper -->
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_footer(); ?>