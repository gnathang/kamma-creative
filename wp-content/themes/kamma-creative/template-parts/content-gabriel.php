<section class="gabriel-wrapper w-100 light-mauve-background">

  <?php

  // query
  $args = array(
    'name' => 'gabriel',
    'posts_per_page' => 1,
  );

  $gabriel = new WP_Query($args);

  if ( $gabriel->have_posts() ) : while ( $gabriel->have_posts() ) :$gabriel->the_post(); 
  
  ?>

    <div class="gabriel-container flex flex-wrap items-center w-90 w-80-ns vh-75-l center pt0-l pt4 latitude">
      <div class="gabriel-text w-50-l w-100">
        <?php the_content(); ?>
        
      </div>
      <div class="gabriel-picture pa3-ns pa0 w-50-l w-100">
        <img class="gabriel-image" alt="web design bristol gabriel nathan kamma creative" src="<?php the_field('gabriel_image'); ?>">
      </div>
    </div>
    
  </div>


  <?php
  endwhile;
  endif;
  ?> 

</section>