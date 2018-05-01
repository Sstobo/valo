<?php
/**
 * The template for displaying all pages.
 * Template Name: contact
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="contact-content-area">
		<main id="main" class="site-main" role="main">
   <section class="content-wrapper">

		<section class="contact-container">
			<section class="contact-image"></section>

		
			<section class="contact-info">
				<h1>Connect With <span class="uppercase">VALO</span></h1>


				<div class="contact-content">
					<div class="phone-address">
						<div class="telephone">
							<span>
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>

							<div class="telephone-info">
								<h3 class="contact-title"> Telephone</h3>
								<a href="tel:1-917-660-6000" id="phone">1-917-660-6000</a>
							</div>

						</div> <!-- close telephone-->

						<div class="address">
							<span>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</span>

							<div class="address-info">
								<h3 class="contact-title">Address</h3>
								<p>VALO City Smart Corporation</p>
								<p>655 Madison Ave – 3rd Floor</p>
								<p>New York, New York 10065</p>
							</div>



						</div> <!-- close address-->

					</div> <!-- close phone address-->


						<div class="email">

							

							<div class="email-info">

								<span>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>

							<div>
								<h3 class="contact-title"> Email</h3>
								<a href="mailto:info@valosmartcity.com" > info@valosmartcity.com</a>
							</div>

								</div>  <!-- close email-info-->

							<div class="contact-social-media-container">
								<span>
									<i class="fa fa-share-alt" aria-hidden="true"></i>
								</span>
								<div class="contact-social-media-links">
									<h3 class="contact-title">Social Media </h3>
									<i class="fa fa-facebook" aria-hidden="true"></i>
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</div>
							</div>
							
						

							</div> <!-- close-email-->
						</div> <!-- close contact-content-->
					</section><!-- close contact-info-->
			</section> <!-- close contact-container-->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			</section> <!-- #content-wrapper -->
			<div class="signup-wrapper">
						<div class="signup-container">
					<h1 id="form-title"> Sign Up for the Latest VALO News </h1>
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
				</div>
			</div>

		<div class="contact-footer">
			<img alt="footer logo" src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.png'?>" id="contact-logo"/>
			<div class="copy-top">
				<p id="contact-copy"> &copy VALO Smart City 2018. All Rights Reserved.</p> 
				<!-- <div class="fix"> 
					<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
				</div> -->
					
			</div>

			  
		</div>

		</main><!-- #main -->

		
		
	</div><!-- #primary -->





