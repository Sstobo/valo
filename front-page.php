<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <section class="content-wrapper">
			<section class="hero-container">
				<div class="header-container">
		  		<h1 class="header-main animate-slidein"><span class="uppercase">Valo</span> Smart City</h1>
					<h2 class="subheader animate-fadein">The future of Smart City as a Service (SCaaS)</h2>
				</div>
				<a href="#" class="button-main button-hero animate-fadein">Watch Video</a>
			</section>
			<section class="formula-container">
				<h2 class="header-section">Creating a foundation for smart cities.</h2>
				<div class="title-blue-line"></div>
				<picture>
    			<source srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.png'?>" media="(max-width: 600px)">
    			<source srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-desktop.png'?>">
    			<img srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.png'?>" alt="Smart Lighting + Smart Cities = Valo">
				</picture>
			</section>

			<!-- Integrator section -->
			<section class="integrator-section-wrapper">
				<h2 class="integrator-section-title"><span class="uppercase">Valo</span> is a smart city integrator that aims to better people’s lives around the world through Internet of Things (IoT) technology.</h2>
				<div class="title-blue-line"></div>
				<div class="integrator-section-container"> 
          <div class="integrator-item">
						 <img alt="Products" class="integrator-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-products-01.png'?>" />
						  <h3>Smart Technology for Smart Cities</h3>
						 <a href="<?php echo esc_url(home_url('/products/')); ?>"><button class="button-main button-with-shadow">Products</button></a>
					</div>
					 <div class="integrator-item">
							<img alt="Services icon" class="integrator-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-services-01.png'?>" />
							<h3>Opportunities for Cities & Their Citizens</h3> 
						 <a href="<?php echo esc_url(home_url('/services/')); ?>"><button class="button-main button-with-shadow">Services</button></a>
					</div>
					 <div class="integrator-item">
						  <img alt="Applications icon" class="integrator-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-applications-01.png'?>" />
							 <h3>Making Communities & Cities better</h3>
						 <a href="<?php echo esc_url(home_url('/applications/')); ?>"><button class="button-main button-with-shadow">Applications</button></a>
					 </div>
				</div>
			</section>
			<!-- close Integrator section -->

			<!-- iot of things section -->
			<section class="iot-container">
				<div class="iot-photo-container">
				<img alt="Info icon" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-info-01.svg'?>" id="iot-logo"/>
				</div>
				<div class="iot-para-container">
					<h3>Internet of Things (IoT) Technology is one of the Fastest Growing Sectors.</h3>
					<p>Curabitur venenatis finibus ante et laoreet. Proin commodo, urna sed rhoncus bibendum, nibh metus blandit nibh, eget elementum enim magna eu velit. Aliquam purus sem, faucibus vestibulum risus. Maecenas gravida lacus nec dolor suscipit faucibus.</p>
					<button class="button-main button-with-shadow"> <span class="uppercase">download our corporate presentation</span></button>
				</div>
		 </section>
		 <!-- close iot -->

			<!-- contact banner -->
			<section class="banner">
			<img alt="Valo logo" src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.png'?>" id="banner-logo"/>
			<p>Discover how VALO can help make your city better </p>
			<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button-main button-with-shadow" id="banner-contact-button">Contact Us</a>
			</section>
			<!-- close contact banner -->

			<!-- Press Releases -->
			<section class="press-releases-wrapper">
				<h2 class="press-releases-title">Latest Press Releases</h2>
				<div class="sub-title-blue-line"></div>
				<div class="press-releases-container">
            <div class="press-release">
						   <h3>Valo Smart City as a Service</h3>
							 <p><a href="https://cbdev.solutions/valosmartcity/valo-smart-city-as-a-service/" title="Valo Smart City as a   Service" rel="bookmark">Read More ‣</a></p>
						     <span>Company News, Press Releases • </span>
					   	   <span>January 25, 2018</span>
					 </div>
					 <div class="press-release">
						  <h3>Internet of Things Technology</h3>
							<p><a href="https://cbdev.solutions/valosmartcity/vivamus-diam-tellus-efficitur-id-felis-quis/" title="Internet of Thing Technology" rel="bookmark">Read More ‣</a></p>
								<span>Company News, Press Releases • </span>
					     	<span>January 25, 2018</span>
					 </div>
					 <div class="press-release">
						 	<h3>Valo Smart City Secures Funding</h3>
							 <p><a href="https://cbdev.solutions/valosmartcity/vsalo-smart-city-secures-funding/" title="Valo Smart City Secures Funding" rel="bookmark">Read More ‣</a></p>
							 	<span>Company News, Press Releases • </span>
						    <span>January 25, 2018</span>
					 </div>
				</div>
			</section>
			<!-- close Press Releases -->
    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
