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
                    <img alt="A green car" class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-vehicle.png'; ?>"/></a>
                        <h3>Smart Transportation</h3>
                        <a href="<?php echo get_page_link( get_page_by_title("Smart Transportation" )->ID ); ?>"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-platform">
                    <img alt="A car"  class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-recycle.png'; ?>"/></a>
                        <h3>Smart Municipal Services</h3>
                       <a href="<?php echo get_page_link( get_page_by_title( "Smart Municipal Services" )->ID ); ?>"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-cameras">
                    <img alt="Security panel" class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-security-panel.png'; ?>"/></a>
                        <h3>Smart Security</h3>
                        <a href="<?php echo get_page_link( get_page_by_title( "Smart City Security" )->ID ); ?>"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-networks">
                    <img alt="Zero emmision icon" class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/applications-zero-emission.png'; ?>"/></a>
                        <h3>Smart Environmental Monitoring
                        </h3>
                        <a href="<?php echo get_page_link( get_page_by_title( "Smart Environmental Monitoring" )->ID ); ?>"class="button-main button-hero">Learn more</a>
                      
                    </div>
                </div>
            </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<
<?php get_footer(); ?>
