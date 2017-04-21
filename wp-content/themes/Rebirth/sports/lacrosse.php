<?php
/*
*
* 
* 
* Template Name: Lacrosse Archive Template
*/
$sport = 'lacrosse';
?>

<?php get_header(); ?>

<main class="container-fluid max-contain page-contain">

  <section class="row section-relative">
    <div class="col-sm-12">
      <h1 class="h2 heading">
        <?php echo $sport; ?>
      </h1>
    </div>
  </section>

  <section class="row section-relative space-bottom">
    
    <?php 
      $args = array(
        'post_type' => 'work-items',
        'category_name' => $sport
      );
      $query = new WP_Query( $args ); 
    ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      
    <?php get_template_part( 'template-parts/cards/card-recent-work' ); ?>

    <?php endwhile; 
       wp_reset_postdata();
     else : ?>
       <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
     <?php endif; ?>

  </section>

</main> <!-- /container -->

<?php get_footer(); ?>