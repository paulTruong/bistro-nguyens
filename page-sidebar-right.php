<?php
/*
  Template Name: Right Sidebar
*/
?>
<?php get_header(); ?>
<section>
  <div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

  <?php endwhile; else : ?>

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>
  </div>
  <div>
    <h2>Right side</h2>
  </div>

</section>
<?php get_footer(); ?>
