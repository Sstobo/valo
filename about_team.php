<?php
/**
 * The template for displaying all pages.
 * Template Name: about_team
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="content-wrapper">
				<div class="about-team-management-team-title-container">
					<h2>Management Team</h2>
					<div class="about-title-blue-line"></div>
				</div>
				<div class="about-team-management-team-container">
					<?php while (have_posts()) : the_post(); ?>
					<div class="about-team-single-team-member-container ike-sutton">
						<div class="about-team-name-and-position">
							<h3>
								<strong>Isaac H. Sutton</strong>
							</h3>
							<span>Chief Executive Officer & President</span>
						</div>
						<img alt="Isaac H Sutton" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/Isaac H Sutton.png'?>"
						  id="Isaac H Sutton" />
						<p>Mr. Sutton has more than 40 years of successful entrepreneurial experience, especially in emerging markets where he
							has founded and ran several companies. He has held multiple roles as either President, Chief Executive Officer, or
							Chairman of the Board for numerous companies, including GolP Global Inc. and Tarsier Ltd. He holds a Bachelor of Arts
							degree in Business Administration from Pace University.
						</p>
						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="mailto:isutton@valosmartcity.com">EMAIL</a>
						</div>
					</div>
					<div class="about-team-single-team-member-container terrance-dittrich">
						<div class="about-team-name-and-position">
							<h3>
								<strong>Terrence Dittrich</strong>
							</h3>
							<span>
								<strong>Chief Operations Officer</strong>
							</span>
						</div>
						<img alt="Terrence Dittrich" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/Terrence Dittrich.png'?>"
						  id="Terrence Dittrich" />
						<p>Terrence Dittrich brings significant experience in international economic development to his role as the COO of VALO.
							Terrence is the President TWD Global Enterprises, a firm that specializes in assisting clients to enter and expand
							in the emerging markets of Central Asia, the Middle East and Africa, with particular emphasis on construction/infrastructure
							development. With over 20 years of global experience Mr. Dittrich and his associates bring "real world" expertise
							to assist clients to succeed in these challenging markets.</p>

						<p>Mr. Dittrich is also a Senior Advisor to the European Bank for Reconstruction and Development and has 20+ years of
							global business experience, primarily in emerging markets of Russia/CIS, GCC, China, India. Travelled to over 70 countries
							and successfully secured first sales in over 20 countries.</p>


						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="https://www.linkedin.com/in/terry-dittrich-963a549b/" target="_blank">LINKEDIN</a>
							<a href="mailto:tdittrich@valosmartcity.com">EMAIL</a>
						</div>
					</div>
					<div class="about-team-single-team-member-container alan-fogleman">
						<div class="about-team-name-and-position">
							<h3>
								<strong>Alan Fogelman</strong>
							</h3>
							<span>
								<strong>Chief Financial Officer</strong>
							</span>
						</div>
						<img alt="Alan Fogelman" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/Alan Fogelman.png'?>" id="Alan Fogelman"
						/>
						<p>Alan Fogelman is a Certified Public Accountant and has been practicing for more than 30 years. Additionally, he is
							a Certified Financial Planner and holds a Series 7 securities license. He is a member of various organizations where
							he donates his time and expertise.</p>

						<p>Mr. Fogelman did his undergraduate work in economics at SUNY at Stony Brook and his graduate work in accounting at
							Baruch College.</p>

						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="https://www.linkedin.com/in/alan-fogelman-658507b/" target="_blank">LINKEDIN</a>
							<a href="mailto:afogelman@valosmartcity.com">EMAIL</a>
						</div>
					</div>
					<div class="about-team-single-team-member-container steve-altman">
						<div class="about-team-name-and-position">
							<h3>
								<strong>Steve Altman</strong>
							</h3>
							<span>
								<strong>VP Business Development</strong>
							</span>
						</div>
						<img alt="Steve Altman" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/Steve Altman.png'?>" id="Steve Altman"
						/>
						<p>Steven Altman is a performance-driven, business strategist and problem solver. A supreme negotiator, he is also armed
							with extraordinary business development skills and possesses a deep knowledge of finance and business management across
							a wide array of goods and services platforms. As the principal of LSA Development Corp. and prior to that as a commercial
							litigator for both large and small sized firms, he has a proven track record of presenting concepts and closing transactions.
							Altman lives in New York and is a car and motorcycle enthusiast.</p>

						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="https://www.linkedin.com/in/steven-altman-lsa/" target="_blank">LINKEDIN</a>
							<a href="mailto:saltman@valosmartcity.com">EMAIL</a>
						</div>
					</div>
					<div class="about-team-single-team-member-container david-harper">
						<div class="about-team-name-and-position">
							<h3>
								<strong>David Harper</strong>
							</h3>
							<span>
								<strong>Advisor</strong>
							</span>
						</div>
						<img alt="David Harper" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/David Harper.png'?>" id="David Harper"
						/>
						<p>David Harper, founder and CEO of Delivr®, has over 20 years' experience as a designer, ad man, technologist, patent
							holding inventor and entrepreneur. Delivr adds connectivity to printed media, labels and packaging — turning passive,
							everyday things into smart, connected objects. David is also the founder of Engagelogic® a privately held, NY-based
							software development and early-stage venture firm.</p>
						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="https://www.linkedin.com/in/harper/" target="_blank">LINKEDIN</a>
							<a ref="mailto:dharper@valosmartcity.com">EMAIL</a>
						</div>
					</div>
					<div class="about-team-single-team-member-container wanda-halpert">
						<div class="about-team-name-and-position">
							<h3>
								<strong>Wanda Halpert</strong>
							</h3>
							<span>
								<strong>Advisor</strong>
							</span>
						</div>
						<img alt="Wanda Halpert" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/Wanda Halpert.png'?>" id="Wanda Halpert"
						/>
						<p>Wanda Halpert brings a twenty-one year history in corporate strategic planning with over 750 projects and a background
							in mergers & acquisitions to her role as an advisor to VALO. Having traveled extensively as an international consultant,
							Wanda has worked to develop corporate guidelines for governments including the Business Development Bank of Canada.
							She has produced award winning market research and has experience in over 100 industry sectors.
						</p>
						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="https://www.linkedin.com/in/wandahalpert/" target="_blank">LINKEDIN</a>
							<a href="mailto:whalpert@valosmartcity.com">EMAIL</a>
						</div>
					</div>
					<div class="about-team-single-team-member-container julio-ferreira">
						<div class="about-team-name-and-position">
							<h3>
								<strong>Julio Ferreira</strong>
							</h3>
							<span>
								<strong>Advisor</strong>
							</span>
						</div>
						<img alt="Julio Ferreira" src="<?php echo get_template_directory_uri() . '/assets/managment-photos/Julio Ferreira.png'?>"
						  id="Julio Ferreira" />

						<p>Julio Ferreira is the former CEO of Global 8 Environment Technologies www.g8et.com, and the driving force behind Green
							Kids Austin and its sister project, Green Kids Brazil, an innovative “sustainable mall” and ecological education resource
							for young people.</p>

						<p>A Brazilian-born American, Julio Ferreira uses investment, education, and collaboration to help reduce humankinds’
							impact on the environment. His global perspective and talent for cutting-edge commercial strategies, combined with
							his passion for protecting the environment through sustainable development solutions, has earned him an international
							reputation as an enthusiastic visionary and business pioneer.</p>

						<div class="about-team-contact">
							<strong>CONTACT
								<br>
							</strong>
							<a href="https://www.linkedin.com/in/julio-ferreira-b0306928/" target="_blank">LINKEDIN</a>
							<a ref="mailto:jferreira@valosmartcity.com">EMAIL</a>
						</div>
					</div>

				</div>
				<?php endwhile; // End of the loop.?>
				<div class="about-team-signup-image">
				</div>
			</section>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>