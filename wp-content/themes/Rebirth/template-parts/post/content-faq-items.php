<?php
/**
 * Template part for displaying FAQ items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>


<div class="col-md-6 card card-faq">
  <div class="faq-graphic">
    <span class="heading">Q</span>
  </div>
  <div class="col-sm-12 faq-content">
    <h2 class="h3 heading question" role="button" data-toggle="collapse" href="#faq-item-<?php echo the_id(); ?>" aria-expanded="false" aria-controls="collapseExample">
      <?php echo the_title() ?>
    </h2>
    <div class="answer collapse" id="faq-item-<?php echo the_id(); ?>">
      <?php echo the_content() ?>
    </div>
  </div>
</div>



