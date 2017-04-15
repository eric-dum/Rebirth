<?php
/**
 * Display Hero Carousel
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>

<div id="carousel-hero" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php 
      $args = array(
        'post_type' => 'promo',
        'posts_per_page' => '5'
      );
      $query = new WP_Query( $args ); 
    ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      
    <?php get_template_part( 'template-parts/carousel/carousel-hero-item' ); ?>

    <?php endwhile; 
       wp_reset_postdata();
     else : ?>

    <?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-hero" role="button" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-hero" role="button" data-slide="next">
    <i class="fa fa-chevron-right"></i>
    <span class="sr-only">Next</span>
  </a>
</div>