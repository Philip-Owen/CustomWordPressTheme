<?php

  function enqueue_customtheme_styles() {
      wp_enqueue_style( 'customtheme-style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');

?>
