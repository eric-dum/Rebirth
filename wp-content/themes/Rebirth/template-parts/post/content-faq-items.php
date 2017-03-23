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
    <h2 class="h3 heading question">
      <?php echo the_title() ?>
    </h2>
    <div class="answer">
      <?php echo the_content() ?>
    </div>
  </div>
</div>



