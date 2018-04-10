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
				<h1>Connect With <span class="uppercase">Valo</span></h1>


				<div class="contact-content">
					<div class="phone-address">
						<div class="telephone">
							<span>
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>

							<div class="telephone-info">
								<h3 class="contact-title"> Telephone</h3>
								<p id="phone"> 1-917-660-6000 </p>
							</div>

						</div> <!-- close telephone-->

						<div class="address">
							<span>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</span>

							<div class="address-info">
								<h3 class="contact-title">Address</h3>
								<p>Valo City Smart Corporation</p>
								<p>655 Madison Ave – 3rd Floor</p>
								<p>New York, New York 10065</p>
							</div>



						</div> <!-- close address-->

					</div> <!-- close phone address-->


						<div class="email">
							<span>
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>

							<div class="email-info">
								<h3 class="contact-title"> Email</h3>
								<a href="mailto:info@valosmartcity.com" > info@valosmartcity.com</a>
								<a href="mailto:investors@valosmartcity.com">investors@valosmartcity.com

								</a>
								<a href="mailto:media@valosmartcity.com">media@valosmartcity.com</a>
								<a href="mailto:support@valosmartcity.com">support@valosmartcity.com</a>
								<a href="mailto:sales@valosmartcity.com">sales@valosmartcity.com</a>
							</div>  <!-- close email-info-->

							</div> <!-- close-email-->
						</div> <!-- close contact-content-->
					</section><!-- close contact-info-->
			</section> <!-- close contact-container-->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			</section> <!-- #content-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
