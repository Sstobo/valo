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
						<p>VALO strives to improve people’s lives by providing better lighting and safer environments. VALO’s Smart City platform
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
						<p>VALO is a smart city integrator that aims to better people’s lives around the world through the Internet of Things
							(IoT) technology. VALO’s products and services provide better lighting for city inhabitants which increases safety.</p>
						<p>Additionally, VALO makes cities more efficient by collecting real-time information for city assets, such as traffic,
							security, pollution, and municipal utilities.</p>
						<h3>Have a Smart City Project or Idea?</h3>
						<a href="<?php echo esc_url(home_url('about/#!/contact')); ?>">
							<button class="button-main button-with-shadow button-align-left">GET STARTED WITH VALO</button>
						</a>
					</div>
				</div>
				<!-- Our purpose container -->
				<div class="about-advantage-container">
					<div class="about-the-valo-advantage">
						<i class="fa fa-lightbulb-o fa-3x about-icon" aria-hidden="true"></i>
							<h3>The VALO Advantage</h3>
						<span>Installing and maintaining street lights can present issues for cities and municipalities. VALO overcomes the financial and technical challenges related to developing this infrastructure:</span>
					</div>
					<div class="about-high-costs">
						<h1>01</h1>
						<h3>Zero Cost</h3>
						<p>VALO replaces and maintains aging municipal infrastructure with advanced technology at no cost to the city.</p>
					</div>
					<div class="about-lack-of-capital">
						<h1>02</h1>
						<h3>Capital Allocation</h3>
						<p>VALO brings the advantage of no capital cost, freeing up budgets for other concerns within local cities.</p>
					</div>
					<div class="about-no-financial">
						<h1>03</h1>
						<h3>Data Collection</h3>
						<p>VALO street lights provide real-time information on city assets and services.</p>
					</div>
				</div>
				<!-- about-advantage-container -->

				<section class="about-platform-wrapper">
					<div class="about-platform-container">
						<div class="about-platform-left-container">	
						</div>
						<!-- about-platform-left-container -->
						<div class="about-platform-right-container">
							<p>VALO’s platform addresses these problems while providing multiple benefits for cities and the people living within them:</p>
							<div class="about-platform-text-container">
								<div class="about-icon">
									<i class="fa fa-check" aria-hidden="true"></i>
								</div>
								<p>VALO installs and maintains new LED street lights for the city with no out-of-pocket costs for the city</p>
								
							</div>
							<div class="about-platform-text-container">
								<div class="about-icon">
									<i class="fa fa-check" aria-hidden="true"></i>
								</div>
								<p>VALO shares cost savings with the city which provides new funds for city projects</p>
							</div>
							<div class="about-platform-text-container">
								<div class="about-icon">
									<i class="fa fa-check" aria-hidden="true"></i>
								</div>
								<p>VALO creates new revenues for the city via data and advertising</p>
							</div>
							<div class="about-platform-text-container">
								<div class="about-icon">
									<i class="fa fa-check" aria-hidden="true"></i>
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