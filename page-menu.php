<?php
/*Template Name: Menu Page*/
 ?>
<?php get_header(); ?>

<?php
  $args = array(
    'post_type' => 'menu_item',
    'order' => 'asc'
  );
  $query = new WP_Query( $args );
?>





<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
  <article>
      <h2><?php the_field('name'); ?></h2>
      <p><?php the_field('description'); ?></p>
      <p><?php the_field('price'); ?></p>
  </article>

  <?php
  $term = get_field('type');

  if( $term ): ?>
  <article>
    <h2><?php echo $term->name; ?></h2>

</article>
  <?php endif; ?>

  <?php endwhile; endif; wp_reset_postdata(); ?>



<?php get_footer(); ?>
