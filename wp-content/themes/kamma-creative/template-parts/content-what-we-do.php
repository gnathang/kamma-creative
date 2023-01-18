<section class="what-we-do-wrapper w-100 light-mauve">

  <?php

  // query
  $args = array(
    'name' => 'what-we-do',
    'post_type' => 'sections',
    'posts_per_page' => 1,
  );

  // variable
    $services = new WP_Query($args);

  // loop
  if ( $services->have_posts() ) : while ( $services->have_posts() ) :$services->the_post();?>
  
  <div class="what-we-do-container w-80-ns w-90 center">

    <div class="what-we-do-title vh-25-l flex justify-end-l justify-beginning">
      <h1 class="what-we-do-h1 w-50-ns vh-20-l tr-l tc ttl fw9 syne pv5"><?php the_field('section_title');?></h1>
    </div>

    <div class="services-container flex items-center vh-75-l center pt0-l pt4">
        
      <div class="services-list center flex flex-wrap justify-between pb3">


        <div class="service w-third-l w-75-m w-100 center pa4-l pa2-m pa1">
          <img class="service-image w-75 pb4 " src="<?php echo get_template_directory_uri().
          '/images/development-logo-final.svg'?>">
          <h1 class="f3 service-title pb2"><?php the_field('service_2'); ?></h1>
          <p class="f5 latitude"><?php the_field('service_2_ext'); ?></p>
        </div>

        <div class="service w-third-l w-75-m w-100 center pa4-l pa2-m pa1">
          <img class="service-image w-75 pb4" src="<?php echo get_template_directory_uri().
          '/images/easel.svg'?>">
          <h1 class="f3 service-title pb2"><?php the_field('service_1'); ?></h1>
          <p class="f5 latitude"><?php the_field('service_1_ext'); ?></p>
        </div>

        <div class="service w-third-l w-75-m w-100 center pa4-l pa2-m pa1">
          <img class="service-image w-75 pb4" src="<?php echo get_template_directory_uri().
          '/images/lotus.svg'?>">
          <h1 class="f3 service-title pb2"><?php the_field('service_3'); ?></h1>
          <p class="f5 latitude"><?php the_field('service_3_ext'); ?></p>
        </div>

      </div>

    </div>
  </div>


  <?php
  endwhile;
  endif;
  ?> 

</section>