<?php
/**
 * Display Contact Card on home page
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>

<div class="card card-feed">
  <div class="card-header">
    <h3 class="h3 contact-heading heading-zero-margin">
      Get in touch
    </h3>
  </div>
  <div class="card-content">
    <?php echo do_shortcode('[contact-form-7 id="42" title="Contact - Home" html_id="contact-form-home" html_class="form contact-form"]'); ?>
  </div>
</div>

