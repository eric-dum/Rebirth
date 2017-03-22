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



