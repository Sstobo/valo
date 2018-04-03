<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--Import Google Icon Font-->
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
		<!--Import materialize.css-->
		<!-- <link type="text/css" rel="stylesheet" href="sass/components/materialize.scss" media="screen,projection" /> -->

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html( 'Skip to content' ); ?>
			</a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					
				</div>
				<!-- .site-branding -->


				<div class="header-wrapper" id="header-wrapper">
				
				<div class="header-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="header-logo-image" src="<?php echo get_template_directory_uri() . '/assets/Logo SVG/VALO black logo-01.png'; ?>"/></a>
				</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<?php esc_html( 'Primary Menu' ); ?>
						</button> -->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
					<!-- #site-navigation -->
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<div class="header-contact-desktop">
						<h3> 1-917-660-6000 </h3>
						<p1> Get in touch today <p1>
						<div>
				</div>
			</header>

			<div id="content" class="site-content">