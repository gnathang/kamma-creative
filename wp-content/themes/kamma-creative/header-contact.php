<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kamma_Creative
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500
							&family=Habibi&family=Josefin+Sans:wght@300;400;500;600;700
							&family=Space+Grotesk:wght@300;400;500;600;700
							&family=Syne:wght@400;500;600;700;800
							&family=Tenali+Ramakrishna&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kamma-creative' ); ?></a> -->

	<header id="masthead" class="site-header h-10 z-5 w-100 ma0 pv4 flex justify-between items-center">
		<a href="<?php echo home_url();?>" class="flex items-center w-10 z-5">
			<div class="logo flex items-center w-100"> &nbsp;
				<img src="<?php echo get_template_directory_uri().'/images/kamma-logo.svg'?>" class="kamma-logo fixed-l absolute left-2-ns left-1 z-5" href="#">
			</div>
		</a>

		<div class="header-container flex items-center w-80">
			<div class="site-branding w-50 flex items-center justify-beginning ma0">
				<a href="<?php echo home_url();?>">
					<!-- <h1 class="site-title f3 ttl syne fw9 tibet-red ma0 ">Kamma</h1>	 -->
				</a>
			</div><!-- .site-branding -->
			
			<!-- <nav id="site-navigation" class="flex justify-end site-menu site-menu-home ttl syne f6 fw7 mr3 scroll home-nav db-l dn">
					<?php wp_nav_menu(); ?>
			</nav> -->
			
			<nav id="site-navigation" class="main-navigation w-50 flex justify-end">
				<!-- <a class="ttl syne f6 fw7 mr3 scroll home-nav db-l dn" href="#projects">Work</a>
				<a class="ttl syne f6 fw7 scroll home-nav db-l dn" href="#contact">Contact</a> -->
				<!-- <a class="syne fw7 dn-l z-3" onclick="showMenu();">menu</a> -->
				<!--<a class="ttl syne f5 fw7 mr3 scroll project-nav" href="https://kammacreative.com/">Home</a>-->
			</nav>

			<nav id="site-menu-small" class="site-menu z-4">
					<?php wp_nav_menu(); ?>
					<div class="site-menu-socials center w4 flex justify-around">
						<a href="https://github.com/gnathang" class="social-icons social-icons-menu">
							<img src="<?php echo get_template_directory_uri().'/images/github-logo.svg'?>">
						</a>
						<a href="#" class="social-icons social-icons-menu">
							<img src="<?php echo get_template_directory_uri().'/images/iconmonstr-instagram-11.svg'?>">
						</a>
					</div>
					<!-- <div class="contact center w-20 flex flex-wrap justify-around">
						<p class="email">gabriel@kammacreative.co.uk</p>
						<p class="phone">+44 (0) 7808648848</p>
					</div> -->
			</nav>

		</div>

		<div class="w-10 tl">
			<img src="<?php echo get_template_directory_uri().'/images/hamburger.svg'?>" class="hamburger-menu fixed-l absolute right-2-ns right-1 z-5" onclick="showMenu();">
		</div>

	</header><!-- #masthead -->
