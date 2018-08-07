<?php

  function enqueue_customtheme_styles() {
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style( 'customtheme-style', get_stylesheet_uri());
    wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('js-popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
  }

  add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');


  function customtheme_setup() {
    register_nav_menus( array(
      'primary' => __('Primary Menu', 'customtheme')
    ) );

    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'customtheme_setup');

?>
