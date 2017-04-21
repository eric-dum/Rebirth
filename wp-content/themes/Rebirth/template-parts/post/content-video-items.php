<?php
/**
 * Template part for displaying video items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<section id="primary-content" class="row">
  <div class="post-content">
    <div class="content">
      <div class="col-md-7">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_id'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-5">
        <h1 class="h2">
          <?php the_title() ?> 
        </h1>
        <?php the_content() ?>
      </div>
    </div>
  </div>
</section>

<section id="recent-videos" class="row">
  <?php 
    $sectionName = 'Recent Videos';
    include( locate_template( 'template-parts/components/section-headings.php', false, false ) );
  ?>
  <div class="video-container">
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



