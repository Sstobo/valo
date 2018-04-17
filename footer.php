<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

      <div class="signup-container">
				<h1 id="form-title"> Sign Up for the Latest Valo News </h1>
				<h1 id="form-title-services">Get More Information on our Public Private Partnerships</h1>
				<p id="services-para">Contact us today to get more information on our Public Private Partnerships</p>
				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
			</div>


			<footer id="colophon" class="site-footer" role="contentinfo">
			
		
				<div class="site-info">
					<div class="contact-us">
				    <p class="caps title">Contact Us</p>
						<a href="tel:1-917-660-6000" id="phone">1-917-660-6000</a>
						<p class="caps email-title">Email</p>
						<a href="mailto: info@valosmartcity.com" id="email-link">info@valosmartcity.com</a>
						<p class="caps ">Main Office Address</p>
						<p class="address">655 Madison Ave 3rd Floor</p>
						<p class="address">New York, New York 10065 </p>

					<div class="icon-container">
						<span class="icon-background">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</span>
						<span class="icon-background">
							<i class="fa fa fa-twitter" aria-hidden="true"></i>
						</span>
						<span class="icon-background">
							<i class="fa fa-youtube-play" aria-hidden="true"></i>
						</span>
						<span class="icon-background">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</span>
						<span class="icon-background">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</span>
				</div>

					
					</div>

					<div class="useful-links">
						<p class="caps title">Useful Links</p>
						<a href="<?php echo esc_url(home_url('/about/about_company'));?>"> Company </a>
						<a href="<?php echo esc_url(home_url('/investors'));?>"> Investor Presentations</a>
						<a href="<?php echo esc_url(home_url('/products/products_lighting'));?>">  Smart City LED Lighting</a>
						<a href="<?php echo esc_url(home_url('/products/products_city_platform'));?>">  Smart City Platform </a>
						<a href="<?php echo esc_url(home_url('/products/products_cameras_software'));?>"> Smart Cameras and Software</a>
					</div>

					<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $query = new WP_Query( $args );?>

					<div class="news">
						<p class="caps title">News</p>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
							<p class="journal-date"><?php the_time(' F jS, Y') ?></p>

						<?php endwhile; ?>
						<?php wp_reset_query() ?>
					</div>
					


					
					



					<div class="logo">
						<img alt="Valo logo" src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.png'?>" id="logo"/>
						<p id="copy"> &copy Valo Smart City 2018. All Rights Reserved.</p>
						<div class="fix"> 
							<i class="fa fa-long-arrow-up" aria-hidden="true"></i>

						</div>

					</div>

				</div><!-- .site-info -->
			
		</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>

	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
</html>
