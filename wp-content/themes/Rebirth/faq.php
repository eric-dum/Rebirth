<?php
/*
*
* 
* 
* Template Name: Custom Template
*/
?>

<?php get_header(); ?>

<main class="container-fluid max-contain">

  <section class="row section-relative">
    <div class="col-sm-12">
      <h1 class="h2 heading">
        FAQ's
      </h1>
    </div>
  </section>

  <section class="row section-relative space-bottom">
    
    <?php 
      $args = array(
        'post_type' => 'faq'
      );
      $query = new WP_Query( $args ); 
    ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      
    <?php get_template_part( 'template-parts/post/content-faq-items' ); ?>

    <?php endwhile; 
       wp_reset_postdata();
     else : ?>
       <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
     <?php endif; ?>

    <div class="col-sm-12 text-center">
      <a href="mailto:email@email.com" class="btn btn-primary">
        Have a question? Email Me
      </a>
    </div>

  </section>

</main> <!-- /container -->

<?php get_footer(); ?>