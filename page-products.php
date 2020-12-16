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
                    <h1>Products</h1>
                    <p> VALO offers various devices and technologies for smart city applications. The company’s line of products
                        provide immediate savings for cities worldwide. VALO offers numerous combinations and configurations
                        of products to meet the unique needs of each city.</p>
                    </div>
                    <div class="products-hero-img"></div>
                </div>
                <div class="products-service-wrapper">
                    <div class="products-lighting">
                    <img alt="Traffic control" class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Products/smart-city-led-lighting-01.svg'; ?>"/></a>
                        <h2>Smart City LED Lighting</h2>
                        <a href="<?php echo esc_url( home_url( '/product/products_lighting/' ) ); ?>" style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="products-platform">
                    <img alt="Smart buildings" class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Products/smart-city-platform.svg'; ?>"/></a>
                        <h2>Smart City Platform</h2>
                        <a href="<?php echo esc_url( home_url( '/product/products_city_platform/' ) ); ?>" style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="products-cameras">
                    <img alt="Digital camera" class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Products/smart-cameras-01.svg'; ?>"/></a>
                        <h2>Smart Cameras + Software</h2>
                        <a href="<?php echo esc_url( home_url( '/product/products_cameras_software/' ) ); ?>" style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                    <div class="products-networks">
                    <img alt="Communication icon" class="products-img" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/Products/smart-city-networks-01.svg'; ?>"/></a>
                        <h2>Smart City Networks
                        </h2>
                        <a href="<?php echo esc_url( home_url( '/products/products_networks/' ) ); ?>" style="padding: 10px 16px 10px 16px;font-size: 13px"class="button-main button-hero">Learn more</a>
                    </div>
                </div>
            </div>




        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->


    <?php get_footer(); ?>