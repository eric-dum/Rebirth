<?php
/**
 * Display Work Carousel Item
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>


<div class="marquee-item" data-index>
  <?php 

    $image = get_field('product_image');

    // vars
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // thumbnail
    $size = 'product-image';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];

    if( !empty($image) ): ?>

      <a href="<?php echo the_permalink() ?>">
        <img src="<?php echo $thumb; ?>" alt="<?php echo the_title() ?>" class="img-responsive">
        <span class="marquee-caption org-name">
          <?php echo the_title() ?>
        </span>
      </a>

  <?php endif; ?>
</div>