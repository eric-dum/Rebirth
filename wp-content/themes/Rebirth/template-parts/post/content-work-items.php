<?php
/**
 * Template part for displaying work items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<section id="primary-content" class="row">
  <div class="zoom-gallery">
    <div class="col-md-1 zoom-thumbs">
      <div id="gal1">
        
        <?php 

          $image = get_field('main_gallery_image_1');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $small = 'zoom-gallery-thumb';
          $thumbsm = $image['sizes'][ $small ];
          $widthsm = $image['sizes'][ $small . '-width' ];
          $heightsm = $image['sizes'][ $small . '-height' ];
          $large = 'zoom-gallery-full';
          $thumblg = $image['sizes'][ $large ];
          $widthlg = $image['sizes'][ $large . '-width' ];
          $heightlg = $image['sizes'][ $large . '-height' ];
          

          if( !empty($image) ): ?>

            <a href="#" class="active" data-image="<?php echo $thumbsm; ?>" data-zoom-image="<?php echo $thumblg; ?>">
              <img id="img_01" class="img-responsive" src="<?php echo $thumbsm; ?>" />
            </a>

        <?php endif; ?>

        <?php 

          $image = get_field('main_gallery_image_2');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $small = 'zoom-gallery-thumb';
          $thumbsm = $image['sizes'][ $small ];
          $widthsm = $image['sizes'][ $small . '-width' ];
          $heightsm = $image['sizes'][ $small . '-height' ];
          $large = 'zoom-gallery-full';
          $thumblg = $image['sizes'][ $large ];
          $widthlg = $image['sizes'][ $large . '-width' ];
          $heightlg = $image['sizes'][ $large . '-height' ];
          

          if( !empty($image) ): ?>

            <a href="#" data-image="<?php echo $thumbsm; ?>" data-zoom-image="<?php echo $thumblg; ?>">
              <img id="img_02" class="img-responsive" src="<?php echo $thumbsm; ?>" />
            </a>

        <?php endif; ?>

        <?php 

          $image = get_field('main_gallery_image_3');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $small = 'zoom-gallery-thumb';
          $thumbsm = $image['sizes'][ $small ];
          $widthsm = $image['sizes'][ $small . '-width' ];
          $heightsm = $image['sizes'][ $small . '-height' ];
          $large = 'zoom-gallery-full';
          $thumblg = $image['sizes'][ $large ];
          $widthlg = $image['sizes'][ $large . '-width' ];
          $heightlg = $image['sizes'][ $large . '-height' ];
          

          if( !empty($image) ): ?>

            <a href="#" data-image="<?php echo $thumbsm; ?>" data-zoom-image="<?php echo $thumblg; ?>">
              <img id="img_03" class="img-responsive" src="<?php echo $thumbsm; ?>" />
            </a>

        <?php endif; ?>

        <?php 

          $image = get_field('main_gallery_image_4');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $small = 'zoom-gallery-thumb';
          $thumbsm = $image['sizes'][ $small ];
          $widthsm = $image['sizes'][ $small . '-width' ];
          $heightsm = $image['sizes'][ $small . '-height' ];
          $large = 'zoom-gallery-full';
          $thumblg = $image['sizes'][ $large ];
          $widthlg = $image['sizes'][ $large . '-width' ];
          $heightlg = $image['sizes'][ $large . '-height' ];
          

          if( !empty($image) ): ?>

            <a href="#" data-image="<?php echo $thumbsm; ?>" data-zoom-image="<?php echo $thumblg; ?>">
              <img id="img_04" class="img-responsive" src="<?php echo $thumbsm; ?>" />
            </a>

        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-5 zoom-main">
      <?php 

          $image = get_field('main_gallery_image_1');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $small = 'zoom-gallery-thumb';
          $thumbsm = $image['sizes'][ $small ];
          $widthsm = $image['sizes'][ $small . '-width' ];
          $heightsm = $image['sizes'][ $small . '-height' ];
          $large = 'zoom-gallery-full';
          $thumblg = $image['sizes'][ $large ];
          $widthlg = $image['sizes'][ $large . '-width' ];
          $heightlg = $image['sizes'][ $large . '-height' ];
          

          if( !empty($image) ): ?>

            <img id="work-zoom" class="img-responsive" src="<?php echo $thumbsm ?>" data-zoom-image="<?php echo $thumblg ?>"/>

        <?php endif; ?>
    </div>
  </div>
  <div class="col-md-6 post-content">
    <h1 class="h2">
      <?php the_title() ?> 
    </h1>
    <div class="content">
      <?php the_content() ?>
      <br>
      <p>
        <a href="/contact" class="btn btn-primary">Get in touch</a>
      </p>
    </div>
  </div>
</section>

<section id="action-gallery" class="row ">
  <?php 
    $sectionName = 'See it in action';
    include( locate_template( 'template-parts/components/section-headings.php', false, false ) );
  ?>
  <div class="gallery-items">
    <div class="col-xs-6 col-md-3">
      <div class="item">
          <?php 

            $image = get_field('gallery_item_1');

            // vars
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];

            // thumbnail
            $sizeThumb = 'action-gallery-thumb';
            $sizeFull = 'large';
            $full = $image['sizes'][ $sizeFull ];
            $thumb = $image['sizes'][ $sizeThumb ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];

            if( !empty($image) ): ?>
              
              <a href="<?php echo $full; ?>" rel="lightbox">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
              </a>

          <?php endif; ?>
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="item">
        <?php 

          $image = get_field('gallery_item_2');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $sizeThumb = 'action-gallery-thumb';
          $sizeFull = 'large';
          $full = $image['sizes'][ $sizeFull ];
          $thumb = $image['sizes'][ $sizeThumb ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];

          if( !empty($image) ): ?>
            
            <a href="<?php echo $full; ?>" rel="lightbox">
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
            </a>

        <?php endif; ?>
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="item">
        <?php 

          $image = get_field('gallery_item_3');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $sizeThumb = 'action-gallery-thumb';
          $sizeFull = 'large';
          $full = $image['sizes'][ $sizeFull ];
          $thumb = $image['sizes'][ $sizeThumb ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];

          if( !empty($image) ): ?>
            
            <a href="<?php echo $full; ?>" rel="lightbox">
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
            </a>

        <?php endif; ?>
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="item">
        <?php 

          $image = get_field('gallery_item_4');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $sizeThumb = 'action-gallery-thumb';
          $sizeFull = 'large';
          $full = $image['sizes'][ $sizeFull ];
          $thumb = $image['sizes'][ $sizeThumb ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];

          if( !empty($image) ): ?>
            
            <a href="<?php echo $full; ?>" rel="lightbox">
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
            </a>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>



