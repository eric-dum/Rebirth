<?php
  /**
   * The template for displaying the footer
   *
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package WordPress
   * @subpackage Twenty_Seventeen
   * @since 1.0
   * @version 1.0
   */

?>

<footer id="global-footer" class="container-fluid max-contain">
  <div class="row">
    <div class="col-sm-6">
      <div class="contact-details">
        <h2 class="h2 heading">
          Contact Info
        </h2>
        <address>
          4405 Lamson Dr <br>
          Waterford, MI 48329
        </address>
        <a href="tel:9894648879" class="text-link phone">989.464.8879</a>
        <a href="mailto:info@rebirthsports.com" class="text-link phone">info@rebirthsports.com</a>
      </div>
      <div class="follow-us">
        <h2 class="h2 heading">
          Follow us on
        </h2>
        <div class="social-icons">
          <ul class="nav nav-pills">
            <li role="presentation">
              <a href="#" class="social-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'facebook' ); ?>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="social-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'instagram' ); ?>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="social-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'twitter' ); ?>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="social-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'youtube' ); ?>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="social-icon">
                <?php get_template_part( 'template-parts/svg/svg', 'snapchat' ); ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <h2 class="h2 heading">
        Have a question?
      </h2>
      <?php echo do_shortcode('[contact-form-7 id="43" title="Contact - Footer" html_id="contact-form-footer" html_class="form contact-form"]'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 disclaimer">
      <p>
        @2017 Rebirth Sports
        <br class="visible-xs-block">
        <a href="#">Privacy Policy</a>
         | 
        <a href="#">Disclaimers</a>
      </p>
    </div>
  </div>
</footer>
