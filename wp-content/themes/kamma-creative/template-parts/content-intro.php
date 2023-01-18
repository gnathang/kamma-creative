<section class="intro-wrapper w-100">

  <?php 

    $args = array (
      'name' => 'who-we-are',
      'post_type' => 'sections',
      'posts_per_page' => 1,
    );

    $intro = new WP_Query ($args);

    if ($intro->have_posts()) : while ($intro->have_posts()) : $intro->the_post(); ?>

      <div class="intro-container w-90 w-80-ns center flex flex-wrap pv5">
        <div class="w-50-l">
          <h1 class="intro-h1 ttl fw9 syne w-100"><?php the_field('section_title');?></h1>
          <h2 class="intro-h2 fw4 f4 latitude pt2"><?php the_content();?></h2>
          <p class="intro-p"><?php the_field('intro_ext');?></p>
        </div>
      <!--  <div class="flex flex-wrap">-->
      <!--  <a href="/work" class="latitude flex items-center justify-start">-->
      <!--    <img src="<?php echo get_template_directory_uri(). '/images/arrow-purple.svg'?>" class="mr2 w2-ns w1">-->
      <!--    <p class="see-all-work f4-ns f5 syne">View our work</p>-->
      <!--  </a>-->
      <!--</div>-->
      </div>
      

  <?php
  endwhile;
  endif;
  ?>

</section>