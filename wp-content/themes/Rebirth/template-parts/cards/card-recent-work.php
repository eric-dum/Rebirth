<?php
/**
 * Display Recent Work Card on Archive page
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>

<div class="col-sm-4 card media-card">
  <a href="<?php echo the_permalink(); ?>">
    <div class="media-img">
      <span class="cat-label">
        <?php
          $allCat = get_the_category();
          $lastCat = array_reverse($allCat);
          echo $lastCat[1]->name;
        ?>
      </span>
      <?php 

        $image = get_field('gallery_item_1');

        // vars
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // thumbnail
        $size = 'action-gallery-thumb';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];

        if( !empty($image) ): ?>

          <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">

      <?php endif; ?>
    </div>
    <div class="media-content">
      <h3 class="heading">
        <?php the_title() ?> 
      </h3>
      <div class="meta"></div>
      <div class="excerpt">
        <?php
          $content = get_the_content();
          $charLimit = 225;
          echo mb_strimwidth($content, 0, $charLimit, '...');
        ?>
      </div>
      <a href="<?php echo get_permalink(); ?>" class="btn btn-ghost">
        Learn More
      </a>
    </div>
  </a>
</div>