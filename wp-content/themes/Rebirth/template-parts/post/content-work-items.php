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
    <div class="col-sm-1 zoom-thumbs">
      <div id="gal1">
        <a href="#" class="active" data-image="<?php echo get_field('main_gallery_image_1_sm') ?>" data-zoom-image="<?php echo get_field('main_gallery_image_1_lg') ?>">
          <img id="img_01" class="img-responsive" src="<?php echo get_field('main_gallery_image_1_sm') ?>" />
        </a>

        <a href="#" data-image="<?php echo get_field('main_gallery_image_2_sm') ?>" data-zoom-image="<?php echo get_field('main_gallery_image_2_lg') ?>">
          <img id="img_02" class="img-responsive" src="<?php echo get_field('main_gallery_image_2_sm') ?>" />
        </a>

        <a href="#" data-image="<?php echo get_field('main_gallery_image_3_sm') ?>" data-zoom-image="<?php echo get_field('main_gallery_image_3_lg') ?>">
          <img id="img_03" class="img-responsive" src="<?php echo get_field('main_gallery_image_3_sm') ?>" />
        </a>

        <a href="#" data-image="<?php echo get_field('main_gallery_image_4_sm') ?>" data-zoom-image="<?php echo get_field('main_gallery_image_4_lg') ?>">
          <img id="img_04" class="img-responsive" src="<?php echo get_field('main_gallery_image_4_sm') ?>" />
        </a>
      </div>
    </div>
    <div class="col-sm-5 zoom-main">
      <img id="work-zoom" class="img-responsive" src="<?php echo get_field('main_gallery_image_1_sm') ?>" data-zoom-image="<?php echo get_field('main_gallery_image_1_lg') ?>"/>
    </div>
  </div>
  <div class="col-sm-6 post-content">
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
        <img src="<?php echo get_field('gallery_item_1') ?>" alt="<?php echo get_image_tag($alt) ?>">
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="item">
        <img src="<?php echo get_field('gallery_item_2') ?>" alt="">
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="item">
        <img src="<?php echo get_field('gallery_item_3') ?>" alt="">
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="item">
        <img src="<?php echo get_field('gallery_item_4') ?>" alt="">
      </div>
    </div>
  </div>
</section>



