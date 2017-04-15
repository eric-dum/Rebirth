<?php
/**
 * Display Promo Carousel Item
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>


<div class="item">
  <?php 

    $image = get_field('background_image');

    // vars
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // thumbnail
    $size = 'promo-carousel';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];

    if( !empty($image) ): ?>

      <img src="<?php echo $thumb; ?>" alt="<?php echo the_title(); ?>">

  <?php endif; ?>
  
  <div class="carousel-caption">
    <h2 class="carousel-heading">
      <?php the_title() ?>
    </h2>
    <div class="carousel-excerpt hidden-xs hidden-sm">
      <?php
        $content = get_the_content();
        $charLimit = 300;
        echo mb_strimwidth($content, 0, $charLimit, '...');
      ?>
    </div>

    <?php if( get_field('destination') ): ?>
      <a href="<?php echo get_field('destination') ?>" class="btn btn-ghost">
        Learn More
      </a>
    <?php endif; ?>
    
  </div>
</div>