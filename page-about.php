<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main start--------------------------------------------------->
<main id="page-about" class="main">
  <section class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <div class="list grid">
          <div class="image">
            <?php the_post_thumbnail(); ?>
          </div>
          <article>
            <?php the_content(); ?>
          </article>
        </div>


      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
  </section>

</main>
<!-- /main end ---------------------------------------------------------->
<?php get_footer(); ?>