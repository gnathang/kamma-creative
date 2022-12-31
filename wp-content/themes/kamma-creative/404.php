<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Kamma_Creative
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found vh-100  flex items-center justify-center latitude">
			<header class="page-header">
				<h1 class="page-title center tc pb3"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kamma-creative' ); ?></h1>
				<p class="page-title center tc">click the cloud to go home...</p>
				<a class="center" href="<?php echo home_url();?>">
					<div class="w-100 flex">
						<img src="<?php echo get_template_directory_uri().'/images/kamma-logo.svg'?>" class="center w3" href="#">
					</div>
				</a>
			</header><!-- .page-header -->

			
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
