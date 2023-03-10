<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kamma_Creative
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			// grab the individual project page from the 'work' post type
			get_template_part( 'template-parts/content', get_post_type('work') );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
