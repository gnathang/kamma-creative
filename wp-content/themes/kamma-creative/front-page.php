<?php
/**
 * The main template file
 * Template Name: Front Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kamma_Creative
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php 
		// grab our hero from its own template part -->
		get_template_part('template-parts/content-hero'); 

		get_template_part('template-parts/content-intro');

		get_template_part('template-parts/content-what-we-do');

		get_template_part('template-parts/content-projects');

		get_template_part('template-parts/content-contact-small');

	?>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
