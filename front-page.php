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
			<section class="transparent-container">
				<h2>Latest Press Releases</h2>
			</section>
    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
