<!-- here we use wp_qeuey to query for our hero category. -->

<?php

  $args = array(
    'name' => 'hero',
    'post_type' => 'sections',
    'posts_per_page' => 1,
  );

  $hero = new WP_Query($args);
  
if ( $hero->have_posts() ) : while ( $hero->have_posts() ) :$hero->the_post();?>
        
  <div class="hero-container w-80-ns w-90 center pb6">   
    <div class="hero-copy fw2 lh-title pv6-ns latitude">
      <p class="hero-text w-70-l w-100 pb5 latitude"> <?php the_field('hero_content'); ?> <span class="typewriter-text tibet-red"id="typing-effect"></span> </p>
    </div>

    <!-- <div class="hero-image w-50-l">
      <?php the_post_thumbnail('full'); ?>
    </div> -->
  </div>

<?php
endwhile;
endif;
?>
