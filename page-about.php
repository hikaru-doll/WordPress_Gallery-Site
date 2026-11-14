<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------>
<main class="page-about main">
  <section class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article class="list grid">
          <div class="image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div>
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>