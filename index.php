<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main  ------------------------------>
<main class="index main">
  <section class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>