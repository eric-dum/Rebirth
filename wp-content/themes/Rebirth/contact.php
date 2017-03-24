<?php
/*
*
* 
* 
* Template Name: Contact Template
*/
?>

<?php get_header(); ?>

<main class="container-fluid max-contain page-contain">

  <section class="row section-relative">
    <div class="col-sm-12">
      <h1 class="h2 heading">
        Contact Us
      </h1>
      <ul class="list-unstyled list-contact">
        <li><span>Phone:</span> <a href="tel:7347270440">734.727.0440</a></li>
        <li><span>Fax:</span> <a href="tel:7347270441">734.727.0441</a></li>
        <li><span>Email:</span> <a href="mailto:contact@rebirth-sports.com" class="brand-link">contact@rebirth-sports.com</a></li>
      </ul>
    </div>
  </section>

  <section id="section-contact" class="row section-relative space-bottom">
    <div class="col-sm-12 form-container">
      <?php echo do_shortcode('[contact-form-7 id="72" title="Contact - Main" html_id="contact-form-main" html_class="form contact-form"]'); ?>
    </div>
  </section>

</main> <!-- /container -->

<?php get_footer(); ?>