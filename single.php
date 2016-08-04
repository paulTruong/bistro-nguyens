<?php get_header(); ?>
<section>
  <div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article>

      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php if (get_the_post_thumbnail() ) : ?>
        <div>
            <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif ?>
      <span>
        <?php echo get_avatar(get_the_author_meta('ID'), 24); ?>
      </span>
      by <?php the_author_posts_link(); ?> in <?php the_category(); ?> on <?php the_time('F j, Y'); ?>
      <?php the_content(); ?>
      <?php comments_template(); ?>
    </article>

  <?php endwhile; else : ?>

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
