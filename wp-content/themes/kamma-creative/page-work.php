<?php
/**
 * Template Name: Work
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
*/

get_header('all-projects');
?>

	<main id="primary" class="site-main">
	
			<?php 
				get_template_part('template-parts/content-all-projects');
				get_template_part('template-parts/content-contact-small');
			?>
	
	</main><!-- #main -->

<?php

get_footer();
