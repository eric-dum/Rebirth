<?php
/**
 * Display Media Card on home page
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>

<div class="col-sm-4 card media-card">
  <a href="<?php echo the_permalink(); ?>">
    <div class="media-img">
      <?php 

        $image = get_field('tile_image');

        // vars
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // thumbnail
        $size = 'video-feature';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
        
        if( !empty($image) ): ?>
        
        <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />

      <?php endif; ?>
    </div>
    <div class="media-content">
      <h3 class="heading">
        <?php the_title(); ?>
      </h3>
      <div class="meta"></div>
      <div class="excerpt">
        <p>
          <?php
            $content = get_the_content();
            $charLimit = 200;
            echo mb_strimwidth($content, 0, $charLimit, '...');
          ?>
        </p>
      </div>
      <a href="<?php echo the_permalink(); ?>" class="btn btn-ghost">
        View Video
      </a>
    </div>
  </a>
</div>