<?php
/**
 * Template file for displaying single posts
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */

get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'single') ?>
            <?php
                if ( comments_open() || get_comments_number() ) {
                  comments_template();
                }
             ?>

          <?php endwhile ?>

        <?php endif ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
