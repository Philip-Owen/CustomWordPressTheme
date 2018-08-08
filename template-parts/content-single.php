<?php
/**
 * Template partial file for displaying single blog post content
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
?>
<div>
  <h2><?php the_title(); ?></h2>
  <p><b><?php the_date(); ?></b></p>
  <?php the_content(); ?>
</div>
