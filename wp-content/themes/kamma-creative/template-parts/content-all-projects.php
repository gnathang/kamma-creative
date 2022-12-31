<section class="all-projects-wrapper">
  <div class="projects-container w-100 center pa1"> 
  
    <div class="projects-grid w-100 center flex flex-wrap">  
      <?php
        $args = array(
          'category_name' => 'projects',
          'posts_per_page' => 8,
        );
          $projects = new WP_Query($args);

        if ( $projects->have_posts() ) : while ( $projects->have_posts() ) : $projects->the_post();?>

          <!-- *** if we use padding on the a tag it seems to work with the aspect ratio 
              because it doesn't offset it -->
              
          <a href="<?php the_permalink(); ?>" class="link-wrapper w-50-l w-100 pa1 z-0">
            <div class="project-link-wrapper aspect-ratio aspect-ratio--16x9 w-100">

              <div class="link-background aspect-ratio--object bg-center cover" 
                    style="<?php if (get_field ('project_thumbnail') ): ?> 
                    background-image: url(<?php the_field('project_thumbnail'); ?>);
                    <?php endif; ?>">
                
                <div class="client-overlay o-0 w-100 h-100 block" style="background-color:<?php the_field('overlay_color'); ?>">
                  <div class="overlay-wrapper w-75 light-mauve syne pa4-l pa2 absolute bottom-0">
                    <p class="client-name tracked f5-ns f6"> <?php the_title(); ?> </p>
                    <p class="client-service mv0 tracked f5-ns f6"> 
                      <?php the_field('services_given'); ?></p>
                  </div>
                </div>

              </div>
            </div>
          </a>

      <?php
      endwhile;
      endif;
      ?>
    </div>

  </div>
</section>