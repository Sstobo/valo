<?php
/**
 * The template for displaying all pages.
 * Template Name: services
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-services">
		<main id="main" class="site-main" role="main">
      <section class="content-wrapper">

       <section class="service-wrapper">
        <section class="services-header">
          
          <h2>Services</h2>
          <p><span class="uppercase">valo’s</span> street lights and Smart City platform provide beneficial opportunities for both cities and their citizens. The advanced technology in <spanclass="uppercase" >Valo’s</span> street lights and controllers allow cities to save money and resources, while offering convenient amenities to city inhabitants. The main services offered by <span class="uppercase">Valo</span> are:</p>
         

        </section> <!-- close services header -->
        <div class="service-image">
            <img  src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/services.svg'?>"/>
        </div>
      </section> <!-- service wrapper-->

        <section class="wifi">
          <div class="wifi-image-services">
              <img alt="Wifi logo" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/free-public-wifi.svg'?>" id="wifi-image"/>
          </div>

          <h2>Free Public Wifi</h2>
          <p>Free public WiFi access can be delivered with Valo’s gigabit WiFi unit which creates wireless hotspots where people can access the internet at no cost. Public WiFi has many benefits for cities and users, such as convenient access to services, support for tourism, and communication channels for disaster relief.</p>
        </section><!-- close wifi-->


         <section class="badvert-wrapper">
          <div class="badvert-image"></div>
        
          <section class="badverts">
         
          <p class="badd-para">With the <span class="uppercase">Valo</span> platform, cities bare no cost for providing public WiFi as costs are covered via advertising revenue. This revenue is shared between the city (20%) and VALO (80%).</p>
          <p id="add-deliv"> Advertising is delivered in three ways: </p>

          <div class="badd-links">
            <div class="paid-badd">
              <div class="title no-border">
                <p>Paid Advertising</p>
                <div class="service-icon-container up ">
                  <i class="fa fa-chevron-up " aria-hidden="true"></i>
                </div>

                <div class="service-icon-container down hide">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
              </div>

              <div class="text height">
                <p>Paid adverts are displayed on cell phones and mobile devices when accessing the free public WiFi.</p>
              </div>
            </div> <!-- close paid add-->

             <div class="click-badd">
             <div class="title">
                <p>Click-Through Advertising</p>
                <div class="service-icon-container up hide">
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </div>
                <div class="service-icon-container down">
                  <i class="fa fa-chevron-down " aria-hidden="true"></i>
                </div>

              </div>

              <div class="text">
                <p>Paid advertising when consumers click to get more information.</p>
              </div>
            </div> <!-- close click add-->

            <div class="beacon-badd">
               <div class="title">
                <p>Beacon Advertising</p>
                <div class="service-icon-container up hide">
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </div>
                <div class="service-icon-container down">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>

              </div>

              <div class="text">
                <p>Paid ads where advertisers push coupons and  based on location and the proximity to services being offered.</p>
              </div>
            </div> <!-- close beacon add-->

          </div> <!-- close add-links-->


        </section><!--close adverts-->
    </section> <!-- close ad wrapper --> 

        <section class="partner">
          <div class="partner-header-section">
            <div class="partner-image">
              <img alt="Service icon" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/public.svg'?>" id="bulb-image"/>
            </div>
            <h2> Public Private Partnerships</h2>
            <p><span class="uppercase">Valo</span> offers multi-year Public Private Partnership with cities and municipalities. This partnership saves money for the city, and potential revenue is shared between the partners. By leveraging profits and costs, the Public Private Partnership has several advantages:</p>
          </div><!-- close partner header -->

          <div class="partner-image-section">
            <div class="network">
              <img alt="Street light" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/network-platform-01.svg'?>" id="street-light-image"/>
              <h3>Network Platform</h3>
              <p><span class="uppercase">Valo</span>  provides energy efficient LED street lights and a network platform for city data collection.</p>

            </div> <!-- network -->

            <div class="cost">
              <img alt="Cost icon" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/cost-coverage-01.svg'?>" id="cost-image"/>
              <h3>Cost Coverage</h3>
              <p><span class="uppercase">Valo</span>  covers all costs for hardware, installation, maintenance and warranty for 15-20 years.</p>
            </div> <!-- cost -->

            <div class="city">
              <img alt="City image" src="<?php echo get_template_directory_uri() . '/assets/icons-SVG/city-partnership.svg'?>" id="city-image"/>
              <h3> City Partnership</h3>
              <p>Savings are shared equally between the city and <span class="uppercase">Valo</span> . New revenue streams, such as advertising revenue from public WiFi, are shared with the city (20%) and <span class="uppercase">Valo</span>  (80%).</p>
            </div> <!-- close city-->
          </div> <!-- close partner image -->
        </section><!-- close partner-->

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

      <?php endwhile; // End of the loop.?>
      </section> <!-- close content container-->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>