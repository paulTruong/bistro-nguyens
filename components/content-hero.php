<?php
/**
 * The template used for displaying hero content in front-page.php
 *
 * @package bistro-nguyens
 */
?>

<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'pique-hero' ); ?>
<div class="hero" style="background-image:url(<?php echo esc_url( $thumbnail[0] ); ?>)">
		<?php the_field('description'); ?>
</div>
