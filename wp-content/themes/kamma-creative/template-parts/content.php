<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kamma_Creative
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<header class="entry-header">
	
	</header><!-- .entry-header -->
		
		<div class="project-container w-80-ns w-90 center pt5 pb6">

			<!-- Project title -->
			<h2 class="project-title f2-ns f3 w-100 latitude fw2"><?php the_title();?></h2>
			
			<!-- Project header -->
			<div class="project-header flex flex-wrap pb4">
				<div class="w-50-l w-100 pv4 pr3">
<!-- 					<h2 class="latitude f4 fw1 brand-2">Brief:</h2> -->
					<h2 class="w-90-ns w-100 vh-20-l tl f4 fw1 latitude"><?php the_field('project_brief'); ?></h2>
				</div>
				<div class="w-50-l w-100 pv4 pl3 tr">
					<h2 class="latitude f4 fw1 brand-burnt-orange">Who they are:</h2>
					<h2 class="project-intro w-100-ns w-100 brand-2 fw1 latitude f4"><?php the_field('project_intro');?></h2>	
				</div>
			</div>

			<!-- Project hero -->
			<a class="project-hero db-ns dn" href="<?php the_field('project_url'); ?>">
				<img class="w-100 h-100 center" src="<?php the_field('project_hero_image');?>">
			</a>

			<!-- Project hero for mobile viewports -->
			<a class="project-hero-mobile db dn-ns" href="<?php the_field('project_url'); ?>">
				<img class="w-100 center" src="<?php the_field('project_hero_image_mobile');?>">
			</a>

			<!-- Visit site button / in maintainance message -->
				<div class="f4-ns f6 fw1 mv4 tc center flex items-center justify-center">
					<?php 
						// conditionally display the <a> to the site or the 'in progress' message
						$live = get_post_meta(get_the_ID(), 'project_live', true);
						// echo $live;
						if ($live == 1) {
							echo '<a class="visit-site-button br-pill pa3 latitude" href="'.get_field('project_url').'">Visit Site</a>';
						} else { 
					       $logo = get_template_directory_uri() . '/images/kamma-logo-alt-red.svg';
							echo '<img class="logo-mini w2" src="'.$logo.'">
									<p class="in-progress-message pa3 latitude brand-chalk-red fw1 f5-ns f6">
										'.get_field('project_in_progress_message').'
									</p>
									<img class="logo-mini w2" src="'.$logo.'">';
						}
					?>
				</div>
			
			<!-- Project summary 1 -->
			<div class="project-summary w-100 flex flex-wrap mb5">
				<h3 class="w-70-l w-100 center latitude f4-ns f5-m f6 tj">
					<?php the_field('project_main_body_text_1');?>
				</h3>
			</div>

			<!-- Mobile screen mockups -->
			<div class="mobile-mockups w-100 flex flex-wrap justify-around">
				<div class="mobile-mockup-1">
					<img src="<?php the_field('mobile_mockup_1'); ?>">
				</div>	
				<div class="mobile-mockup-1 db-ns dn">
					<img src="<?php the_field('mobile_mockup_2'); ?>">
				</div>	
			</div>

			<!-- Project footer -->
			<div class="project-footer w-100 flex flex-wrap mt5 mb6">

                <!--Project summary 2-->
				<h3 class="w-70-l w-100 latitude center pr4-l br2 f4-ns f5-m f6 tj">
					<?php the_field('project_main_body_text_2');?>
				</h3>
                
                <?php 
					if ( 
							get_field('swatch_1') || get_field('swatch_2') || get_field('swatch_3') ||
							get_field('swatch_4') || get_field('graphic_1') || get_field('graphic_2') || 
							get_field('graphic_3')
						 ) {
				?>
				<div class="supporting-project-fragments center w-70-l w-100  mv5-ns mv4">

					<div class="design-fragments flex flex-wrap">
						<div class="misc-graphics flex flex-wrap w-100 justify-between-ns justify-around">
							<div class="swatches pa1 flex items-center justify-center">
								<img src="<?php if( get_field('swatch_1') ): the_field('swatch_1'); endif; ?>">
								<img src="<?php if( get_field('swatch_2') ): the_field('swatch_2'); endif; ?>">
								<img src="<?php if( get_field('swatch_3') ): the_field('swatch_3'); endif; ?>">
								<img src="<?php if( get_field('swatch_4') ): the_field('swatch_4'); endif; ?>">
							</div>
							<img class="pa1" src="<?php if( get_field('graphic_1') ): the_field('graphic_1'); endif; ?>">
							<img class="pa1" src="<?php if( get_field('graphic_2') ): the_field('graphic_2'); endif; ?>">
							<img class="pa1" src="<?php if( get_field('graphic_3') ): the_field('graphic_3'); endif; ?>">
						</div>
					</div>

				</div>
				<?php } 
				?>
				
            </div> <!-- project-footer -->
			

			<?php get_template_part('template-parts/content-other-projects'); ?>

		</div> <!-- project-container -->

	<div class="entry-content">

	</div>

	<?php
		get_template_part('template-parts/content-contact-small');

	 	get_footer(); 
	?>


