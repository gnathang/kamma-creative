<section class="gabriel-wrapper w-100 light-mauve-background">

  <?php

  // query
  $args = array(
    'name' => 'gabriel',
    'post_type' => 'sections',
    'posts_per_page' => 1,
  );

  $gabriel = new WP_Query($args);

  if ( $gabriel->have_posts() ) : while ( $gabriel->have_posts() ) :$gabriel->the_post(); 
  
  ?>

    <div class="gabriel-container flex flex-wrap items-center w-90 w-80-ns vh-75-l center pt0-l pt4 latitude">
      <div class="gabriel-text w-50-l w-100 tj-l pr4-ns pr0">
        <?php the_content(); ?>
        <div class="gabriel-link-wrappers flex justify-end-l justify-start-m justify-end mb0-l mb3">
          <a class="db g-social-link mr3" href="https://gnathang.github.io/portfolio/">
            <img class="g-social-link" src="<?php echo get_template_directory_uri().'/images/portfolio-link.svg'?>">
          </a>
          <a class="db g-social-link" href="https://www.linkedin.com/in/gabriel-nathan-bb8023199/">
            <img class="g-social-link" src="<?php echo get_template_directory_uri().'/images/linkedin-purple.svg'?>">
          </a>
        </div>
      </div>
      <div class="gabriel-picture pa3-l pa0 w-50-l w-100">
        <img class="gabriel-image" alt="web design bristol gabriel nathan kamma creative" src="<?php the_field('gabriel_image'); ?>">
      </div>
    </div>
    
  </div>


  <?php
  endwhile;
  endif;
  ?> 

</section>