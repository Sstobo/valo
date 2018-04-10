<?php
/**
 * The template for displaying all pages.
 * Template Name: applications
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="applications-wrapper">
                <div class="applications-hero">
                    <div class="applications-hero-wrapper">
                    <h1> Applications </h1>
                    <p1> VALO’s street lights and Smart City platform can be used in a variety of ways by both cities and citizens. VALO’s technological solutions make for smarter cities since municipalities can better manage their assets and resources using data collected from sensors connected to street lights. Potential use cases of VALO’s products and services include:</p1>
                    </div>
                    <div class="applications-hero-img">test</div>
                </div>
                <div class="applications-service-wrapper">
                    <div class="applications-lighting">
                    <img class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-vehicle.png'; ?>"/></a>
                        <h2>Smart City LED Lighting</h2>
                        <a href="#" class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-platform">
                    <img class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-recycle.png'; ?>"/></a>
                        <h2>Smart City Platform</h2>
                        <a href="<?php echo esc_url( home_url( '/product-platform/' ) ); ?>" class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-cameras">
                    <img class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-security-panel.png'; ?>"/></a>
                        <h2>Smart Cameras + Software</h2>
                        <a href="#" class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-networks">
                    <img class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-zero-emission.png'; ?>"/></a>
                        <h2>Smart City Networks
                        </h2>
                        <a href="#" class="button-main button-hero">Learn more</a>
                    </div>
                </div>
            </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<
<?php get_footer(); ?>
