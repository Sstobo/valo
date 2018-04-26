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
						<h1 class="header-main animate-slidein">
							<span class="uppercase">Valo</span> Smart City</h1>
						<h2 class="subheader animate-fadein">The future of Smart City as a Service (SCaaS)</h2>
					</div>
					<a href="#" class="button-main button-hero animate-fadein">Watch Video</a>
				</section>
				<section class="formula-container">
					<h2 class="header-section">Creating a foundation for smart cities.</h2>
					<div class="sub-title-blue-line"></div>
					<picture>
						<source srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.png'?>" media="(max-width: 600px)">
						<source srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-desktop.png'?>">
						<img srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-formula-mobile.png'?>" alt="Smart Lighting + Smart Cities = Valo">
					</picture>
				</section>

				<!-- Integrator section -->
				<section class="integrator-section-wrapper">
					<h2 class="integrator-section-title">
						<span class="uppercase">Valo</span> is a smart city integrator that aims to better people’s lives around the world through Internet of Things
						(IoT) technology.</h2>
					<div class="sub-title-blue-line"></div>
					<div class="integrator-section-container">
						<div class="integrator-item">
							<img alt="Products" class="integrator-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-products-01.png'?>"
							/>
							<h3>Smart Technology <BR> for Smart Cities</h3>
							<a href="<?php echo esc_url(home_url('/products/')); ?>">
								<button class="button-main button-with-shadow">Products</button>
							</a>
						</div>
						<div class="integrator-item">
							<img alt="Services icon" class="integrator-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-services-01.png'?>"
							/>
							<h3>Opportunities for Cities <BR> & Their Citizens</h3>
							<a href="<?php echo esc_url(home_url('/services/')); ?>">
								<button class="button-main button-with-shadow">Services</button>
							</a>
						</div>
						<div class="integrator-item">
							<img alt="Applications icon" class="integrator-icon" srcset="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-applications-01.png'?>"
							/>
							<h3>Making Communities <BR> & Cities Better</h3>
							<a href="<?php echo esc_url(home_url('/applications/')); ?>">
								<button class="button-main button-with-shadow">Applications</button>
							</a>
						</div>
					</div>
				</section>
				<!-- close Integrator section -->

				<!-- iot of things section -->
				<section class="iot-container">
					<div class="iot-photo-container">
						<img alt="Info icon" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/valo-info-01.svg'?>" id="iot-logo"
						/>
					</div>
					<div class="iot-para-container">
						<h3>Internet of Things (IoT) Technology is one of the Fastest Growing Sectors.</h3>
						<p>
							VALO Smart City Integrators are positioned to provide the technology, flexibility and economic savings to support sustainability for small and large installations in cities, municipalities and in rural areas. According to IoT Analytics, smart city projects rank second in the list of IoT segments with existing world-wide IoT projects with the market projected to grow to $757.74 Billion by 2020.
						</p>
						<a href="<?php echo esc_url(home_url('/investors')); ?>" class="button-main button-with-shadow">
							<span class="uppercase">download our corporate presentation</span>
						</a>
					</div>
				</section>
				<!-- close iot -->

				<!-- contact banner -->
				<section class="banner">
					<img alt="Valo logo" src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.png'?>" id="banner-logo"
					/>
					<p>Discover how VALO can help make your city better </p>
					<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button-main button-with-shadow" id="banner-contact-button">Contact Us</a>
				</section>
				<!-- close contact banner -->

				<!-- Press Releases  -->
				<!-- Todo: sync press release links with blog entries -->
				<section class="press-releases-wrapper">
					<h2 class="press-releases-title">Latest Press Releases</h2>
					<div class="sub-title-blue-line"></div>

	
					<div class="press-releases-container">

								<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $query = new WP_Query($args);?>
                             <?php while ($query->have_posts()) : $query->the_post(); ?>
														<div class="press-release">
																	<h3><?php the_title(); ?></h3>
																				<p>
																					<a href="<?php the_permalink();?>">Read More ‣</a>
																				</p>
																				<span><?php the_category(', '); ?> • </span>
																	<span>
																		<?php the_time(' F jS, Y') ?>
																	</span>
														</div>
															<?php endwhile; ?>
															<?php wp_reset_query() ?>
															
											
					</div>

				</section>
				<!-- close Press Releases -->
			</section>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_footer(); ?>