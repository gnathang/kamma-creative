<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kamma_Creative
 */

?>

	<footer id="colophon" class="site-footer w-100 ma0 pv3 flex justify-between items-center orange-background">
	
		<div class="logo w-10-l w-20 tr">
			<!-- <p class="credits">fonts by Dagheet at Velvetyne Type Foundry</p> -->
		</div>

		<div class="copyright flex flex-wrap items-center justify-center w-80-l w-60 tc">
				<p class="w-60 tc">Ⓒ 2022 <?php bloginfo('name')?> </p>
		</div>

		<div class="social w-10-l w-20 tc">
			<a href="https://github.com/kammacreative">
				<img src="<?php echo get_template_directory_uri().'/images/github-logo.svg'?>" class="social-icons-footer">
			</a>
			<a href="https://www.instagram.com/tundra.creative">
				<img src="<?php echo get_template_directory_uri().'/images/iconmonstr-instagram-11.svg'?>" class="social-icons-footer">
			</a>
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php // wp_footer(); ?>

</body>
</html>
