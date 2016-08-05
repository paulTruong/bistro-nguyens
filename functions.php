<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu')
    )
  );
}

add_action('init', 'register_theme_menus');

function wpt_theme_styles() {
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('googleFont_css', 'https://fonts.googleapis.com/css?family=Roboto');

}
add_action('wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {
  wp_enqueue_script ('app_js', get_template_directory_uri() . '/js/app.js',
  array('jquery'), '', false );
}

add_action('wp_enqueue_scripts', 'wpt_theme_js');

?>
