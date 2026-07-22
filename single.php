<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main start ------------------------------------->
<main class="single-php main">
  <!-- product image start ------------------->
  <section class="wrapper">
    <ul class="list grid">

      <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <?php
          $images3 = [
            get_field('main_image'),
            get_field('image_1'),
            get_field('image_2'),
          ]; ?>

          <?php foreach ($images3 as $img): ?>
            <?php if ($img): ?>
              <li class="item">
                <figure>
                  <?php echo wp_get_attachment_image($img, 'medium'); ?>
                </figure>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>

    </ul>
  </section>
  <!-- /product image end --------------------->
  <!-- product detail start ------------------->
  <section class="wrapper grid product-detail">
    <div class="item-detail">
      <h1 class="title"><?php the_title(); ?></h1>
      <p class="price">
        <?php
          $price = get_field('price');
          if ($price !== '') {
            echo '&yen;' . esc_html(number_format((int)$price));
          }
        ?>
      </p>
    </div>
    <div class="text">
      <?php the_content(); ?>
      <div class="link">
        <a href="<?php echo esc_url(home_url()); ?>">return to top</a>
      </div>
    </div>
  </section>
  <!-- /product detail end ----------------->
  <!-- product image sub start ------------->
  <section class="wrapper">
    <ul class="list grid">

      <?php
          $images2 = [
            get_field('image_3'),
            get_field('image_4'),
          ]; ?>
      <?php foreach ($images2 as $img): ?>
        <?php if ($img): ?>
          <li class="item">
            <figure>
              <?php echo wp_get_attachment_image($img, 'medium'); ?>
            </figure>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </section>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
<!-- /product image sub end --------------->
</main>
<!-- /main end ----------------------------------------------->
<?php get_footer(); ?>