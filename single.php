<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------------->
<main class="single-php main">
  <!-- product image  ---------->
  <section class="wrapper">
    <ul class="list grid">

      <?php if (have_posts()): while (have_posts()): the_post(); ?>

          <?php $post_id = get_the_ID();
          $get_item_field = function ($field_name) use ($post_id) {
            if (function_exists('get_field')) {
              return get_field($field_name, $post_id);
            }
            return get_post_meta($post_id, $field_name, true);
          };
          $main_image = $get_item_field('main_image');
          $image_1 = $get_item_field('image_1');
          $image_2 = $get_item_field('image_2');
          $image_3 = $get_item_field('image_3');
          $image_4 = $get_item_field('image_4');
          $price = $get_item_field('price');
          ?>


          <?php
          $images3 = [
            $main_image,
            $image_1,
            $image_2
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
  <!-- product detail ---------->
  <section class="wrapper grid product-detail">
    <div class="item-detail">
      <h1 class="title"><?php the_title(); ?></h1>
      <p class="price">
        <?php
          $price = esc_html($price);
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
  <!-- product image sub -------->
  <section class="wrapper">
    <ul class="list grid">

      <?php
          $images2 = [
            $image_3,
            $image_4
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
</main>
<?php get_footer(); ?>