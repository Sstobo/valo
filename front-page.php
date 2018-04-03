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
			<section class="container">
				<h2 class="header-section">Creating a foundation for smart cities.</h2>
				<picture>
    			<source srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.png'?>" media="(max-width: 600px)">
    			<source srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-desktop.png'?>">
    			<img srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.png'?>" alt="Smart Lighting + Smart Cities = Valo">
				</picture>
			</section>
			<section class="transparent-container">
			<h2><span class="uppercase">Valo</span> is a smart city integrator that aims to better people’s lives around the world through Internet of Things (IoT) technology.</h2>
			</section>
			<section class="container"></section>

			<!-- iot of things section -->
			<section class="iot-container">
				<div class="iot-photo-container">
				<img src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-info-01.png'?>" id="iot-logo"/>
				</div>
				<div class="iot-para-container">
					<h2>Internet of Things (IoT) Technology is one of the Fastest Growing Sectors.</h2>
					<p>Curabitur venenatis finibus ante et laoreet. Proin commodo, urna sed rhoncus bibendum, nibh metus blandit nibh, eget elementum enim magna eu velit. Aliquam purus sem, faucibus vestibulum risus. Maecenas gravida lacus nec dolor suscipit faucibus.</p>
					<button id="iot-button"> download our corporate presentation</button>
				</div>
		 </section>
		 <!-- close iot -->

			<!-- contact banner -->
			<section class="banner">
			<img src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.png'?>" id="banner-logo"/>
			<p>Discover how VALO can help make your city better </p>
			<button id="banner-contact-button">Contact Us</button>
			</section>
			<!-- close contact banner -->

			<section class="press-releases-wrapper">
				<h2 class="press-releases-title">Latest Press Releases</h2>
				<div class="blue-line"></div>
				<div class="press-releases-container"> 
          <div class="press-release">
						<h6>Valo Smart City as a Service</h6>
						<p>Company News, Press Releases • January 25, 2018</p>
					</div>
					 <div class="press-release">
						 	<h6>Internet of Thing Technology</h6>
							 	<p>Company News, Press Releases • January 25, 2018</p>
					</div>
					 <div class="press-release">
						 	<h6>Valo Smart City secures funding</h6>
							 	<p>Company News, Press Releases • January 25, 2018</p>
					</div>
				</div>
    </section><!-- #content-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
