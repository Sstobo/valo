<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-services">
		<main id="main" class="site-main" role="main">
      <section class="content-wrapper">

        <section class="services-header">
          <h1>Services</h1>
          <p><span>valo’s</span> street lights and Smart City platform provide beneficial opportunities for both cities and their citizens. The advanced technology in <span>Valo’s</span> street lights and controllers allow cities to save money and resources, while offering convenient amenities to city inhabitants. The main services offered by <span>Valo</span> are:</p>

        </section> <!-- close services header -->

        <section class="wifi">
          <div class="wifi-image"></div>
          <h1>Free Public Wifi</h1>
          <p>Free public WiFi access can be delivered with Valo’s gigabit WiFi unit which creates wireless hotspots where people can access the internet at no cost. Public WiFi has many benefits for cities and users, such as convenient access to services, support for tourism, and communication channels for disaster relief.</p>
        </section><!-- close wifi-->

        <section class="adverts">
          <p>With the VALO platform, cities bare no cost for providing public WiFi as costs are covered via advertising revenue. WiFi enabled street lights are estimated to gain $450 USD yearly in ad revenue per light. This revenue is then shared between the city (20%) and Valo (80%).</p>
          <p>Advertising is delivered in three ways: </p>

          <div class="add-links">
            <div class="paid-add">
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

             <div class="click-add">
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
                <p>Paid advertising when consumers click advertisements to get more information.</p>
              </div>
            </div> <!-- close click add-->

            <div class="beacon-add">
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
                <p>Paid ads where advertisers push coupons and adverts based on location and the proximity to services being offered.</p>
              </div>
            </div> <!-- close beacon add-->

          </div> <!-- close add-links-->


        </section><!--close adverts-->

        <section class="partner">
          <div class="partner-header-section">
            <div class="partner-image"></div>
            <h1> Public Private Partnerships</h1>
            <p><span>Valo</span> offers an optional Public Private Partnership with cities and municipalities. This partnership saves money for the city, and potential revenue is shared between the partners. By leveraging profits and costs, the Public Private Partnership has several advantages:</p>
          </div><!-- close partner header -->

          <div class="partner-image-section">
            <div class="network"></div>
            <div class="cost"></div>
            <div class="city"></div>
          </div>
        </section><!-- close partner-->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>
      </section> <!-- close content container-->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>