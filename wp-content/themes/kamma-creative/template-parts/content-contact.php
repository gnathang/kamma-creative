<section id="contact"class="contact-wrapper w-100 pink-grey-background">

  <?php

  // query
  $args = array(
    'category_name' => 'contact',
    'posts_per_page' => 1,
  );

  // variable
    $contact = new WP_Query($args);

  // loop
  if ( $contact->have_posts() ) : while ( $contact->have_posts() ) :$contact->the_post();?>
  
  
    <div class="contact-container w-90 w-80-ns vh-150 center flex flex-wrap pb5">

      <div class="w-50-l">
        <h1 class="contact-h1 ttl fw9 syne pt4"><?php the_field('section_title');?></h1>
        <p class="contact-intro f4-l f5 latitude w-80-ns w-100"><?php the_field('contact_intro');?></p>
        <h2 class="contact-h2 fw4"><?php the_content();?></h2>
      </div>
      
    </div>
 

  <?php
  endwhile;
  endif;
  ?> 

</section>