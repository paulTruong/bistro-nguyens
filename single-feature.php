<?php get_header(); ?>
<section>
  <div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_field('images'); ?>
      <div>
      <h2><?php the_field('description'); ?></h2>
      </div>

      <p>
        <?php previous_post_link(); ?>
        <a href="<?php bloginfo('url'); ?>/portfolio">Back</a>
        <?php next_post_link(); ?>
      </p>

    <?php endwhile; endif; ?>
  </div>

</section>
<?php get_footer(); ?>
