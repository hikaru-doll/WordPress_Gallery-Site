<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NN6443KM');
  </script>
  <!-- End Google Tag Manager -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN6443KM"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>
  <!-- header  ------------------------------------->
  <header class="header">

    <?php if (is_front_page()): ?>
      <h1 class="logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          Hikaru doll Gallery-Site
        </a>
      </h1>
    <?php else: ?>
      <div class="logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          Hikaru doll Gallery-Site
        </a>
      </div>
    <?php endif; ?>
    <button class="ham" aria-label="メニューを開く" aria-expanded="false" aria-controls="menu-header-navigation">
      <span class="ham1"></span>
      <span class="ham2"></span>
      <span class="ham3"></span>
    </button>
    <!-- WP標準メニューの使用  ----------->
    <?php wp_nav_menu(
      array(
        'theme_location' => 'header_nav',
        'container' => 'nav',
        'container_class' => 'main-navigation',
        'menu_class' => 'nav-menu',
      )
    ); ?>
  </header>