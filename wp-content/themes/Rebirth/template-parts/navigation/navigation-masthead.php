<?php
/**
 * Displays masthead
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>
<div class="masthead">
  <div class="container-fluid max-contain">
    <div class="row">

      <div class="col-sm-3 logo-contain">
        <a href="#" class="brand-logo">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/logo.png" alt="Rebirth Sports" class="img-responsive">
        </a>
      </div>

      <div class="col-sm-4 col-sm-offset-5 hidden-xs">
        <ul class="nav nav-pills">
          <li role="presentation" class="active">
            <a href="#">
              <?php get_template_part( 'template-parts/svg/svg', 'facebook' ); ?>
            </a>
          </li>
          <li role="presentation" class="active">
            <a href="#">
              <?php get_template_part( 'template-parts/svg/svg', 'instagram' ); ?>
            </a>
          </li>
          <li role="presentation" class="active">
            <a href="#">
              <?php get_template_part( 'template-parts/svg/svg', 'twitter' ); ?>
            </a>
          </li>
          <li role="presentation" class="active">
            <a href="#">
              <?php get_template_part( 'template-parts/svg/svg', 'youtube' ); ?>
            </a>
          </li>
          <li role="presentation" class="active">
            <a href="#">
              <?php get_template_part( 'template-parts/svg/svg', 'snapchat' ); ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>