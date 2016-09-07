<?php
  $args = array(
    'post_type' => 'front',
    'order' => 'asc'
  );
  $query = new WP_Query( $args );
?>
<div class="container">
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( has_post_thumbnail() ) :
      get_template_part('components/content', 'hero');
     endif; ?>
  <?php endwhile; endif; wp_reset_postdata(); ?>

<div class="content">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( has_post_thumbnail() ) :

    else: ?>
    <?php
        $image = get_field('image');
        $secondImage = get_field('secondimage');
    ?>
      <?php if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <!-- <div class="img" style="background-image:url(<?php echo $image['url']; ?>)"> -->
      <?php endif; ?>
      <?php if ( !empty($secondImage) ): ?>
          <img src="<?php echo $secondImage['url']; ?>" alt="<?php echo $secondImage['alt']; ?>" />
          <!-- <div class="img" style="background-image:url(<?php echo $secondImage['url']; ?>)"> -->
      <?php endif; ?>
    <article class="panel">
        <h2><?php the_field('heading'); ?></h2>
        <p><?php the_field('description'); ?></p>
    </article>
  <?php endif; ?>
  <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>
