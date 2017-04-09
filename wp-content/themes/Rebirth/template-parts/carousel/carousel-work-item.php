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
  <a href="<?php echo the_permalink() ?>">
    <img src="<?php echo get_field('product_image') ?>" alt="<?php echo the_title() ?>" class="img-responsive">
    <span class="marquee-caption org-name">
      <?php echo the_title() ?>
    </span>
  </a>
</div>