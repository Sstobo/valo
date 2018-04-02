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
    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
