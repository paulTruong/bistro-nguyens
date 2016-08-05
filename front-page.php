<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

  <?php endwhile; endif; ?>

  <?php get_template_part('components/content', 'hero'); ?>

<?php get_footer(); ?>
