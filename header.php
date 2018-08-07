<?php
/**
 * The template for displaying the header
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu-class'     => 'primary-menu',
              'container'      => false,
              'items_wrap'     => '%3$s'
            ) );
           ?>
        </ul>
      </div>
    </nav>
