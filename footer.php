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
				<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
			</div>


			<footer id="colophon" class="site-footer" role="contentinfo">
			
		
				<div class="site-info">
					<div class="contact-us">
				    <h1>Contact Us</h1>
						<h3>1-917-660-6000</h3>
						<p class="caps">Email</p>
						<a href="mailto: info@valocity.com" id="email-link">info@valocity.com</a>
						<p class="caps">Main Office Address</p>
						<p>655 Madison Ave 3rd Floor</p>
						<p>New York, New York 10065 </p>

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
						<h1>Useful Links</h1>
						<a href="#"> Company </a>
						<a href="#"> Investor Presentations</a>
						<a href="#">  Smart City LED Lighting</a>
						<a href="#">  Smart City Platform </a>
						<a href="#"> Smart Cameras and Software</a>
					</div>
					<div class="news">
						<h1>News</h1>
						<a href="#">Valo Smart City as a service</a>
						<p class="journal-date"> Janurary 30, 2018</p>
						<a href="#" > Internet of Thing Technology </a>
						<p class="journal-date">January 30, 2018</p>
						<a href="#">Valo Smart City reserves funding </a>
						<p class="journal-date">January 30, 2018</p>
					</div>
					<div class="logo">
						<img src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO white logo-01.png'?>" id="logo"/>
						<p id="copy"> &copy Valo Smart City 2018. All Rights Reserved.</p> 
					</div>

				</div><!-- .site-info -->
			
		</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>

	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
</html>
