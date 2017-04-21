<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main class="container-fluid max-contain">

  <!-- HERO CAROUSEL -->
  <section id="hero" class="row">
    <div class="col-sm-12 zero-pad-h">
      <?php get_template_part( 'template-parts/carousel/carousel', 'hero' ); ?>
    </div>
  </section>

  <!-- SOCIAL -->
  <section id="social-contact" class="row">
    <div class="col-sm-4">
      <?php get_template_part( 'template-parts/cards/card', 'social-twitterfeed' ); ?>
    </div>
    <div class="col-sm-4">
      <?php get_template_part( 'template-parts/cards/card', 'social-instagramfeed' ); ?>
    </div>
    <div id="contact-home" class="col-sm-4">
      <?php get_template_part( 'template-parts/cards/card', 'contact-home' ); ?>
    </div>
  </section>

  
  <!-- LATEST WORK -->
  <section id="latest-work" class="row">
    <?php 
      $sectionName="Recent Work";
      include( locate_template( 'template-parts/components/section-headings.php', false, false ) );
    ?>
    <?php get_template_part( 'template-parts/carousel/carousel', 'work' ); ?>
  </section>

  <!-- LATEST VIDEOS -->
  <section id="latest-videos" class="row">
    <div class="col-sm-12">
      <h2 class="heading heading-zero-margin">
        Latest Videos
      </h2>
    </div>
    <div class="media-contain">
      <?php 
        $args = array(
          'post_type' => 'videos',
          'posts_per_page' => '3'
        );
        $query = new WP_Query( $args ); 
      ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
      <?php get_template_part( 'template-parts/cards/card', 'media' ); ?>

      <?php endwhile; 
         wp_reset_postdata();
       else : ?>

      <?php endif; ?>
    </div>
  </section>


  

</main> <!-- /container -->


<?php get_footer();
