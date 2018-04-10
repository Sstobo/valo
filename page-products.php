<?php
/**
 * The template for displaying all pages.
 * Template Name: product
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="products-wrapper">
                <div class="products-hero">
                    <div class="products-hero-wrapper">
                    <h1> Products </h1>
                    <p1> VALO offers various devices and technologies for smart city applications. The company’s line of products
                        provide immediate savings for cities worldwide. VALO offers numerous combinations and configurations
                        of products to meet the unique needs of each city.</p1>
                    </div>
                    <div class="products-hero-img">test</div>
                </div>
                <div class="products-service-wrapper">
                    <div class="products-lighting">
                    <img class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/traffic-control.png'; ?>"/></a>
                        <h2>Smart City LED Lighting</h2>
                        <a href="#" class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="products-platform">
                    <img class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/smart-buildings.png'; ?>"/></a>
                        <h2>Smart City Platform</h2>
                        <a href="<?php echo esc_url( home_url( '/product-platform/' ) ); ?>" class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="products-cameras">
                    <img class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/digital-camera.png'; ?>"/></a>
                        <h2>Smart Cameras + Software</h2>
                        <a href="#" class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="products-networks">
                    <img class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/communication.png'; ?>"/></a>
                        <h2>Smart City Networks
                        </h2>
                        <a href="#" class="button-main button-hero">Learn more</a>
                    </div>
                </div>
            </div>




        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->


    <?php get_footer(); ?>