<!DOCTYPE HTML>
<html>
  <head>
    <!--Dynamic Title depending on WP settings-->
    <title><?php wp_title(); ?></title>

    <!--Tells WP its the end of the head, loads enqueue-->
    <?php wp_head();?>
  </head>

  <body>
    <header>
      <h1><a class="" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <nav>
        <?php
        // Array to store values to pass to wp_nav_menu
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'menu' //class of ul element
          );

          wp_nav_menu($defaults);

        ?>
      </nav>
    </header>
