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
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
          <a href="/">
            Home
          </a>
        </li>
        <li>
          <a href="/about">
            About us
          </a>
        </li>
        <li>
          <a href="/faq">
            FAQ
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Sports <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
          
            <?php get_template_part( 'template-parts/navigation/navigation', 'sports' ); ?>
          
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>