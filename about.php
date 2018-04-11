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
					<div class="management-company-container">
							<div class="top-row-container">
									<div class="single-item-vision">
							 			 <h2><strong>The VALO Vision</strong></h2>
											<p>VALO strives to improve people’s lives by providing better lighting and safer environments. Valo’s Smart City platform makes cities more efficient by collecting real-time data for city services and infrastructure, such as transportation, utilities, security, and pollution.
											</p>
									</div>
									<div class="top-row-image">
									    <div class="vision-image">
											</div>
									</div>
							</div>
							<div class="our-purpose-container">
								<div class="our-purpose-image">
									    <div class="purpose-image">
											</div>
									</div>
									<div class="single-item-purpose">
							 			 <h2><strong>Our Purpose</strong></h2>
											<div class="purpose-blue-line"></div>
											<p>VALO is a smart city integrator that aims to better people’s lives around the world through the Internet of Things (IoT) technology. VALO’s products and services provide better lighting for city inhabitants which increases safety.</p>
											<p>Additionally, VALO makes cities more efficient by collecting real-time information for city assets, such as traffic, security, pollution, and municipal utilities.</p>
											<h3>Have a Smart City Project or Idea?</h3>
											<a href="<?php echo esc_url(home_url('about/#!/contact')); ?>"><button class="button-main button-with-shadow">GET STARTED WITH VALO</button></a>
									</div>
							</div>
					</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>