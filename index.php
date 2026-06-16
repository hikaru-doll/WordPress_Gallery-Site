<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main start -------------------------------------------------------->
<main id="index" class="main">
  <section class="wrapper">
    <ul class="list grid2">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <li class="item">
            <figure>
              <a href="single.html">
                <img
                  class="item-image"
                  src="assets/images/bracelet.webp"
                  alt="" />
              </a>
            </figure>
            <div class="item-detail">
              <h2 class="product-title">lavender amethyst</h2>
              <p class="price">&yen;4,800</p>
            </div>
          </li>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>

    </ul>
  </section>
  <?php the_posts_pagination(); ?>
  <section class="section bg">
    <div class="wrapper">
      <h2>title text</h2>
      <p>text text text text text text text text text text text text</p>
    </div>
  </section>
</main>
<!-- /main end ---------------------------------------------------------->
<?php get_footer(); ?>