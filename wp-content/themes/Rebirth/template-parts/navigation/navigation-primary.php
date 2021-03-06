<?php
/**
 * Displays primary navigation
 *
 * @package Rebirth
 * @since 1.0
 * @version 1.0
 */

?>
<nav class="navbar navbar-default" id="primary-nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-target="#primary-nav-items">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="primary-nav-items">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a href="/">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="/about/">
            About us
          </a>
        </li>
        <li class="nav-item">
          <a href="/faqs/">
            FAQ
          </a>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Sports <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
          
            <?php get_template_part( 'template-parts/navigation/navigation', 'sports' ); ?>
          
          </ul>
        </li>
        <li class="nav-item">
          <a href="/the-work/">
            Recent Work
          </a>
        </li>
        <li class="nav-item">
          <a href="/contact/">
            Contact
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>