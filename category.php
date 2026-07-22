<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main  -------------------------------------->
<main class="main category-php">
  <section class="wrapper">
    <h1 class="title"><?php single_cat_title(); ?></h1>
    <?php echo category_description(); ?>
    <ul class="list grid2">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <li class="item">
            <figure>
              <a href="<?php the_permalink(); ?>">
                <?php $image = get_field('main_image'); ?>
                <?php echo wp_get_attachment_image($image, 'medium'); ?>

              </a>
              <div class="item-detail">
                <h2 class="product-title"><?php the_title(); ?></h2>
                <p class="price">
                  <?php
                  $price = get_field('price');
                  if ($price !== '') {
                    echo '&yen;' . esc_html(number_format((int)$price));
                  }
                  ?>
                </p>
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
<?php get_footer(); ?>