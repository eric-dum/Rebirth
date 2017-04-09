<?php
/**
 * Display Work Carousel
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>

<!-- Work Marquee -->
<div id="marquee-work" class="marquee-nav">

  <!-- NAV BUTTONS -->
  <button class="btn-nav btn-prev">
    <i class="fa fa-chevron-left"></i>
  </button>
  <button class="btn-nav btn-next">
    <i class="fa fa-chevron-right"></i>
  </button>

  <!-- Work Items -->
  <div class="nav-container">

    <?php 
      $args = array(
        'post_type' => 'work-items'
      );
      $query = new WP_Query( $args ); 
    ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      
    <?php get_template_part( 'template-parts/carousel/carousel-work-item' ); ?>

    <?php endwhile; 
       wp_reset_postdata();
     else : ?>
       <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
     <?php endif; ?>

  </div>

</div>

<a href="" class="btn btn-primary btn-block">View More</a>