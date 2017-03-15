<?php
/**
 * Display Twitter Feed
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>

<div class="card card-feed">
  <div class="card-header">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/logo-instagram.png" alt="" class="img-responsive">    
  </div>
  <div class="card-content">
    <?php echo do_shortcode('[instagram-feed]') ?>
  </div>
</div>

