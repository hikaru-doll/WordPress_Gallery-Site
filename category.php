<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main  -->
<main class="main category-php">
  <section class="wrapper">
    <h1 class="title"><?php single_cat_title(); ?></h1>
    <?php echo category_description(); ?>
    <ul class="list grid2">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>

          <?php $post_id = get_the_ID();
          $get_item_field = function ($field_name) use ($post_id) {
            if (function_exists('get_field')) {
              return get_field($field_name, $post_id);
            }
            return get_post_meta($post_id, $field_name, true);
          };
          $main_image = $get_item_field('main_image');
          $price = $get_item_field('price');
          ?>

          <li class="item">
            <figure>
              <a href="<?php the_permalink(); ?>">
                <?php $image = esc_html($main_image); ?>
                <?php echo wp_get_attachment_image($image, 'medium'); ?>

              </a>
              <div class="item-detail">
                <h2 class="product-title"><?php the_title(); ?></h2>
                <p class="price">
                  <?php
                  $price = esc_html($price);
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

</main>
<?php get_footer(); ?>