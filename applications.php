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
                    <p> VALO’s street lights and Smart City platform can be used in a variety of ways by both cities and citizens. VALO’s technological solutions make for smarter cities since municipalities can better manage their assets and resources using data collected from sensors connected to street lights. Potential use cases of VALO’s products and services include:</p>
                    </div>
                    <div class="applications-hero-img"></div>
                </div>
                <div class="applications-service-wrapper">
                    <div class="applications-lighting">
                    <img alt="A green car" class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Applications/smart-transport-01.svg'; ?>"/></a>
                        <h3>Smart Transportation</h3>
                        <a href="<?php echo get_page_link( get_page_by_title("Smart Transportation" )->ID ); ?>"style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-platform">
                    <img alt="A car"  class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Applications/municipal-01.svg'; ?>"/></a>
                        <h3>Smart Municipal Services</h3>
                       <a href="<?php echo get_page_link( get_page_by_title( "Smart Municipal Services" )->ID ); ?>"style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-cameras">
                    <img alt="Security panel" class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Applications/smart-security-01.svg'; ?>"/></a>
                        <h3>Smart Security</h3>
                        <a href="<?php echo get_page_link( get_page_by_title( "Smart City Security" )->ID ); ?>"style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="applications-networks">
                    <img alt="Zero emmision icon" class="applications-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Applications/environmental-01.svg'; ?>"/></a>
                        <h3 style=" min-width: 200px">Smart Environmental Monitoring
                        </h3>
                        <a href="<?php echo get_page_link( get_page_by_title( "Smart Environmental Monitoring" )->ID ); ?>"style="padding: 10px 16px 10px 16px; font-size: 13px"class="button-main button-hero">Learn more</a>
                      
                    </div>
                </div>
            </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<
<?php get_footer(); ?>
