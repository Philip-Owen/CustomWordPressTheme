<?php
/**
 * The main template file
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */

get_header(); ?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Jumbotron</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <div class="row">
            <div class="col-md-8">
              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?>
              <?php the_excerpt(); ?>
            </div>
          </div>
        <?php endwhile ?>
      <?php endif ?>
    </div>




<?php get_footer(); ?>
