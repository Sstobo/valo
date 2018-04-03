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
				<img srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-desktop.svg'?>, <?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.svg'?> " alt="<?php echo $term->name ; ?>" />
			</section>
			<section class="transparent-container">
			<h2><span class="uppercase">Valo</span> is a smart city integrator that aims to better people’s lives around the world through Internet of Things (IoT) technology.</h2>
			</section>
			<section class="container"></section>

			<!-- contact banner -->
			<section class="banner">
			<img src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.svg'?>" id="banner-logo"/>
			<p>Discover how VALO can help make your city better </p>
			<button id="banner-contact-button">Contact Us</button>
			</section>
			<!-- close contact banner -->

			<section class="press-releases-wrapper">
				<h2 class="press-releases-title">Latest Press Releases</h2>
				<div class="blue-line"></div>
				<div class="press-releases-container"> 
          <div class="press-release">
						 <h3><a href="https://cbdev.solutions/valosmartcity/valo-smart-city-as-a-service/" title="Valo Smart City as a Service" rel="bookmark">Valo Smart City as a Service</a></h3>
						   <span>Company News, Press Releases • </span>
					   	 <span>January 25, 2018</span>
					</div>
					 <div class="press-release">
						  <h3>Internet of Thing Technology</h3>
								<span>Company News, Press Releases • </span>
					     	<span>January 25, 2018</span>
					</div>
					 <div class="press-release">
						 	<h3><a href="https://cbdev.solutions/valosmartcity/vsalo-smart-city-secures-funding/" title="Valo Smart City Secures Funding" rel="bookmark">Valo Smart City Secures Funding</a></h3>
							 	<span>Company News, Press Releases • </span>
						    <span>January 25, 2018</span>
					</div>
				</div>
    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
